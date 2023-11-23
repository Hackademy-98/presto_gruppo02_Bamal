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
                <div class="image"><span class="text">This is a chair.</span></div>
                <span class="title">{{$product->name}} </span>
                
                <a href="">{{$product->category_id->name}} </a>
                <span class="price">{{$product->price}}</span>
            </div>
        </div>
        
        @endforeach
    </div>
</div>


    
</x-layout>