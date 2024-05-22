<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(){

        return view('dashboard.main');
    }


    public function loginForm(){
        return view('dashboard.login');
    }

    public function loginMatch(Request $request)
    {
//        dd($request);
        $credentials = $request->only('name', 'password');

        if (Auth::attempt($credentials)) {
          return  redirect()->route('dashboard');
        }

        return back()->with('error','credential not match');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login')->with('success' ,'successfully logout');
    }
}
