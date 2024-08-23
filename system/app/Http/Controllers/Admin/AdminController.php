<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Anak;
use App\Models\Orangtua;
use App\Models\RfidLog;
use App\Models\RekamMedis;
use App\Models\RfidCard;
use App\Models\Imunisasi;
use Auth;

class AdminController extends Controller
{
    function beranda(){
        $data['title'] = 'Selamat datang admin';
        $auth = Auth::guard('admin')->user();
        $data['totalAnak'] = RfidCard::where('rfid_pos_id', $auth->admin_pos_id)->count();
        $data['totalImunisasi'] = Imunisasi::where('imunisasi_pos_id', $auth->admin_pos_id)->count();
        $data['jumlahAnak'] = RfidCard::where('rfid_pos_id', $auth->admin_pos_id)->count();
        $data['jumlahOrtu'] =  Orangtua::count();
        return view('admin.beranda',$data);
    }

    function berandaPelayanan(){
       $data['title'] = 'Dashboard Pelayanan';
       if(Auth::guard('admin')->user()->admin_meja == 0){
          return view('admin.dashboard-pelayanan',$data);

      }else if(Auth::guard('admin')->user()->admin_meja == 1){
        $data['list_rm'] = RekamMedis::where('rekam_medis_status_periksa',1)
        ->where('rekam_medis_pos_id',Auth::guard('admin')->user()->admin_pos_id)
        ->get();
        return view('admin.meja-pelayanan.dashboard-meja',$data);

    }else if(Auth::guard('admin')->user()->admin_meja == 2){
        $data['list_rm'] = RekamMedis::where('rekam_medis_status_periksa',2)
        ->where('rekam_medis_pos_id',Auth::guard('admin')->user()->admin_pos_id)
        ->get();
        return view('admin.meja-pelayanan.dashboard-meja',$data);

    }else if(Auth::guard('admin')->user()->admin_meja == 3){
        $data['list_rm'] = RekamMedis::where('rekam_medis_status_periksa',3)
        ->where('rekam_medis_pos_id',Auth::guard('admin')->user()->admin_pos_id)
        ->get();
        return view('admin.meja-pelayanan.dashboard-meja',$data);
    }
}


function getAnak(){
    $id = RfidLog::max('id');
    $uid =  RfidLog::where('id',$id)->first()->rfid;
    $anakId = Anak::where('anak_rfid',$uid)->first();
    return $anakId;
}


function prosesAnak(Anak $anak){
    $data['title'] = "Form Meja 1";
    $data['anak'] = $anak;

    $maxId = RfidLog::max('id');
    $countRfid = RfidLog::where('id',$maxId)->first();
    $data['ortu'] = Orangtua::where('orang_tua_id',$anak->anak_ortu_id)->first();

    $auth = Auth::guard('admin')->user();



    // masuk ke rekam medis
    $rm = new RekamMedis;
    $rm->rekam_medis_kode = "RM-".mt_rand(000000,999999);
    $rm->rekam_medis_status_periksa = 1;
    $rm->rekam_medis_pos_id = $auth->admin_pos_id;
    $rm->rekam_medis_ortu_id = $anak->anak_ortu_id;
    $rm->rekam_medis_anak_id = $anak->anak_id;
    $rm->rekam_medis_meja_0 = $auth->admin_id;
    $rm->rekam_medis_tanggal = date('j');
    $rm->rekam_medis_bulan = date('n');
    $rm->rekam_medis_tahun = date('Y');
    $rm->save();

    RfidLog::where('id',$countRfid->id)->delete();
    $url = 'admin/meja-1/'.$rm->rekam_medis_id;
    return redirect($url)->with('success','Silahkan arahkan ke meja 1 untuk penimbangan');
}

function dashboradMeja(){
    $data['title'] = "Data anak yang dilayanan";
    return view('admin.dashboard-pelayanan',$data);

}

function meja1(RekamMedis $rekammedis){
    $data['title'] = "Penimbangan Berat Badan";
    $data['detail'] = $rekammedis;
    $anak = $data['anak'] = Anak::where('anak_id',$rekammedis->rekam_medis_anak_id)->first();
    $data['ortu'] = Orangtua::where('orang_tua_id',$rekammedis->rekam_medis_ortu_id)->first();

    $data['rekam_medis'] = RekamMedis::where('rekam_medis_anak_id',$anak->anak_id)->get();
    return view('admin.meja-pelayanan.meja-1',$data);
}

function updateMeja1(RekamMedis $rekammedis){
    $rekammedis->rekam_medis_bb = request('rekam_medis_bb');
    $rekammedis->lingkaran_kepala = request('lingkaran_kepala');
    $rekammedis->rekam_medis_status_periksa = 2;
    $rekammedis->rekam_medis_meja_1 = Auth::guard('admin')->user()->admin_id;
    $rekammedis->save();
    $url = 'admin/meja-2/'.$rekammedis->rekam_medis_id;
    return redirect($url)->with('success','Silahkan arahkan ke meja 2');
}


function meja2(RekamMedis $rekammedis){
    $data['title'] = "Pengukuran Tinggi Badan";
    $data['detail'] = $rekammedis;
    $anak = $data['anak'] = Anak::where('anak_id',$rekammedis->rekam_medis_anak_id)->first();
    $data['ortu'] = Orangtua::where('orang_tua_id',$rekammedis->rekam_medis_ortu_id)->first();

    $data['rekam_medis'] = RekamMedis::where('rekam_medis_anak_id',$anak->anak_id)->get();
    return view('admin.meja-pelayanan.meja-2',$data);
}

function updateMeja2(RekamMedis $rekammedis){
    $rekammedis->rekam_medis_tb = request('rekam_medis_tb');
    $rekammedis->rekam_medis_status_periksa = 3;
    $rekammedis->rekam_medis_meja_2 = Auth::guard('admin')->user()->admin_id;
    $rekammedis->save();
    $url = 'admin/meja-3/'.$rekammedis->rekam_medis_id;
    return redirect($url)->with('success','Silahkan arahkan ke meja 3');
}

function meja3(RekamMedis $rekammedis){
    $data['title'] = "Pelayanan Imunisasi";
    $data['detail'] = $rekammedis;
    $anak = $data['anak'] = Anak::where('anak_id',$rekammedis->rekam_medis_anak_id)->first();
    $data['ortu'] = Orangtua::where('orang_tua_id',$rekammedis->rekam_medis_ortu_id)->first();
    $data['list_imunisasi'] = Imunisasi::where('imunisasi_pos_id',Auth::guard('admin')->user()->admin_pos_id)->get();
    $data['rekam_medis'] = RekamMedis::where('rekam_medis_anak_id',$anak->anak_id)->get();
    return view('admin.meja-pelayanan.meja-3',$data);
}

function updateMeja3(RekamMedis $rekammedis){
   $rekammedis->rekam_medis_meja_3 = Auth::guard('admin')->user()->admin_id;
   $rekammedis->rekam_medis_imunisasi_id = request('rekam_medis_imunisasi_id');
   $rekammedis->rekam_medis_asi_eksklusif = request('rekam_medis_asi_eksklusif');
   $rekammedis->rekam_medis_keterangan = request('rekam_medis_keterangan');
   $rekammedis->rekam_medis_catatan = request('rekam_medis_catatan');
   $rekammedis->save();
   return redirect('admin/dashboard-pelayanan')->with('success','Selesai');
}

}
