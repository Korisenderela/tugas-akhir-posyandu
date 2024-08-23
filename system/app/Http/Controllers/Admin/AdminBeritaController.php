<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;

class AdminBeritaController extends Controller
{
    function index(){
        $data['list_berita'] = Berita::all();
        $data['title'] = 'Data Event Posyandu';
        return view('admin.berita.index',$data);
    }

    function create(){
        $data['title'] = "Buat event baru";
        return view('admin.berita.create',$data);
    }

    function store(){
        $berita = new Berita;
        $berita->judul = request('judul');
        $berita->isi = request('isi');
        $berita->handleUploadFoto();
        $berita->save();
        return redirect('admin/berita')->with('success','Berita berhasil dibuat');
    }

     function update(Berita $berita){
        $berita->judul = request('judul');
        $berita->isi = request('isi');
        $berita->handleUploadFoto();
        $berita->save();
        return redirect('admin/berita')->with('success','Berita berhasil diedit');
    }

    function show(Berita $berita){
        $data['title'] = 'Detail Event';
        $data['detail'] = $berita;
        return view('admin.berita.show',$data);
    }

    function edit(Berita $berita){
        $data['title'] = 'Edit Detail Event';
        $data['detail'] = $berita;
        return view('admin.berita.edit',$data);
    }

    function destroy(Berita $berita){
        $berita->delete();
        return back()->with('warning','Data berita telah dihapus');
    }
}
