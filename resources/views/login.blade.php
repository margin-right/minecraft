@extends('layout')
@section('title')
    Вход
@endsection

@section('content')

    <div class="container mt-4" style="max-width: 720px">
        <form method="POST" class="p-4 p-md-5 border rounded-3 bg-light" id = "form-block" enctype="multipart/form-data">
            <h2 class=" pb-2 w-100 text-center">Вход</h2>
            @csrf
            <div class="form-floating mb-3">
                <input type="email" class="form-control" placeholder="Адрес email" name="email" minlength="1">
                <label >Адрес email</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" placeholder="Пароль" name="password">
                <label>Пароль</label>
            </div>
            <input type="submit" class="w-100 btn btn-lg btn-warning" id = "form-sub" value="Войти">
        </form>
    </div>
    
@endsection

@section('scripts')

@endsection