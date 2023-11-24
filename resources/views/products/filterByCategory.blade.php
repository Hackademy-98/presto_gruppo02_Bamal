<x-layout>

<div class="container d-flex">
    <div class="row justify-content-center align-items-center my-5">

      <div class="col-12 py-5">
        <h1>Categoria</h1>
      </div>
        @foreach ($category->products as $product)
        <div class="col-12 col-md-6 my-3">
        <div class="card justify-content-evenly">
            <div class="card-img"></div>
            <div class="card-info">
              <p class="text-title">{{ $product->name }}</p>
              <p class="text-body" ><a href="">{{ $product->category->name }}</a></p>
            </div>
            <div class="card-footer">
            <span class="text-title">{{ $product->price }}</span>
            <div class="card-button">
              <a class="text-decoration-none" href="{{route('products.show', compact('product'))}}">dettaglio</a>
            </div>
          </div>
        </div>
    </div>
        
        @endforeach
    </div>
</div>



</x-layout>