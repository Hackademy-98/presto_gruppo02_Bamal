<x-layout>
    <div class="container-fluid d-flex align-items-center justify-content-center detail-container">
        <div class="row h-50 justify-content-center">
          <div class="col-12 mt-3">
            <h2 class="text-center mt-5 pt-5 fs-1 t-b">INFO articolo</h2>
          </div>
         
          <div class="col-2 col-md-1"></div>
          <div class="col-12 col-md-5 d-flex mt-5">
            <div id="carouselExample" class="carousel slide">
              @if($product->images)
                    <div class="carousel-inner">
                        @foreach($product->images as $image)
                        <div class="carousel-item @if($loop->first) active @endif">
                            <img class="img-fluid p-3 rounded" src="{{$product->images()->first()->getUrl(400, 300)}}" alt="">
                        </div>
                        @endforeach
                    </div>
                    @else
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/media/prova.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/media/prova.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/media/prova.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    @endif
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>

          <div class="col-12 col-md-2 d-flex flex-column mt-5 carousel-col justify-content-between">
                  <div>
                    <p class="fs-4 text-uppercase t-b">{{$product->category->name}}</p>
                    <hr>
                    <p class="t-b mb-1">Creato il: {{ $product->created_at->format('d/m/Y') }}</p>
                    <p class="t-b">Creato da: {{$product->user->name}}</p>
                      <h3 class="fw-semibold fs-2 t-b">{{$product->name}}</h3>
                    </div>
                  <div>
                      <p class="fw-semibold fs-3 t-o mb-0">{{$product->price}} €</p>
                </div>
              </div>
              <div class="col-2 col-md-1"></div>
              <div class="col-12 col-md-5">
                <h2 class="mt-4 mb-3 t-b">Dati principali</h2>
                <div class="d-flex gap-3">
                  <p class="t-b">Condizione:</p>
                  <p>{{$product->condition->name}}</p>
                </div>
                <hr>
                <h2 class="mt-3 mb-4 t-b">Descrizione</h2>
                <p>{{$product->description}}</p>
              </div>
              <div class="col-12 col-md-2"></div> 
              
          </div>
        </div>

    
    
</x-layout>

