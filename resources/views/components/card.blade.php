<div class="col-12 col-md-6 col-lg-3 mt-5 d-flex flex-col justify-content-center">
    <div class="card card-custom shadow p-3" style="width: 18rem;">
        <img src="{{Storage::url($product->img)}}" class="card-img-top" alt="...">

        <div class="card-body p-0">
          <div>
          <h5 class="card-title mt-3 t-o fw-bolder">{{ $product->name }}</h5>
          </div>
          <p class="text-body" ><a class="text-decoration-none cardLink t-b fs-5" href="{{route('products.filterByCategory',['category'=>$product->category])}}">{{ $product->category->name }}</a></p>
          <p class="text-title fs-6">€{{ $product->price }}</p>
          <a href="{{ route('products.show', compact('product')) }}" class="btn btnBlu bg-b rounded-5 t-n">Dettaglio</a>
        </div>
      </div>
</div>