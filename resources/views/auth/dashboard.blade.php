<x-layout>
<div class="container">
    <div class="row pt-5">
        <h1 class="mt-5 pt-4 text-center t-b">La tua Dashboard</h1>
        <div class="col-12 mt-5 flex-wrap d-flex gap-4 justify-content-center">
            
            @foreach ($products as $product)
                <x-card :product='$product'/>
            @endforeach
        </div>
            
    </div>
</div>



</x-layout>