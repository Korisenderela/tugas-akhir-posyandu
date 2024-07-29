<?php

namespace App\Http\Controllers\Sub;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubAdminController extends Controller
{
    function beranda(){
        $data['title'] = "Selamat Datang Admin";
        return view('subadmin.beranda',$data);
    }
}
