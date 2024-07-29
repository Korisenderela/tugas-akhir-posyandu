<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Imunisasi;
use Auth;

class AdminImunisasiController extends Controller
{
    function index(){
        $data['title'] = "Data Imunisasi";
        $auth = Auth::guard('admin')->user();
        $data['list_imunisasi'] = Imunisasi::where('flag_erase',1)
        ->where('imunisasi_pos_id',$auth->admin_id)
        ->get();
        return view('admin.master-data.data-imunisasi.index',$data);
    }

    function create(){
        $data['title'] = "Buat Data Imunisasi";
        return view('admin.master-data.data-imunisasi.create',$data);
    }

    function store(){
        $imunisasi = new Imunisasi;
        $imunisasi->imunisasi_pos_id = Auth::guard('admin')->user()->admin_pos_id;
        $imunisasi->imunisasi_nama = request('imunisasi_nama');
        $imunisasi->imunisasi_lama = request('imunisasi_lama');
        $imunisasi->imunisasi_deskripsi = request('imunisasi_deskripsi');
        $imunisasi->imunisasi_bulan_awal = request('imunisasi_bulan_awal');
        $imunisasi->imunisasi_bulan_akhir = request('imunisasi_bulan_akhir');
        $imunisasi->save();
        return redirect('admin/master-data/data-imunisasi')->with('success','Data imunisasi berhasil dibuat');
    }

    function destroy(Imunisasi $imunisasi){
        $imunisasi->flag_erase = 0;
        $imunisasi->save();
        return back()->with('warning','Data berhasil dihapus');
        
    }
}
