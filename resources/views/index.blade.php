<x-layout>
    <div class="container">
        <div class="row justify-content-center pt-5">
            <h2 class="text-center mt-5 pt-3 fs-1 ">Tutti gli annunci</h2>
            @foreach ($products as $product)
            <x-card :product='$product'/>
            
            {{-- <div class="col-3 mt-5 d-flex flex-col justify-content-center"> --}}
                {{-- <div class="card">
                    <div><img class="imgCard" src="{{Storage::url($product->img)}}" alt=""></div>
                    <div class="card-info">
                        <p class="text-title t-o">{{ $product->name }}</p>
                        <p class="text-body  t-b" ><a class="text-decoration-none cardLink t-b fs-6" href="{{route('products.filterByCategory',['category'=>$product->category])}}">{{ $product->category->name }}</a></p>
                    </div>
                    <div class="card-footer">
                        <span class="text-title">{{ $product->price }}</span>
                        <div class="card-button bg-b">
                            <a class="text-decoration-none t-n" href="{{route('products.show', compact('product'))}}">dettaglio</a>
                        </div>
                    </div>
                </div> --}}
            {{-- </div> --}}
            
            @endforeach
            <div class="container-fluid mt-5">
                <div class="row justify-content-center">
                    <div class="col-12 d-flex justify-content-center">
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
            
        </div>
    </div>




</x-layout>