<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Estcontroller extends Controller
{
    public function __construct(){

        $this->middleware('auth');
        $this->middleware('soloest',['only' => 'index3']);
    }

    public function index3(){

        return view('Principal-Est');
    }
}
