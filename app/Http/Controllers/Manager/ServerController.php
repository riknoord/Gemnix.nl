<?php

namespace App\Http\Controllers\Manager;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServerController extends Controller
{
    public function index(Request $request){
        if($request->hasHeader('x-secondlife-owner-name')){
            print_r($request->header('x-secondlife-owner-name'));
        }

        print_r($request->headers);
        print_r($request->header('accept'));
    }
}
