<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Компания Minecraft является одним из крупнейших продавцом обурудования для добычи различных криптовалют и обслуживания майнинг ферм по всей территории Российской федерации">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href={{asset('content/favicon.png')}} type="image/png">
    <title>@yield('title') | Minecraft</title>
    <link rel="stylesheet" href={{ asset('css/bootstrap.css') }}>
    <link rel="stylesheet" href={{ asset('css/bootstrap-icons.css') }}>
    <link rel="stylesheet" href={{ asset('css/app.css') }}>
    <script src={{asset('js/bootstrap.js')}}></script>
    <style>
        body{
            background-image: linear-gradient( 83.2deg,  rgba(150,93,233,1) 10.8%, rgba(99,88,238,1) 94.3% );
        }
        a { 
            text-decoration: none;
        } 
    </style>
</head>
<body>
    <div id="alert"></div>
    @if ($alert = session()->pull('alert'))
        <x-alert type="{{session()->pull('alert_type')}}" :message="$alert"/>
    @endif
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <x-alert type="danger" :message="$error"/>
        @endforeach
    @endif
    
    <x-navbar/>
    @yield('content')

    <div class="container" >
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top" style="color:white">
            <p class="col-md-4 mb-0 " >© 2022 "Minecraft"</p>
            <div class="d-flex">
                <a href="/catalog" style="color: white; padding-left:10px">Каталог</a>
                <a href="/#contacts" style="color: white; padding-left:10px">Контакты</a>
                <a href="/#about" style="color: white; padding-left:10px">О компании</a>
                <a href="#" style="color: white; padding-left:10px">Наверх</a>
            </div>
        </footer>
    </div>

    <script src="/js/jquery-3.6.0.min.js"></script>
    <script src="/js/cart.js"></script>
    @yield('scripts')
</body>
</html>