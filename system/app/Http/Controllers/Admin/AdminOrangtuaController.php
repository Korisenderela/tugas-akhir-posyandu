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
