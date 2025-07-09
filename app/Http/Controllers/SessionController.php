<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    function GetSession(Request $Request){
        $Request->session()->put('name',$Request->input('name'));
        // echo session('name');
        return redirect('profile');
    }
    function logout(){
     session()->pull('name');
       return redirect('profile');


    }
}
