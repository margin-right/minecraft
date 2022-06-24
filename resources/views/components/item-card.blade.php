<div class="col" style="width: 320px; height:500px">
    <div class="card shadow-sm" style="width: 300px; height:450px">
      <a href="/item/{{$id}}"><img class="p-3 m-auto" src="{{Storage::url($img)}}" style="width:250px"></a>

      <div class="card-body p-2 position-relative" >
        <form action="/admin/item/edit" method="post">
        @csrf
        <input type="number" value="{{$id}}" name="item_id" hidden>

        <p class="card-text mb-2">
          @if (session('role') == '1')
          <div class="form-floating mb-3">
            <input class="form-control" placeholder="Название" name="name" value="{{$slot}}">
            <label >Название</label>
          </div>
          @else
          {{$slot}}
          @endif
        
        </p>
        <div class="d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
              <h6 class="px-2 m-0">Цена:</h6>
              
              @if (session('role') == '1')
                <div class="form-floating" style="width:100px">
                  <input class="form-control" placeholder="Цена" name="cost" value="{{$cost}}" style="height:30px; padding:8px">
                </div>
                @else
                {{$cost}} 
                @endif
              
                <h6 class="px-2 m-0">₽</h6>
            </div>
            
          <div class="btn-group">

            @if (session('role') != '1')
            <button type="button" onclick="cartAdd({{$id}})" class="btn btn-warning">
              <i class=" icon bi-cart"></i>
              </button>
              <div class="px-2 w-75">
                <input type="number"
                  class="form-control w-100 p-1" name="" id="{{$id}}" min="1" max="200" value="1" aria-describedby="helpId">
                <small id="helpId" class="form-text text-muted">Кол-во</small>
              </div>      
            @endif
            
          </div>
        </div>


        @if (session('role') == '1')
        <button type="submit" class="btn btn-warning mt-2 position-absolute" style="left: 15px; bottom:15px">
          Сохранить
        </button>
        </form>
        <form class="position-absolute" action="/admin/item/del" method="post" style="right: 15px; bottom:15px">
          @csrf
          <input type="number" value="{{$id}}" name="item_id" hidden>
          <button type="submit" class="btn btn-danger">
            <i class=" icon bi-trash"></i>
          </button>
        </form>
        @endif

      </div>
    </div>
</div>