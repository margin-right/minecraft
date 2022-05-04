@extends('layout')

@section('title')
    Каталог
@endsection

@section('content')
 <div class="container head-block d-flex">
        
        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
            @foreach ($categories as $item)
                <x-category-card :id="$item['id']">{{$item['name']}}</x-category-card>
            @endforeach
            
            
            
        </div>
 </div>


 
@endsection