<x-layout>

<div class="container">
    <div class="row">
        @foreach ($category->products as $product)
           
        <div class="col-3">
        <div class="card">
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