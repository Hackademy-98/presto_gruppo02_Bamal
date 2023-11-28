<x-layout>
    <div class="container-fluid overflow-hidden">
        <div class="row justify-content-center pt-5">
            <h2 class="text-center mt-5 pt-3 t-b fs-1 ">Tutti gli annunci</h2>
            {{-- SEARCH --}}
            <div class="col-6 mt-4">
                <form class="w-100 d-flex" method="GET" action="{{route('products.search')}}">
                    <input aria-label="search" placeholder="search" class="form-control" name="searched" type="search">
                    <button class="btn bg-o rounded-5 ms-3 text-white btnOrange" type="submit">Search</button>
                </form>
            </div>



            <div class="col-12 d-flex justify-content-center my-5 gap-3">
                
               @foreach ($categories as $category)
                    <div class="col-1 rounded-5 ">                        
                        <a class="box_categories btn btn-custom rounded-5 d-flex justify-content-center align-items-center" href="{{ route('products.filterByCategory', compact('category')) }}">{{ $category->name }}</a>
                    </div>
                @endforeach
            </div>
            
            <div class="col-12 flex-wrap d-flex gap-4 justify-content-center">
            @forelse ($products as $product)
            <x-card :product='$product'/>
            @empty 
            <div class="col-12">
                <div class="alert alert-warning py-5">
                    <p class="lead">Non ci sono annunci per questa ricerca</p>
                </div>
            </div>
            @endforelse

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