<x-layout>

    <div class="board d-flex align-items-center ">
        <h1 class="fs-1 mb-5 pb-5 ms-md-5 ps-md-5 board-text t-o ms-5">{{ __("ui.$category->name") }}</h1>
    </div>
    <section class="container-fluid d-flex">
        <div class="row justify-content-center align-items-center my-4 w-100">
            <h1 class="text-center t-b mb-2">{{ __('ui.explore') }}</h1>
            <article class="col-12 flex-wrap d-flex gap-4 justify-content-center mt-5">
                @forelse ($category->products->where('is_accepted', true) as $product)
                    <x-card :product='$product' />
                @empty
                    <h3 class="text-center t-b">{{ __('ui.NoAnnouncements') }}<span
                            class="fw-semibold t-o">{{ __("ui.$category->name") }}</span>, <a
                            href="{{ route('products.create') }}">{{ __('ui.createOne') }}</a> </h3>
                @endforelse

            </article>

        </div>
    </section>



</x-layout>
