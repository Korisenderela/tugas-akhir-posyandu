<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\RfidLog;

class AuthController extends Controller
{
    function login(Request $request){
        Auth::logout();
        Auth::guard('admin')->logout();
        Auth::guard('subadmin')->logout();
        return view('login')->with('success','Silahkan Masuk Kembali !!!');
    }

    function prosesOrtu(Request $request){
         $credentials = $request->only('email', 'password');
        if (Auth::guard('orangtua')->attempt($credentials)) {
            return redirect()->intended('x/beranda')->with('success','Selamat datang kembali'); 
        }else{
            return back()->with('success','Login Gagal, Periksa email atau password anda !!');
        }
        
    }


    function loginAdmin(Request $request){
        Auth::logout();
        Auth::guard('admin')->logout();
        Auth::guard('subadmin')->logout();
        return view('login-admin')->with('success','Silahkan Masuk Kembali !!!');
    }

    function prosesAdmin(Request $request){
        $credentials = $request->only('email', 'password');
        if(Auth::guard('admin')->attempt($credentials)) {
            return redirect()->intended('admin/beranda')->with('success','Selamat datang kembali'); 
        }else{
            return back()->with('warning','Login Gagal, Periksa email atau password anda !!');
        }
        
    }


    function loginSubAdmin(Request $request){
        Auth::logout();
        Auth::guard('admin')->logout();
        Auth::guard('subadmin')->logout();
        return view('login-subadmin')->with('success','Silahkan Masuk Kembali !!!');
    }

    function prosesSubAdmin(Request $request){
        $credentials = $request->only('email', 'password');
        if(Auth::guard('subadmin')->attempt($credentials)) {
            return redirect()->intended('subadmin/beranda')->with('success','Selamat datang kembali'); 
        }else{
            return back()->with('warning','Login Gagal, Periksa email atau password anda !!');
        }
    }


    function logout(Request $request){
        Auth::logout();
        Auth::guard('admin')->logout();
        Auth::guard('subadmin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('login')->with('warning','Anda berhasil keluar!!!');
    }

    function scan(){
        return view('scan-mobile');
    }

    function scanStore(Request $request){

       $rfid = $request->input('rfid');
       $id = str_replace(':', '', $rfid);
       $countRfid = RfidLog::count();
       
        $maxId = RfidLog::max('id');
        $getRfid = RfidLog::where('id',$maxId)->first();

       if($countRfid == 0){
            $d = new RfidLog;
            $d->rfid = $id;
            $d->save();
       }else{
        
         RfidLog::where('id',$getRfid->id)->update([
            'rfid' => $id
        ]);

       }

       return back()->with('success','Kode RFID telah dikirim');
   }
}
