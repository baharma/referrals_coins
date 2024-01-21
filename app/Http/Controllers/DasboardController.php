<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DasboardController extends Controller
{


    public function registerWithCode($reverarll){
        return view('auth.register-reverall',compact('reverarll'));
    }
}
