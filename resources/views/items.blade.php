@extends('layout')

@section('title')
    Каталог
@endsection

@section('content')
 <div class="container head-block d-flex justify-content-center">
        
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 d-flex justify-content-center">
        @foreach ($items as $item)
            <x-item-card :img="$item['img']" :cost="$item['cost']">{{$item['name']}}</x-item-card>
        @endforeach
    </div>
 </div>


 
@endsection