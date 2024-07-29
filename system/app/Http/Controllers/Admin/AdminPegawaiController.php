<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Auth;

class AdminPegawaiController extends Controller
{
  function index(){
    $posId = Auth::guard('admin')->user();
     $data['title'] = "Data Pegawai Posyandu";
     $data['list_pegawai'] = Admin::where('admin_pos_id',$posId->admin_pos_id)
     ->where('flag_erase',1)
     ->paginate(12);
     return view('admin.master-data.data-pegawai.index',$data);
  }

  function create (){
   $data['title'] = "Buat Data Pegawai";
   return view('admin.master-data.data-pegawai.create',$data);
}

function store(){
   $posId = Auth::guard('admin')->user();
   $admin = new Admin;
   $admin->admin_pos_id = $posId->admin_pos_id;
   $admin->admin_level = request('admin_level');
   $admin->admin_jabatan = request('admin_jabatan');
   $admin->admin_nama = request('admin_nama');
   $admin->admin_alamat = request('admin_alamat');
   $admin->admin_tanggal_lahir = request('admin_tanggal_lahir');
   $admin->admin_jenis_kelamin = request('admin_jenis_kelamin');
   $admin->admin_jenis_kelamin = request('admin_jenis_kelamin');
   $admin->admin_meja = request('admin_meja');
   $admin->admin_notlp = request('admin_notlp');
   $admin->password = bcrypt(123);
   $admin->email = request('email');
   $admin->save();
   return redirect('admin/master-data/data-pegawai')->with('success','Data pegawai berhasil ditambahkan');
}

function show(Admin $admin){
  $data['title'] = "Detail Pegawai";
  $data['detail'] = $admin;
  return view('admin.master-data.data-pegawai.show',$data);
}

function edit(Admin $admin){
  $data['title'] = "Edit Data Pegawai";
  $data['detail'] = $admin;
  return view('admin.master-data.data-pegawai.edit',$data);
}

function update(Admin $admin){

   $admin->admin_level = request('admin_level');
   $admin->admin_jabatan = request('admin_jabatan');
   $admin->admin_nama = request('admin_nama');
   $admin->admin_alamat = request('admin_alamat');
   $admin->admin_tanggal_lahir = request('admin_tanggal_lahir');
   $admin->admin_jenis_kelamin = request('admin_jenis_kelamin');
   $admin->admin_jenis_kelamin = request('admin_jenis_kelamin');
   $admin->admin_meja = request('admin_meja');
   $admin->admin_notlp = request('admin_notlp');
    $admin->email = request('email');
   $admin->save();

   return redirect('admin/master-data/data-pegawai')->with('success','Data pegawai berhasil diupdate');
}

function destroy(Admin$admin){
   $admin->flag_erase = 0;
   $admin->save();
   return back()->with('warning','Data pegawai berhasil dihapus');
}

function resetPassword(Admin $admin){
  Admin::where('admin_id',$admin->admin_id)->update([
    'password' => bcrypt(123)
  ]);
  return back()->with('success','Password telah direset');
}
}
