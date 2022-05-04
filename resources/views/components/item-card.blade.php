<div class="col" style="width: 320px; height:500px">
    <div class="card shadow-sm" style="width: 300px; height:450px">
      <img class="p-3 m-auto" src="/content/cards/{{$img}}" style="width:250px">

      <div class="card-body">
        <p class="card-text">{{$slot}}</p>
        <div class="d-flex justify-content-between align-items-center">
            <h6>Цена:{{$cost}} ₽</h6>
          <div class="btn-group">
            <button type="button" class="btn btn-warning">Купить</button>
          </div>
        </div>
      </div>
    </div>
</div>