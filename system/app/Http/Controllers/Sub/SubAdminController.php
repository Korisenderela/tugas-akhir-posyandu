<?php

namespace App\Http\Controllers\Sub;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Imunisasi;
use App\Models\Subadmin;

class SubAdminController extends Controller
{
    function beranda(){
        $data['title'] = "Selamat Datang Admin";
        return view('subadmin.beranda',$data);
    }

    function imunisasi(){
    	$data['title'] = "Data seluruh imunisasi di Posyandu";
    	$data['list_imunisasi'] = Imunisasi::where('flag_erase',1)->get();
    	return view('subadmin.imunisasi',$data);
    }

    function destroyImunisasi(Imunisasi $imunisasi){
        $imunisasi->flag_erase = 0;
        $imunisasi->save();
        return back()->with('warning','Data imunisasi berhasil dihapus');
    }

    function profilAkun(){
        $data['title'] =  "Profil Akun";
        return view('subadmin.profil',$data);
    }
    
    function updateProfil(){
        $new = request('new');
        $confirm = request('confirm');
        if($new == $confirm){
            Subadmin::first()->update([
            'email' => request('email'),
            'password' => request('password'),
        ]);
        return back()->with('success','Password berhasil diganti');
        }else{
            return back()->with('error','Password tidak cocok');
        }
        
    }
}
