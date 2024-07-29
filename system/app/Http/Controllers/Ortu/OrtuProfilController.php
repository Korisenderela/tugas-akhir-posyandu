<?php

namespace App\Http\Controllers\Ortu;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrtuProfilController extends Controller
{
     function index(){
        $data['title'] = "Profil Akun Anda";
        return view('ortu.profil-akun.index',$data);
    }
}
