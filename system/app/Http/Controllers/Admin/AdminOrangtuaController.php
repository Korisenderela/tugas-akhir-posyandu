<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Anak;
use App\Models\RekamMedis;
use App\Models\OrangTua;
use App\Models\RfidCard;
use Auth;

class AdminOrangtuaController extends Controller
{
  function index(){
    $data['title'] = "Data Anak";
    $auth = Auth::guard('admin')->user();
    $data['jumlah_anak'] = RfidCard::where('rfid_pos_id',$auth->admin_pos_id)
    ->where('flag_erase',1)
    ->count();

    $data['jumlah_ortu'] = OrangTua::count();

    $data['list_anak'] = RfidCard::where('rfid_pos_id',$auth->admin_pos_id)
    ->where('flag_erase',1)
    ->get();
    return view('admin.master-data.data-orangtua.index',$data);
  }

  function edit(Anak $anak){
    $data['title'] = "Edit Data Anak";
    $data['detail'] = $anak;
    return view('admin.master-data.data-orangtua.edit',$data);
  }

  function update(Anak $anak){
   Orangtua::where('orang_tua_id', $anak->anak_ortu_id)->update([
    'orang_tua_no_kk' => request('orang_tua_no_kk'),
    'orang_tua_ibu' => request('orang_tua_ibu'),
    'orang_tua_ayah' => request('orang_tua_ayah'),
    'orang_tua_nik_ayah' => request('orang_tua_nik_ayah'),
    'orang_tua_nik_ibu' => request('orang_tua_nik_ibu'),
    'orang_tua_alamat' => request('orang_tua_alamat'),
    'orang_tua_rt' => request('orang_tua_rt'),
    'orang_tua_rw' => request('orang_tua_rw'),
    'email' => request('email'),
  ]);


   $anak->anak_no_kk = request('orang_tua_no_kk');
   $anak->anak_ke = request('anak_ke');
   $anak->anak_no_akte = request('anak_no_akte');
   $anak->anak_rfid = request('anak_rfid');
   $anak->anak_nik = request('anak_nik');
   $anak->anak_nama = request('anak_nama');
   $anak->anak_bb = request('anak_bb');
   $anak->anak_tb = request('anak_tb');
   $anak->anak_tempat_lahir = request('anak_tempat_lahir');
   $anak->anak_tanggal_lahir = request('anak_tanggal_lahir');
   $anak->anak_status_lahir = request('anak_status_lahir');
   $anak->anak_jenis_kelamin = request('anak_jenis_kelamin');
   $anak->save();

   return back()->with('success','Data telah diupdate');

 }

 function perkembangan(Anak $anak){
  $data['title'] = "Perkembangan Anak";
  $data['anak'] = Anak::where('anak_id',$anak->anak_id)->first();
  $data['list_rm'] = RekamMedis::where('rekam_medis_anak_id',$anak->anak_id)->where('rekam_medis_status_periksa',3)->get();
  return view('admin.master-data.data-orangtua.perkembangan',$data);
}

function show(Anak $anak){
 $data['title'] = "Perkembangan Anak";
 $data['detail'] = $anak;
 $data['list_rm'] = RekamMedis::where('rekam_medis_anak_id',$anak->anak_id)->where('rekam_medis_status_periksa',3)->get();
 return view('admin.master-data.data-orangtua.show',$data);
}

function destroy(Anak $anak){
  $anak->flag_erase = 0;
  $anak->save();
  RfidCard::where('rfid_anak_id',$anak->anak_id)->update([
    'flag_erase' => 0
  ]);
  return back()->with('warning','Data telah dihapus');
}
}
