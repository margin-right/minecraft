@extends('layout')

@section('title')
    Корзина
@endsection

@section('content')
@csrf
    <div class="container d-flex flex-column justify-content-center mt-4 flex-wrap" style="align-items:baseline">
     
        @if (!$cart)
            <h4 style="color: white">Кажется ваша корзина пуста!</h4>
            <a href="/" class="btn btn-warning my-4" style="width:300px">На главную</a>
        @else
            <h3 class="container pb-4 pt-4" style="color: white">Корзина:</h3>
            <h3 class="container pb-4 pt-4" style="color: white">Товаров на {{$sum}} ₽</h3>
            <form action="/order/create" method="post">
                @csrf
                <div class="d-flex" style="align-items:baseline">
                    <h5 class="container pb-4 pt-4" style="color: white">Адрес: </h5><input type="text" name="adress" style="border-radius:5px; border:0">
                </div>
                <div class="container d-flex pb-4"><button type="submit" class="btn btn-warning btn-lg">Заказать</button></div>
            </form>
            
            @foreach ($cart as $item)
            <div class="mb-4 mx-1 d-flex flex-row align-items-center shadow-lg justify-content-between flex-wrap w-100" style="background: white; border-radius:10px">
                <div class="d-flex m-4"style="width:300px"><img src="{{Storage::url($item['info']['img'])}}" alt="" class="card-img-top rounded-top-md"></div>
                <div class="card-body mx-3">
                    <h3 class="">{{$item['info']['name']}}</h3>
                    <hr>
                    <h4>{{$item['info']['cost']}} ₽ / шт. | Кол-во: {{$item['count']}}</h4>
                    <h4>Итог: {{$item['sum']}} ₽</h4>

                    <div class="d-flex">
                        <a href="cart/del/{{$item['id']}}" class="btn btn-danger">Удалить</a>
                    </div>

                </div>
            </div>
            @endforeach
        @endif
        
    </div>
    
@endsection

@section('scripts')
    <script src="/js/jquery-3.6.0.min.js"></script>
    <script src="/js/cart.js"></script>
@endsection