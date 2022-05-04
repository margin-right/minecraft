<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function catalog($id){
        $items = Item::where('category_id', $id)->get();
        return view('items', ['items' => $items]);
    }
}
