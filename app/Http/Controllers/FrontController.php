<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        return view('front.home');
    }

    public function about(){
        return view('front.about');
    }

    public function menu(){
        return view('front.menu');
    }

    public function service(){
        return view('front.service');
    }
    public function contact(){
        return view('front.contact');
    }
 public function appointment(){
        return view('front.appointment');
 }
}
