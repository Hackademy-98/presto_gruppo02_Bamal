<x-layout>
    <div class="container-fluid min-vh-100 mb-5 pb-5 ">

        <div class="row">
            @if (session('success'))
                <div class="col-12 alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif

            <div class="col-12 mt-5">
                <h1 class="mt-5 pt-3 t-b text-center fw-semibold">{{ __('ui.revisorArea') }}</h1>
                <h2 class="t-o text-center my-3">
                    {{ $announcementToCheck ? __('ui.hereAreTheAdsToReview') : __('ui.thereAreNoAdsToReview') }}
                </h2>

            </div>
        </div>
        {{-- CHECK PERICOLOSITA' IMG --}}
        @if ($announcementToCheck)
            @foreach ($announcementToCheck->images as $image)
    </div>
    </div>
    {{-- <div class="col-md-3">
        <div class="card-body">
            <h5 class="tc-accent">Revisione immagini</h5>
            <p>Adulti:<span class="{{ $image->adult }}"></span></p>
            <p>Satira:<span class="{{ $image->spoof }}"></span></p>
            <p>Medicina:<span class="{{ $image->medical }}"></span></p>
            <p>Violenza:<span class="{{ $image->violence }}"></span></p>
            <p>Contenuti ammiccanti:<span class="{{ $image->racy }}"></span></p>
        </div>
    </div> --}}
    @endforeach
    @endif

    @if ($announcementToCheck)
        <div class="row justify-content-center">
            <div class="col-6 d-flex justify-content-center">
                @if ($announcementToCheck->images->isNotEmpty())
                    <div id="carouselExample" class="carousel slide d-flex">
                        <div class="carousel-inner">
                            @foreach ($announcementToCheck->images as $image)
                                <div class="carousel-item @if ($loop->first) active @endif">
                                    <img class="img-fluid p-3 rounded" src="{{ $image->getUrl(400, 300) }}"
                                        alt="">
                                    <div class="col-6 d-flex">
                                        <h5 class="tc-accent">Revisione immagini</h5>
                                        <div class="card-body d-flex align-items-center flex-wrap gap-3">
                                            <p>Adulti: <span class="{{ $image->adult }}"></span></p>
                                            <p>Satira: <span class="{{ $image->spoof }}"></span></p>
                                            <p>Medicina: <span class="{{ $image->medical }}"></span></p>
                                            <p>Violenza: <span class="{{ $image->violence }}"></span></p>
                                            <p>Ambiguo: <span class="{{ $image->racy }}"></span></p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                @else
                    <img src="/media/default.png" class="img-fluid w-75 p-3 rounded" alt="...">
                @endif
            </div>
        </div>
        <div class="row justify-content-center pb-5">
            <div class="col-12 d-flex flex-column justify-content-center align-items-center">
                <h5 class="card-title mt-5 t-b">{{ __('ui.name') }} : {{ $announcementToCheck->name }}</h5>
                <p class="card-text my-2 t-b text-wrap description-box w-50 text-center">
                    {{ __('ui.description') }}:
                    {{ $announcementToCheck->description }}</p>
                <p class="card-footer t-b">{{ __('ui.createIn') }}:
                    {{ $announcementToCheck->created_at->format('d/m/Y') }} {{ __('ui.from') }}:
                    {{ Auth::User()->name }} </p>
            </div>
            <div class="col-12 div col-md-5 col-lg-5 text-center">
                <form action="{{ route('revisor.acceptAnnouncement', ['announcement' => $announcementToCheck]) }}"
                    method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit"
                        class="btn rounded-5 btn-outline-success w-25 shadow">{{ __('ui.acceptButton') }}</button>
                </form>
            </div>
            <div class="col-12 div col-md-5 col-lg-5 text-center">
                <form action="{{ route('revisor.rejectAnnouncement', ['announcement' => $announcementToCheck]) }}"
                    method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit"
                        class="btn rounded-5 btn-outline-danger w-25 shadow">{{ __('ui.refuseButton') }}</button>
                </form>
            </div>
    @endif
    </div>



    </div>
    <div class="container-fluid vh-100 my-5 pt-5">
        <div class="row justify-content-center my-5">
            <div class="col-12 my-5 pt-5 ">
                <h2 class="text-center t-b fw-semibold fs-1">{{ __('ui.history') }}</h2>
            </div>
            <div class="col-12 d-flex flex-wrap justify-content-center my-3 gap-4">
                @foreach ($announcementsChecked as $product)
                    <div class="card card-custom shadow p-3" style="width: 18rem;">
                        <img src="{{ !$product->images()->get()->isEmpty()? $product->images()->first()->getUrl(400, 300): '/media/default.png' }}"
                            class="card-img-top" alt="...">

                        <div class="card-body p-0">
                            <div>
                                <h5 class="card-title mt-3 t-o fw-bolder text-truncate">{{ $product->name }}</h5>
                            </div>
                            <p class="text-body"><a class="text-decoration-none cardLink t-b fs-5"
                                    href="{{ route('products.filterByCategory', ['category' => $product->category]) }}">{{ __('ui.' . $product->category->name) }}</a>
                            </p>
                            <p class="text-title fs-6 card-div text-truncate"><span
                                    class="t-b">{{ __('ui.description') }}:</span>
                                <br>{{ $product->description }}
                            </p>

                            @if ($product->is_accepted)
                                <divm class="d-flex justify-content-center align-items-end">
                                    <form action="{{ route('products.destroy', compact('product')) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit"
                                            class="btn rounded-5 btn-outline-danger shadow ">{{ __('ui.cancelButton') }}</button>
                                    </form>
                                </divm>
                            @else
                                <div class="d-flex justify-content-around">
                                    <form
                                        action="{{ route('revisor.acceptAnnouncement', ['announcement' => $product]) }}"
                                        method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit"
                                            class="btn rounded-5 btn-outline-success shadow">{{ __('ui.acceptButton') }}</button>
                                    </form>
                                    <form action="{{ route('products.destroy', compact('product')) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit"
                                            class="btn rounded-5 btn-outline-danger shadow">{{ __('ui.cancelButton') }}</button>
                                    </form>
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="container-fluid mt-5">
            <div class="row justify-content-center">
                <div class="col-12 d-flex justify-content-center">
                    {{ $announcementsChecked->links() }}
                </div>
            </div>
        </div>
    </div>


</x-layout>
