<x-layout>

  <div class="board d-flex align-items-center">
    <h1 class="ms-5 ps-5 board-text t-o">{{ $category->name }}</h1>
  </div>
  <div class="container-fluid d-flex">
  <div class="row justify-content-center align-items-center my-4 w-100">
    <h1 class="text-center t-b mb-2">Esplora</h1>
      <div class="col-12 flex-wrap d-flex gap-4 justify-content-center mt-5">
        @foreach ($category->products as $product)
        <x-card :product='$product' />
        
        @endforeach
        
      </div>
        
    </div>
</div>



</x-layout>