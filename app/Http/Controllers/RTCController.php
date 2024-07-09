<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RTCController extends Controller
{
    public function index(){
        return view('rtc.index');
    }

     public function auth(Request $request){
        return response()->json(auth()->user());
    }
}
