@extends('layout')

@section('title')
    Майнинг фермы
@endsection

@section('content')
 <div class="container head-block d-flex">
    <div class="bg-body h-100 rounded-3 shadow-lg news-block flex-shrink-0" >
        <div class="d-flex px-3">
            <h5 class="py-3 px-1 m-0">Горячие новинки!</h5>
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" fill="red" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 611.999 611.999" style="enable-background:new 0 0 611.999 611.999;" xml:space="preserve">
                <g><path d="M216.02,611.195c5.978,3.178,12.284-3.704,8.624-9.4c-19.866-30.919-38.678-82.947-8.706-149.952   c49.982-111.737,80.396-169.609,80.396-169.609s16.177,67.536,60.029,127.585c42.205,57.793,65.306,130.478,28.064,191.029   c-3.495,5.683,2.668,12.388,8.607,9.349c46.1-23.582,97.806-70.885,103.64-165.017c2.151-28.764-1.075-69.034-17.206-119.851   c-20.741-64.406-46.239-94.459-60.992-107.365c-4.413-3.861-11.276-0.439-10.914,5.413c4.299,69.494-21.845,87.129-36.726,47.386   c-5.943-15.874-9.409-43.33-9.409-76.766c0-55.665-16.15-112.967-51.755-159.531c-9.259-12.109-20.093-23.424-32.523-33.073   c-4.5-3.494-11.023,0.018-10.611,5.7c2.734,37.736,0.257,145.885-94.624,275.089c-86.029,119.851-52.693,211.896-40.864,236.826   C153.666,566.767,185.212,594.814,216.02,611.195z"/></g>
            </svg>
        </div>
        <div>
            <x-news-title>Свежее поступление видеокарт 30 серии</x-news-title>
            <x-news-title>Лето близко! Успей приобрести товары по скидкам!</x-news-title>
            <x-news-title>Свежее поступление видеокарт 20 серии</x-news-title>
            <x-news-title>Свежее поступление видеокарт 20 серии</x-news-title>
            <x-news-title>Свежее поступление видеокарт 20 серии</x-news-title>
            <x-news-title>Свежее поступление видеокарт 20 серии</x-news-title>
            <x-news-title>Открытие сайта! Успей забрать подарочный промо-код!</x-news-title>        
        </div>
    </div>

    <div class="bg-body h-100 rounded-3 shadow-lg w-75 mx-3">
        <x-slider></x-slider>
    </div>
 </div>
 
@endsection