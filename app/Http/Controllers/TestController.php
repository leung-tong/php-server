<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    function getInfo(Request $request){
        $data = [];
        $data['username'] = $request->get('username','admin');
        $data['password'] = $request->get('password','root123');

        return response()->json($data);
    }
}
