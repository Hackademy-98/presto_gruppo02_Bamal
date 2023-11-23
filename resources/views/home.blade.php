<x-layout>

<header class="container">
    <div class="row">
        <div class="col-12">
            <h1>Lorem ipsum dolor sit amet consectetur</h1>
            <a class="btn btn-primary" href="{{route('products.create')}}">Inserisci annuncio</a>
        </div>
    </div>
</header>
<div class="container-fluid">
    <div class="row justify-content-center">
        @foreach ($products as $product)
           
        <div class="col-4">
        <div class="card">
            <div class="card-img"></div>
            <div class="card-info">
              <p class="text-title">{{ $product->name }}</p>
              <p class="text-body" ><a href="">{{ $product->category->name }}</a></p>
            </div>
            <div class="card-footer">
            <span class="text-title">{{ $product->price }}</span>
            <div class="card-button">
              <a class="text-decoration-none" href="">dettaglio</a>
            </div>
          </div>
        </div>
    </div>
        
        @endforeach
    </div>
</div>


    
</x-layout>