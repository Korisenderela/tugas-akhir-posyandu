<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RekamMedis;
use Auth;
class AdminRekamMedisController extends Controller
{
      function index(){
        $data['title'] = "Data Rekam Medis";
        $auth = Auth::guard('admin')->user();
        $data['list_rm'] = RekamMedis::where('rekam_medis_pos_id',$auth->admin_pos_id)
        ->where('flag_erase',1)
        ->get();
        return view('admin.master-data.rekam-medis.index',$data);
    }
}
