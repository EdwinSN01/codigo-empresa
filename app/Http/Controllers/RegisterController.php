<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Reques;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function show(){
        if(Auth::check()){
            return redirect('/home');
       }
        return view('auth.register');
    }

    public function register(RegisterRequest $request){
        $user = User::create($request->validate());
        return redirect('/login')->with('registro exitoso');
    }
}
