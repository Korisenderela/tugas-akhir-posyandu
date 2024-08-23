<?php

namespace App\Http\Controllers\Ortu;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;

class OrtuController extends Controller
{
    function beranda(){
        $data['title'] = "Selamat datang orang tua bijak";
        $data['list_berita'] = Berita::all();
        return view('ortu.beranda',$data);
    }

    function detailBerita(Berita $berita){
        $data['title'] = 'Detail Event';
        $data['detail'] = $berita;
        return view('ortu.detail-berita',$data);
    }
}
