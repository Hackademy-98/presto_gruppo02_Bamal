<x-layout>

<header class="container-fluid headerHome d-flex align-items-center justify-content-center">    
    <div class="row justify-content-center">
        <div class="col-12 text-center">          
                <h1 class="t-b m-0 h1-home">PRESTO</h1>
            <h2>Lorem ipsum dolor sit amet consectetur</h2>
            <a class="btn fs-5 text-white  mt-3 rounded-5 bg-o" href="{{route('products.create')}}">Inserisci annuncio</a>
        </div>
    </div>
</header>





<div class="container">
    <div class="row justify-content-center mb-5">
        <h2 class="text-center mb-3">Ultimi annunci</h2>
        @foreach ($products as $product)
        <x-card :product='$product'/>
        {{-- <div class="col-12 col-md-6 col-lg-3 d-flex flex-col align-items-center justify-content-center">
            <div class="card justify-content-center mt-4">
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
        </div> --}}
        
        @endforeach
    </div>
</div>


    
</x-layout>