<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    function login(){
        return view('session.signin');
    }
    function regist(){
        return view('session.signup');        
    }
    function abc(){
        return view('session.forget');        
    }
}
