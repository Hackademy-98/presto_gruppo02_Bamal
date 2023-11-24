<x-layout>
    <div class="container-fluid d-flex align-items-center justify-content-center detail-container">
        <div class="row h-50 justify-content-center">
          <h2 class="text-center my-5 fs-1">INFO articolo</h2>
          <div class="col-2 col-md-1"></div>
          <div class="col-12 col-md-5 d-flex mt-5">
            <div id="carouselExample" class="carousel slide">
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
                    <p class="fs-4 text-uppercase">{{$product->category->name}}</p>
                    <hr>
                    <p>Creato il: {{ $product->created_at->format('d/m/Y') }}</p>
                      <h3 class="fw-semibold fs-2">{{$product->name}}</h3>
                    </div>
                  <div>
                      <p class="fw-semibold fs-3 t-o">{{$product->price}} €</p>
                </div>
              </div>
              <div class="col-2 col-md-1"></div>
              <div class="col-12 col-md-5">
                <h2 class="mt-5 mb-4">Dati principali</h2>
                <div class="d-flex gap-5">
                  <p>Condizione:</p>
                  <p>{{$product->condition->name}}</p>
                </div>
                <hr>
                <h2 class="mt-5 mb-4">Descrizione</h2>
                <p>{{$product->description}}</p>
              </div>
              <div class="col-12 col-md-2"></div> 
              
          </div>
        </div>

    
    
</x-layout>

