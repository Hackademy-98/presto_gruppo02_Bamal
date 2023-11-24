<x-layout>
    <div class="container">
        <div class="row justify-content-center pt-5">
            <h2 class="text-center mt-5 pt-2">Tutti gli annunci</h2>
            @foreach ($products as $product)
            
            <div class="col-3 mt-5 d-flex flex-col justify-content-center">
                <div class="card">
                    <div class="card-img"></div>
                    <div class="card-info">
                        <p class="text-title">{{ $product->name }}</p>
                        <p class="text-body" ><a href="{{route('products.filterByCategory',['category'=>$product->category])}}">{{ $product->category->name }}</a></p>
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