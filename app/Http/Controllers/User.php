<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
    function GetUser(Request $request)
    {
        $request->session()->flash('message','Data has been add successful');
        $request->session()->flash('sender','You are serch somthing else');
        return redirect('userview');
    }
}
