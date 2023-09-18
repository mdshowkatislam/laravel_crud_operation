<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function perform(){
        Session::flash();
        Auth::logout();
        return redirect('login');
    }
}
