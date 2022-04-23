<div id="carouselId" class="carousel slide rounded-3" data-bs-ride="carousel">
    <ol class="carousel-indicators">
        <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
        <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
    </ol>
    <div class="carousel-inner rounded-3" role="listbox" >
        <div class="carousel-item active">
            <img src={{asset('content/slide1.png')}}>
        </div>
        <div class="carousel-item">
            <img src={{asset('content/slide2.png')}}>
        </div>
        <div class="carousel-item">
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