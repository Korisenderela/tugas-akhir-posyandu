<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RfidLog;
use App\Models\Anak;
use App\Models\Orangtua;
use App\Models\RfidCard;
use Auth;


class AdminDaftarController extends Controller
{
    function index(){
        $data['title'] = "Daftar Anak Baru";
        return view('admin.master-data.daftar.index',$data);
    }

    function getRfid(){
        $id = RfidLog::max('id');
        $id_count = RfidLog::count();

        $uid =  "";
        if($id_count == 0){
            $uid = mt_rand(1111111,9999999);
        }else{
         $uid =  RfidLog::where('id',$id)->first()->rfid;
     }
     return $uid;
 }

 function store(){
    $auth = Auth::guard('admin')->user();

    $ortu = new Orangtua;
    $ortu->orang_tua_no_kk = request('orang_tua_no_kk');
    $ortu->orang_tua_ibu = request('orang_tua_ibu');
    $ortu->orang_tua_ayah = request('orang_tua_ayah');
    $ortu->orang_tua_nik_ayah = request('orang_tua_nik_ayah');
    $ortu->orang_tua_nik_ibu = request('orang_tua_nik_ibu');
    $ortu->orang_tua_alamat = request('orang_tua_alamat');
    $ortu->orang_tua_rt = request('orang_tua_rt');
    $ortu->orang_tua_rw = request('orang_tua_rw');
    $ortu->email = request('email');
    $ortu->password = bcrypt(request('orang_tua_no_kk'));
    $ortu->save();

    $anak = new Anak;
    $anak->anak_ortu_id = $ortu->orang_tua_id;
    $anak->anak_no_kk = request('orang_tua_no_kk');
    $anak->anak_ke = request('anak_ke');
    $anak->anak_no_akte = request('anak_no_akte');
    $anak->anak_rfid = request('anak_rfid');
    $anak->anak_nik = request('anak_nik');
    $anak->anak_nama = request('anak_nama');
    $anak->anak_bb = request('anak_bb');
    $anak->anak_tb = request('anak_tb');
    $anak->anak_tempat_lahir = request('anak_tempat_lahir');
    $anak->anak_pos_create = $auth->admin_pos_id;
    $anak->anak_pegawai_create = $auth->admin_id;
    $anak->anak_tanggal_lahir = request('anak_tanggal_lahir');
    $anak->anak_status_lahir = request('anak_status_lahir');
    $anak->anak_jenis_kelamin = request('anak_jenis_kelamin');
    $anak->save();

    // simpan data kartu berdasarkan posyandu id
    $rfid = new RfidCard;
    $rfid->rfid_number = request('anak_rfid');
    $rfid->rfid_pos_id = $auth->admin_pos_id;
    $rfid->rfid_anak_id = $anak->anak_id;
    $rfid->save();
    
    $maxId = RfidLog::max('id');
    if($maxId > 0){
         $countRfid = RfidLog::where('id',$maxId)->first();
    RfidLog::where('id',$countRfid->id)->delete();
    }
   

    return back()->with('success','Data anak berhasil dibuat');

}
}
