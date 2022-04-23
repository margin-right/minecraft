<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href={{asset('content/favicon.png')}} type="image/png">
    <title>@yield('title') | Minecraft</title>
    <link rel="stylesheet" href={{ asset('css/bootstrap.css') }}>
    <link rel="stylesheet" href={{ asset('css/bootstrap-icons.css') }}>
    <link rel="stylesheet" href={{ asset('css/app.css') }}>
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
    <x-navbar/>
    @yield('content')
    @yield('scripts')
</body>
</html>