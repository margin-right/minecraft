@extends('layout')

@section('title')
    Корзина
@endsection

@section('content')
<div class="container px-4 py-5" id="hanging-icons" style="background: white; border-radius: 10px; margin-top: 50px;">
    <div class="d-flex flex-column align-items-center">
        <img class="p-3 m-auto" src="{{Storage::url($item['img'])}}" style="width:30%">
        <h4 class="mb-3">{{$item['name']}}</h4>
        <h5 class="mb-3">Цена: {{$item['cost']}}₽</h5>
        <p>{{$item['description']}}</p>
        @csrf
        <input type="number" value="{{$item['id']}}" name="item_id" hidden>
        <input type="number" class="form-control w-25 p-1" name="" id="{{$item['id']}}" min="1" max="200" value="1" aria-describedby="helpId">
        <p id="helpId" class="form-text text-muted">Количество</p>
        <button type="button" onclick="cartAdd({{$item['id']}})" class="btn btn-lg btn-warning">
            Добавить в корзину
        </button>
    </div>
    
</div>
@endsection

@section('scripts')
    <script src="/js/jquery-3.6.0.min.js"></script>
    <script src="/js/cart.js"></script>
@endsection