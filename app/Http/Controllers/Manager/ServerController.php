<?php

namespace App\Http\Controllers\Manager;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServerController extends Controller
{
    public function index(Request $request){
        if($request->hasHeader('X-Secondlife-Object-Name')){
            print_r($request->header('X-Secondlife-Object-Name'));
        }
    }
}
