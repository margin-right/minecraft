<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\User;
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

    public function orders(){

        $id = User::id();
        if($a = User::where('id', $id)->get('role_id')[0]['role_id'] == '1'){
            $orders = Order::all()->sortByDesc('id');
        }else{
            $orders = Order::where('user_id', $id)->get()->sortByDesc('id');
        }
        
        return view('orders', ['orders'=>$orders]);
    }
}
