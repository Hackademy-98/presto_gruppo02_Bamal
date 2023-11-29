<x-layout>
    <div class="container-fluid vh-100">
        
        <div class="row">
            @if(session('success'))
            <div class="col-12 alert alert-success">
                <p>{{$message}}</p>
            </div>
            @endif
            
            <div class="col-12 mt-5">
                <h1 class="mt-5 pt-3 t-b text-center fw-semibold">Area revisore</h1>
                <h2 class="t-o text-center my-3">{{$announcementToCheck ? 'Ecco gli annunci da revisionare:' : 'Non ci sono annunci da revisionare'}}</h2>
                
            </div>
        </div>
        @if($announcementToCheck)
        <div class="row justify-content-center">
            <div class="col-6">
                <div id="carouselExample" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/media/prova.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/media/prova.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/media/prova.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="row justify-content-center pb-5">
            <div class="col-12 d-flex flex-column justify-content-center align-items-center">
                <h5 class="card-title mt-5">Titolo : {{$announcementToCheck->name}}</h5>
                <p class="card-text my-2 text-wrap description-box"> Descrizione : {{$announcementToCheck->description}}</p>
                <p class="card-footer">Pubblicato il : {{$announcementToCheck->created_at->format('d/m/Y') }} da: {{ Auth::User()->name }} </p>
            </div>
            <div class="col-12 div col-md-5 col-lg-5 text-center">
                <form action="{{route('revisor.acceptAnnouncement',['announcement'=>$announcementToCheck])}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn rounded-5 btn-outline-success w-25 shadow">Accetta</button>
                </form>
            </div>
            <div class="col-12 div col-md-5 col-lg-5 text-center">
                <form action="{{route('revisor.rejectAnnouncement',['announcement'=>$announcementToCheck])}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn rounded-5 btn-outline-danger w-25 shadow">Rifiuta</button>
                </form>
            </div>
            @endif
        </div>
    </div>
    <div class="container-fluid vh-100 my-5 pt-5">
        <div class="row justify-content-center my-5">
            <div class="col-12 my-5 pt-5"> <h2 class="text-center t-b fw-semibold fs-1">Cronologia</h2></div>
            @foreach ($announcementsChecked as $product)

            <div class="col-12 col-md-3 d-flex justify-content-center">
                <div class="card card-custom shadow p-3" style="width: 18rem;">
                    <img src="{{Storage::url($product->img)}}" class="card-img-top" alt="...">
                    
                    <div class="card-body p-0">
                        <div>
                            <h5 class="card-title mt-3 t-o fw-bolder">{{ $product->name }}</h5>
                        </div>
                        <p class="text-body" ><a class="text-decoration-none cardLink t-b fs-5" href="{{route('products.filterByCategory',['category'=>$product->category])}}">{{ $product->category->name }}</a></p>
                        <p class="text-title fs-6 card-div"><span class="t-b">Descrizione:</span> <br>{{ $product->description }}</p>
                        
                        @if ($product->is_accepted)
                        <divm class="d-flex justify-content-center">
                            <form action="{{route('products.destroy',compact('product'))}}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn rounded-2 btn-outline-danger shadow">Cancella</button>
                            </form>
                        </divm>
                        @else
                        <div class="d-flex justify-content-around">
                            <form action="{{route('revisor.acceptAnnouncement',['announcement'=>$product])}}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn rounded-2 btn-outline-success shadow">Accetta</button>
                            </form>
                            <form action="{{route('products.destroy',compact('product'))}}"      method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn rounded-2 btn-outline-danger shadow">Cancella</button>
                            </form>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    
    
</x-layout>