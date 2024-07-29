<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Posyandu;

class AdminProfilPosyanduController extends Controller
{
      function index(){
        $data['title'] = "Profil Posyandu";
         $auth = Auth::guard('admin')->user();
        $data['posyandu'] = Posyandu::where('posyandu_id',$auth->admin_pos_id)->first();
        return view('admin.profil-posyandu.index',$data);
    }

    function edit(Posyandu $posyandu){
      $data['title'] = "Edit Profil Posyandu";
      $data['posyandu'] = $posyandu;
      return view('admin.profil-posyandu.edit',$data);
    }


    function update(Posyandu $posyandu){
      $posyandu->posyandu_nama = request('posyandu_nama');
      $posyandu->posyandu_alamat = request('posyandu_alamat');
      $posyandu->posyandu_email = request('posyandu_email');
      $posyandu->posyandu_notlp = request('posyandu_notlp');
      $posyandu->handleUploadFoto();
      $posyandu->save();
      return redirect('admin/profil-posyandu')->with('success','Posyandu berhasil diupdate');

    }
}
