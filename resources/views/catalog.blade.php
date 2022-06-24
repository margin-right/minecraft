@extends('layout')

@section('title')
    Каталог
@endsection

@section('content')
<div class="container"><h2 class="container pb-4 pt-4" style="color: white">Категории:</h2></div>
 <div class="container head-block d-flex">
        
        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-2">
            @foreach ($categories as $item)
                <x-category-card :id="$item['id']">{{$item['name']}}</x-category-card>
            @endforeach
                
        </div>
 </div>

 <div class="d-flex justify-content-center pt-4 text-white"><h3>В заказе может быть максимум 200 единиц товара одного наименования</h3></div>


 
@endsection