<?php

namespace App\Http\Controllers;

use App\Helpers\Html;
use App\Models\Item;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function catalog($id){
        $items = Item::where('category_id', $id)->get();
        return view('items', ['items' => $items]);
    }

    public function ItemView($id){
        $items = Item::where('id', $id)->get()[0];
        return view('item', ['item' => $items]);
    }
    

    public function cartAdd(Request $request){
        
        $userId = User::id();
        $id = $request['id'];
        $count = $request['count'];
        if($count<1 || $count>200){
            return 'введите корректное количество';
        }

        $record = ['id'=>$id, 'count'=>$count];
        $oldCart = User::where('id', $userId)->get('cart')->toArray()[0]['cart'];
        
        if($oldCart==null){
            $newCart = [$record];
            $cart = serialize($newCart);
        }else{
            $oldCart = unserialize($oldCart);
            $oldCart = $this->findAndDelId($oldCart, $id); 
            array_push($oldCart, $record);
            $cart = serialize($oldCart);
        }

        User::where('id', $userId)->update(['cart'=>$cart]);

        return 'Товар добавлен в корзину';
    }

    public function cartDel($id){

        /* Удаление товара из корзины */

        $userId = User::id();
        $oldCart = User::where('id', $userId)->get('cart')->toArray()[0]['cart'];
        $oldCart = $this->findAndDelId(unserialize($oldCart), $id);
        User::where('id', $userId)->update(['cart'=>serialize($oldCart)]);
        return redirect()->route('order');
    }

    public function ses(){
        return dd(unserialize(User::where('id', 3)->get('cart')->toArray()[0]['cart']));
        return dd(session());
    }

    public function orderView(){
        $cart = unserialize(User::where(['email'=>session('email'), 'password'=>session('password')])->get('cart')->toArray()[0]['cart']);
        $allSum = 0;
        if($cart){
            for ($i=0; $i < count($cart) ; $i++) { 
                $cart[$i]['info'] = Item::where('id', $cart[$i]['id'])->first();
                $cart[$i]['sum'] = $cart[$i]['info']['cost'] * $cart[$i]['count'];
                $allSum+=$cart[$i]['sum'];
            } 
        }
        return view('order', ['cart' => $cart, 'sum' => $allSum]);
    }

    private function findAndDelId($array, $item){
        for ($j=0; $j < count($array); $j++) { 
            if($array[$j]['id'] == $item){
                array_splice($array, $j,1);
            }
        }
        return $array;
    }

    public function orderDel($id){
        if(User::where(['email'=>session('email'), 'password'=>session('password')]) && Order::where('id', $id)->get('status')->toArray()[0]['status'] != 'Завершен'){
            Order::where('id', $id)->update(['status'=>'Отменен']);
        };

        return redirect()->route('orders');
    }

    public function orderCreate(Request $request){
        $user = User::where(['email'=>session('email'), 'password'=>session('password')])->first();
        $sum=0;
        $adres = $request->get('adress');
        if($adres == null){
            Html::alert('Введите адрес', 'warning');
            return back();
        }
        $cart = unserialize($user['cart']);
        for ($i=0; $i < count($cart); $i++) { 
            $cart[$i]['info'] = Item::where('id', $cart[$i]['id'])->first();
            $sum+= $cart[$i]['info']['cost'] * $cart[$i]['count'];
        }
        
        Order::create(
            [
                'user_id' => $user['id'],
                'items' => $user['cart'],
                'cost' => $sum,
                'adress' => $adres
            ]
        );
        Html::alert('Заказ создан, ожидайте когда с вами свяжется наш менеджер', 'success');
        User::where('id', $user['id'])->update(['cart'=>null]);
        return redirect()->route('orders');
    }



}
