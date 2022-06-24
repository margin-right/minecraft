<div id="carouselId" class="carousel slide rounded-3" data-bs-ride="carousel">
    
    <ol class="carousel-indicators">
        <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
        <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
    </ol>
    <div class="carousel-inner rounded-3" role="listbox" >
        
        <div class="carousel-item active">
            <h1 class=" position-absolute" style="left: 40px; top:40px;z-index:10; color: white">Современные стандарты качеств и регулярные поставки от производителя</h1>
            <div class="w-100 h-100 position-absolute" style="background: rgba(0,0,0,0.7)"></div>
            <img src={{asset('content/slide1.png')}}>
        </div>
        <div class="carousel-item">
            <h1 class=" position-absolute" style="left: 40px; top:40px;z-index:10; color: white">Быстрая доставка по всей России</h1>
            <div class="w-100 h-100 position-absolute" style="background: rgba(0,0,0,0.7)"></div>
            <img src={{asset('content/slide2.png')}}>
        </div>
        <div class="carousel-item">
            <h1 class=" position-absolute" style="left: 40px; top:40px;z-index:10; color: white">Крупнейший выбор комплектующих</h1>
            <div class="w-100 h-100 position-absolute" style="background: rgba(0,0,0,0.7)"></div>
            <img src={{asset('content/slide3.png')}}>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
</div>