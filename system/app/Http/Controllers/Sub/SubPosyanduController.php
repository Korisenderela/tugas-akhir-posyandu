<?php

namespace App\Http\Controllers\Sub;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Posyandu;
use App\Models\Admin;

class SubPosyanduController extends Controller
{
    function index(){
        $data['title'] = 'MASTER DATA / POSYANDU';
        $data['list_posyandu'] = Posyandu::where('flag_erase',1)->get(); 
        return view('subadmin.master-data.posyandu.index',$data);
    }

    function create(){
         $data['title'] = 'MASTER DATA / POSYANDU / BUAT';
          return view('subadmin.master-data.posyandu.create',$data);
    }

    function store(){
        $posyandu = new Posyandu;
        $posyandu->posyandu_nama = request('posyandu_nama');
        $posyandu->posyandu_alamat = request('posyandu_alamat');
        $posyandu->posyandu_email = request('posyandu_email');
        $posyandu->posyandu_notlp = request('posyandu_notlp');
        $posyandu->save();

        $admin = new Admin;
        $admin->admin_pos_id = $posyandu->posyandu_id;
        $admin->admin_level = 1;
        $admin->admin_nama = request('admin_nama');
        $admin->admin_alamat = request('admin_alamat');
        $admin->admin_tanggal_lahir = request('admin_tanggal_lahir');
        $admin->admin_jenis_kelamin = request('admin_jenis_kelamin');
        $admin->email = request('admin_email');
        $admin->admin_notlp = request('admin_notlp');
        $admin->password = bcrypt(123);
        $admin->save();

        return redirect('subadmin/master-data/data-posyandu')->with('success','Data posyandu berhasil dibuat');
    }
}
