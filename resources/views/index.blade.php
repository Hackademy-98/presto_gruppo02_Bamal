<x-layout>
    <div class="container-fluid overflow-hidden">
        <div class="row justify-content-center pt-5">
            <h2 class="text-center mt-5 pt-3 t-b fs-1 ">Tutti gli annunci</h2>
            <div class="col-12 d-flex justify-content-center my-5">
                <div class="col-1"></div>
                @foreach ($categories as $category)
                    <div class="col-1 rounded-5">
                        <a class="btn" href="{{ route('products.filterByCategory', compact('category')) }}">{{ $category->name }}</a>
                    </div>
                @endforeach
            </div>
            <div class="col-3">
            </div>
            <div class="col-9 d-flex flex-wrap gap-3">
            @foreach ($products as $product)
            <x-card :product='$product'/>
            @endforeach
            </div>
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