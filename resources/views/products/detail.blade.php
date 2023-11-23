<x-layout>
    
    <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{$product->name}}</h5>
            <p>{{$product->category->name}}</p>
            <p class="card-text">{{$product->condition->name}}</p>
            <p class="card-text">{{$product->description}}</p>
        </div>
    </div>
    
</x-layout>