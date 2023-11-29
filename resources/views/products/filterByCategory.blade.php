<x-layout>

  <div class="board d-flex align-items-center bg-white">
    <h1 class="ms-5 ps-5 board-text t-b">{{ $category->name }}</h1>
  </div>
  <div class="container-fluid d-flex">
  <div class="row justify-content-center align-items-center my-5 w-100">
    <h1 class="text-center mt-4 t-b">Esplora</h1>
      <div class="col-12 flex-wrap d-flex gap-4 justify-content-center mt-5">
        @foreach ($category->products->where('is_accepted', true) as $product)
        <x-card :product='$product' />
        
        @endforeach
        
      </div>
        
    </div>
</div>



</x-layout>