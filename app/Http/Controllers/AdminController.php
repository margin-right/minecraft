<?php

namespace App\Http\Controllers;

use App\Helpers\Html;
use App\Models\Category;
use App\Models\Item;
use App\Models\Order;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function Menu(){

        $categories = Category::get('name');

        return view('admin', ['category' => $categories]);
    }
    public function ItemDel(Request $request){


        /* Удаление товара по id */

        $item = $request->all();

        if(Item::where('id', $item['item_id'])->exists()){
            Item::destroy($item['item_id']);
            Html::alert('Запись с id:'.$item['item_id']." успешно удалена", "success");
        }else{
            Html::alert('Запись с id:'.$item['item_id']." не существует", "danger");
        }
        

        return back();
    }

    public function ItemEdit(Request $request){


        /* Изменение товара */

        $item = $request->all();

        if(Item::where('id', $item['item_id'])->exists()){
            Item::where('id', $item['item_id'])->update(['name'=>$item['name'], 'cost'=>$item['cost']]);
            Html::alert('Запись с id:'.$item['item_id']." успешно изменена", "success");
        }else{
            Html::alert('Запись с id:'.$item['item_id']." не существует", "danger");
        }

        return back();
    }

    public function ItemAdd(Request $request){

        /* валидация полей */

        $validated = $request->validate([

            'name'  => 'required|min:5',
            'description'  => 'required|min:5',
            'category_id'  => 'required',
            'cost' => 'required|max:10|min:1',
            'img' => 'required|file'

        ]);

        $validated['category_id'] = Category::id($validated['category_id']);

        if($validated['img']){
            $img = $validated['img']->store('public/items');
            $validated['img'] = $img;
        }

        Item::create($validated);
        Html::alert("Товар успешно добавлен", "success");

        return back();
    }

    public function OrderCancel(Request $request){


        /* Отмена заказа по id */

        $order = $request->all();
        
        if(Order::where('id', $order['order_id'])->exists()){
            Order::where('id', $order['order_id'])->update(['status'=>'Отменен']);
            Html::alert('Заказ с id:'.$order['order_id']." отменен", "success");
        }else{
            Html::alert('Заказ с id:'.$order['order_id']." не существует", "danger");
        }
        

        return back();
    }

    public function OrderAccept(Request $request){


        $order = $request->all();
        
        if(Order::where('id', $order['order_id'])->exists()){
            Order::where('id', $order['order_id'])->update(['status'=>'Завершен']);
            Html::alert('Заказ с id:'.$order['order_id']." завершен", "success");
        }else{
            Html::alert('Заказ с id:'.$order['order_id']." не существует", "danger");
        }
        

        return back();
    }

    public function OrderProcess(Request $request){

        $order = $request->all();

        if(Order::where('id', $order['order_id'])->exists()){
            Order::where('id', $order['order_id'])->update(['status'=>'В обработке']);
            Html::alert('Заказ с id:'.$order['order_id']." В обработке", "success");
        }else{
            Html::alert('Заказ с id:'.$order['order_id']." не существует", "danger");
        }

        return back();
    }
}
