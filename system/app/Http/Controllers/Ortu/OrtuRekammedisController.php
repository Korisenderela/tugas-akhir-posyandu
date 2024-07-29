<?php

namespace App\Http\Controllers\Ortu;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RekamMedis;
use App\Models\Anak;

class OrtuRekammedisController extends Controller
{
     function index(){
        $data['title'] = "Data Rekam Medis Anak Anda";
        $data['list_rm'] = RekamMedis::whereNotNull('rekam_medis_imunisasi_id')->get();
        return view('ortu.rekam-medis.index',$data);
    }

    function show(RekamMedis $rekammedis){
      $data['title'] = "Detail Rekam Medis";
      $data['detail'] = $rekammedis;
      return view('ortu.rekam-medis.show',$data);
    }

    function rmAnak(Anak $anak){
      $data['title'] = "Rekam Medis " .ucwords($anak->anak_nama);
      $data['list_rm'] = RekamMedis::where('rekam_medis_anak_id',$anak->anak_id)->get();
      return view('ortu.rekam-medis.index',$data);
    }


}
