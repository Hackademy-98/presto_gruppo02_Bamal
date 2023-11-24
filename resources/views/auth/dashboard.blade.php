<x-layout>
<div class="container">
    <div class="row pt-5">
        <div class="col-12">
            <h1 class="pt-5 mt-3 text-center">La tua Dashboard</h1>
        </div>
            @foreach ($products as $product)
                <x-card :product='$product' />
            @endforeach
    </div>
</div>



</x-layout>