<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RfidLog;


class ApiSensorController extends Controller{
  
  function save(Request $request){
        $rfid = trim($request->rfid); 
        $data =  RfidLog::create([
            "rfid" => trim($request->rfid),
        ]);
        return response()->json(['status' => 'success']);
    }



    function cekUid(){
           $id = RfidLog::max('id');
           $uid = RfidLog::where('id',$id)->first()->uid;

           return response()->json([
            'data' => $data->uid,
            'message' => 'Fetch all posts',
            'success' => true
        ]);
    }




}
