<?php

namespace App\Http\Controllers;

use App\Models\ReverealsCoint;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // public ;

    public function __construct(){

    }

    public function index(){
        $reveral = ReverealsCoint::all();
        return view('pages.home',compact('reveral'));
    }

    public function myReverall(){
        return view('pages.myreferal');
    }

}
