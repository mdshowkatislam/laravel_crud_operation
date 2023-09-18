<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function show(){
        return view('auth.login');
    }
    public function login(LoginRequest $rk){
     $credential=$rk->getCredentials();

     if(!Auth::validate($credential)):
        return redirect()->to(login)->withErrors(trans('auth.failed'));


    endif;
    // dd(\Auth::getProvider());

    $user=Auth::getProvider()->retrieveByCredentials($credential);
    Auth::login($user);
    return $this->authenticated($request,$user);

    }
    public function authenticated(Request $request,$user){
        return redirect()->intended();
    }
}
