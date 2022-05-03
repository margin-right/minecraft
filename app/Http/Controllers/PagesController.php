<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('home');
    }

    public function registration(){
        return view('registration');
    }

    public function login(){
        return view('login');
    }
}
