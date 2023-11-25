<x-layout>

<header class="container-fluid headerHome sfondoHeader bg-white d-flex align-items-center justify-content-center bgHeader">    
    <div class="row w-100">
        <div class="col-12 col-md-6  text-center ms-md-5 ps-md-5">          
                <h1 class="t-b m-0 h1-home ms-md-5">PRESTO</h1>
            <h2 class="t-b">Lorem ipsum dolor sit amet consectetur</h2>
            <a class="btn fs-5 text-white  mt-3 rounded-5 bg-o" href="{{route('products.create')}}">Inserisci annuncio</a>
        </div>        
    </div>
</header>





<div class="container">
    <div class="row justify-content-center mb-5">
        <h2 class="text-center mb-3 mt-5">Ultimi annunci</h2>
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