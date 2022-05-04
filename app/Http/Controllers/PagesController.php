<?php

namespace App\Http\Controllers;

use App\Models\Category;
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

    public function catalog(){
        $categories = Category::all();
        return view('catalog', ['categories'=>$categories]);
    }
}
