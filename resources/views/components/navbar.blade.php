<header>
    <div class="container d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom text-white">
      <a href="/"><i class="bi bi-currency-bitcoin fs-1" style="color:white"></i></a>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="/catalog" class="nav-link px-2 text-white">Каталог</a></li>
        <li><a href="/constructor" class="nav-link px-2 text-white">Конструктор</a></li>
        <li><a href="/contacts" class="nav-link px-2 text-white">Контакты</a></li>
        <li><a href="/about" class="nav-link px-2 text-white">О нас</a></li>
      </ul>

      
        @if (session('email'))
        <div class="dropdown text-end">
          <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <img src={{Storage::url(session('avatar'))}} alt="mdo" width="32" height="32" class="rounded-circle">
          </a>
          <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1" style="">
            <li><a class="dropdown-item" href="#">Корзина</a></li>
            <li><a class="dropdown-item" href="#">Заказы</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/logout">Выйти</a></li>
          </ul>
        </div>
        @else
        <div class="col-md-3 text-end">
          <a href="/login" type="button" class="btn btn-outline-warning me-2 mt-1">Вход</a>
          <a href="/registration" type="button" class="btn btn-warning mt-1">Регистрация</a>
        </div>
        @endif
        
      
    </div>
</header>
