<?php

namespace App\Http\Controllers\Ortu;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrtuController extends Controller
{
    function beranda(){
        $data['title'] = "Selamat datang orang tua bijak";
        return view('ortu.beranda',$data);
    }
}
