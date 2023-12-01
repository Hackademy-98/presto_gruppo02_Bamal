<x-layout>


    <header
        class="container-fluid headerHome mt-0 vh-100 sfondoHeader bg-white d-flex align-items-center justify-content-center bgHeader shadow-lg">

        <div class="row w-100">
            <div class="col-12 col-md-6  text-center ms-md-5 ps-md-5">
                <h1 class="t-b m-0 h1-home ms-md-5 ">PRESTO</h1>
                <h2 class="t-b">{{ __('ui.subtitle') }}</h2>
                <a class="btn fs-5 text-white btnOrange mt-3 rounded-5 bg-o"
                    href="{{ route('products.create') }}">{{ __('ui.insertAnnouncement') }}</a>
            </div>
        </div>
    </header>




    <div class="container-fluid sfondoUltimAnn">
        <div class="row">
            <div class="col">
                <h2 class="text-center mb-5 pt-3 mt-5 t-b">{{ __('ui.latestAnnouncements') }}</h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center mb-5 gap-4">
            @foreach ($products as $product)
                <x-card :product='$product' />
            @endforeach
        </div>
    </div>



</x-layout>
