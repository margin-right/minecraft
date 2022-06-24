@extends('layout')

@section('title')
    Заказы
@endsection

@section('content')

<div class="container">


@if (session('role') == '1')
    
<h2 class="mt-4" style="color:white">Заказы:</h2>
@foreach ($orders as $item)
<div class=" bg-white shadow-lg rounded p-3 mb-3 position-relative">
<p>№ Заказа: {{$item['id']}}</p>
<p>Итоговая стоимость: {{$item['cost']}} ₽</p>
@if ($item['status'] == "В ожидании подтверждения")
    <div class="alert alert-warning" role="alert" style="width:fit-content">
@endif
@if ($item['status'] == "Завершен")
    <div class="alert alert-success" role="alert" style="width:fit-content">
@endif
@if ($item['status'] == "Отменен")
    <div class="alert alert-danger" role="alert" style="width:fit-content">
@endif
@if ($item['status'] == "В обработке")
    <div class="alert alert-warning" role="alert" style="width:fit-content">
@endif

    <strong>{{$item['status']}}</strong>
</div>

<form  action="/admin/order/cancel" method="post">
    @csrf
    <input type="number" class="form-control" placeholder="ID заказа" name="order_id" value="{{$item['id']}}" hidden>
    <input type="submit" class=" btn btn-danger mb-3 position-absolute" style="right:25px; top: 15px; width: 140px" id = "form-sub" value="Отменить">
</form>

<form  action="/admin/order/process" method="post">
    @csrf
    <input type="number" class="form-control" placeholder="ID заказа" name="order_id" value="{{$item['id']}}" hidden>
    <input type="submit" class=" btn btn-warning mb-3 position-absolute" style="right:25px; top: 65px; width: 140px" id = "form-sub" value="В обработку">
</form>

<form  action="/admin/order/accept" method="post">
    @csrf
    <input type="number" class="form-control" placeholder="ID заказа" name="order_id" value="{{$item['id']}}" hidden>
    <input type="submit" class=" btn btn-success mb-3 position-absolute" style="right:25px; top: 115px; width: 140px" id = "form-sub" value="Завершить">
</form>
<p>Адрес: {{$item['adress']}}</p>
</div>

@endforeach


@else
@if (count($orders) ==0)
<h4 style="color: white">Кажется вы еще не делали заказов!</h4>
<a href="/" class="btn btn-warning my-4" style="width:300px">На главную</a>
@else
<h2 class="mt-4" style="color:white">Заказы:</h2>
@foreach ($orders as $item)
<div class=" bg-white shadow-lg rounded p-3 mb-3 position-relative">
<p>№ Заказа: {{$item['id']}}</p>
<p>Итоговая стоимость: {{$item['cost']}} ₽</p>
@if ($item['status'] == "В ожидании подтверждения")
    <div class="alert alert-warning" role="alert" style="width:fit-content">
@endif
@if ($item['status'] == "Завершен")
    <div class="alert alert-success" role="alert" style="width:fit-content">
@endif
@if ($item['status'] == "Отменен")
    <div class="alert alert-danger" role="alert" style="width:fit-content">
@endif
@if ($item['status'] == "В обработке")
    <div class="alert alert-warning" role="alert" style="width:fit-content">
@endif

    <strong>{{$item['status']}}</strong>
</div>
<a href="order/del/{{$item['id']}}" class="btn btn-danger position-absolute" style="right:25px; top: 15px">Отменить</a>

<p>Адрес: {{$item['adress']}}</p>

</div>

@endforeach
@endif
@endif


    
</div>
        
@endsection