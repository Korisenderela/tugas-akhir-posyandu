<?php

namespace App\Http\Controllers\Sub;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RfidCard;
use App\Models\OrangTua;

class SubAnakController extends Controller
{
    function index(){
        $data['title'] = 'Data seluruh anak';
    $data['jumlah_anak'] = RfidCard::where('flag_erase',1)
    ->count();

     $data['jumlah_ortu'] = OrangTua::count();

    $data['list_anak'] = RfidCard::where('flag_erase',1)
    ->get();
        return view('subadmin.anak.index',$data);
    }
}
