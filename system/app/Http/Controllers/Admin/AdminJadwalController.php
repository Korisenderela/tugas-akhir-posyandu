<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jadwal;
use App\Models\Imunisasi;
use Auth;

class AdminJadwalController extends Controller
{
      function index(){
        $auth = Auth::guard('admin')->user();
        $data['title'] = "Data Jadwal Imunisasi";
        $data['list_jadwal'] = Jadwal::where('jadwal_pos_id',$auth->admin_pos_id)
        ->where('flag_erase',1)
        ->get();
        $data['list_imunisasi'] = Imunisasi::where('imunisasi_pos_id', $auth->admin_pos_id)
        ->where('flag_erase',1)
        ->get();
        return view('admin.jadwal-imunisasi.index',$data);
    }

    function store(){
      $auth = Auth::guard('admin')->user();
      $tanggal = request('jadwal_tanggal');

      $jadwal = new Jadwal;
      $jadwal->jadwal_pos_id = $auth->admin_id;
      $jadwal->jadwal_imunisasi_id = request('jadwal_imunisasi_id');
      $jadwal->jadwal_tanggal_full = request('jadwal_tanggal');
      $jadwal->jadwal_lokasi = request('jadwal_lokasi');
      $jadwal->jadwal_tanggal = date('d', strtotime($tanggal));
      $jadwal->jadwal_bulan = date('n', strtotime($tanggal));
      $jadwal->jadwal_tahun = date('Y', strtotime($tanggal));
      $jadwal->save();

      return back()->with('success','Jadwal berhasil dibuat');
    }

    function destroy(Jadwal $jadwal){
      $jadwal->flag_erase = 0;
      $jadwal->save();
      return back()->with('warning','Data berhasil dihapus');
    }
}
