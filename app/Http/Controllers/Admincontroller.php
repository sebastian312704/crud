<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admincontroller extends Controller
{
    public function __construct(){

        $this->middleware('auth');
        $this->middleware('soloadmin',['only' => 'index']);
    }

    public function index(){

        return view('Principal-Admin');
    }
}
