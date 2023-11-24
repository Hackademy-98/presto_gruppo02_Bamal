<x-layout>

  <div class="board d-flex align-items-center">
    <h1 class="ms-5 ps-5 board-text">Presto/{{ $category->name }}</h1>
  </div>
  <div class="container-fluid d-flex">
  <div class="row justify-content-center align-items-center my-5 w-100">
      <div class="col-12 py-4">
        <h1 class="text-center">Esplora</h1>
      </div>
        @foreach ($category->products as $product)
        <x-card :product='$product' />
        
        @endforeach
    </div>
</div>



</x-layout>