<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // public ;

    public function __construct(){

    }

    public function index(){
        return view('layouts.apps');
    }
}
