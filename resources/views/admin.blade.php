@extends('layout')

@section('title')
    Панель администратора
@endsection

@section('content')
    <div class="container"><h2 class="container pb-1 pt-4" style="color: white">Панель администратора</h2></div>
    <div class="container px-4 py-5" id="hanging-icons" style="background: white; border-radius: 10px; margin-top: 50px;">

        <div class="d-flex">
        <div class="w-50">
            <h4 class="container pb-3 pt-4">Удаление товара</h4>
            <form action="/admin/item/del" method="post">
                @csrf
                <div class="w-75 form-floating mb-3">
                    <input type="number" class="form-control" placeholder="ID товара" name="item_id">
                    <label>ID товара</label>
                </div>
                <input type="submit" class="w-50 btn btn-danger mb-3" id = "form-sub" value="Удалить">
            </form>
            <a href="/catalog" class="w-50 btn btn-warning">Изменение товара в каталоге</a>
        </div>

        <div class="w-50">
            <h4 class="container pb-3 pt-4">Добавление товара</h4>
            <form action="/admin/item/add" method="post" enctype="multipart/form-data">
                @csrf
                <div class="w-75 form-floating mb-3">
                    <input class="form-control" placeholder="Название" name="name">
                    <label>Название</label>
                </div>
                <div class="mb-3 w-75">
                  <label for="" class="form-label">Описание</label>
                  <textarea class="form-control" name="description" id="" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="category" class="form-label">Категория</label>
                    <select class="form-control" name="category_id" id="category">
                      @foreach ($category as $item)
                          <option>{{$item->name}}</option>
                      @endforeach
                      
                    </select>
                  </div>
                <div class="w-50 form-floating mb-3">
                    <input type="number" class="form-control" placeholder="Цена" name="cost">
                    <label>Цена</label>
                </div>
                <div class="mb-3 w-75">
                    <label class="form-label">Фото</label>
                    <input type="file" class="form-control" name="img" aria-describedby="fileHelpId" accept=".jpg, .png, .jpeg">
                </div>
                <input type="submit" class="w-50 btn btn-warning mb-3" id = "form-sub" value="Добавить">
            </form>
        </div>
        </div>
        <hr>

        <div class="d-flex flex-wrap">
            <div class="w-50">
                <h4 class="container pb-3 pt-4">Отмена заказа</h4>
                <form action="/admin/order/cancel" method="post">
                    @csrf
                    <div class="w-75 form-floating mb-3">
                        <input type="number" class="form-control" placeholder="ID заказа" name="order_id">
                        <label>ID заказа</label>
                    </div>
                    <input type="submit" class="w-75 btn btn-danger mb-3" id = "form-sub" value="Отменить">
                </form>
            </div>

            <div class="w-50">
                <h4 class="container pb-3 pt-4">Отправить на обработку</h4>
                <form action="/admin/order/process" method="post">
                    @csrf
                    <div class="w-75 form-floating mb-3">
                        <input type="number" class="form-control" placeholder="ID заказа" name="order_id">
                        <label>ID заказа</label>
                    </div>
                    <input type="submit" class="w-75 btn btn-warning mb-3" id = "form-sub" value="В обработку">
                </form>
            </div>

            <div class="w-50">
                <h4 class="container pb-3 pt-4">Завершение заказа</h4>
                <form action="/admin/order/accept" method="post">
                    @csrf
                    <div class="w-75 form-floating mb-3">
                        <input type="number" class="form-control" placeholder="ID заказа" name="order_id">
                        <label>ID заказа</label>
                    </div>
                    <input type="submit" class="w-75 btn btn-success mb-3" id = "form-sub" value="Завершить">
                </form>
            </div>
        </div>   
    </div>
@endsection