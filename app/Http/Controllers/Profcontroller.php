<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Profcontroller extends Controller
{
    public function __construct(){

        $this->middleware('auth');
        $this->middleware('soloprof',['only' => 'index2']);
    }

    public function index2(){

        return view('Principal-Prof');
    }
}
