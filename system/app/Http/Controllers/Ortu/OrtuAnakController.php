<?php

namespace App\Http\Controllers\Ortu;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Anak;
use App\Models\RekamMedis;
use Auth;

class OrtuAnakController extends Controller
{
    function index(){
        $data['title'] = "Data Anak Anda";
        $auth = Auth::guard('orangtua')->user();
        $data['list_anak'] = Anak::where('anak_ortu_id',$auth->orang_tua_id)->where('flag_erase',1)->get();
        return view('ortu.data-anak.index',$data);
    }

    function show(Anak $anak){
         $data['list_rm'] = RekamMedis::where('rekam_medis_anak_id',$anak->anak_id)->where('rekam_medis_status_periksa',3)->get();
       return view('ortu.data-anak.show',$data);
   }

}
