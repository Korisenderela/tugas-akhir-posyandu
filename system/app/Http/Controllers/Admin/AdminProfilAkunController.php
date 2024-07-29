<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Admin;
class AdminProfilAkunController extends Controller
{
     function index(){
        $data['title'] = "Profil Akun";
        $data['detail'] = Auth::guard('admin')->user();
        return view('admin.profil-akun.index',$data);
    }

    function update(){
      $auth = Auth::guard('admin')->user();
      $new = request('new');
      $confirm = request('confirm');
      if($new == $confirm){
      Admin::where('admin_id',$auth->admin_id)->update([
         'password' => bcrypt(request('new')),
      ]);
      return back()->with('success','Password berhasil diganti');
      }

      return back()->with('warning','Password tidak cocok');
    }
}
