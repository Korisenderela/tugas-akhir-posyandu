<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminLaporanController extends Controller
{
    function index(){
        $data['title'] = "Data Laporan";
        return view('admin.laporan.index',$data);
    }
}
