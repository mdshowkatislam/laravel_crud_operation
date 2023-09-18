<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    public function show(){
        return view('auth.register');
    }
    public function register(RegisterRequest $rk){

        // dd($rk);
        $user=User::create($rk->validated());
        auth()->login($user);

        return redirect('/')->with('success', "Account successfully registered.");
    }
}
