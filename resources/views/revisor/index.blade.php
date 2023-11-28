<x-layout>
    <div class="container-fluid vh-100">
    
        <div class="row">
            @if(session('success'))
            <div class="col-12 alert alert-success">
                <p>{{$message}}</p>
            </div>
            @endif
            
            <div class="col-12 mt-5">
                <h1 class="mt-5 pt-3 t-b text-center">Area revisore</h1>
                <h2 class="t-o text-center my-3">{{$announcementToCheck ? 'Ecco gli annunci da revisionare' : 'Non ci sono annunci da revisionare'}}</h2>
                
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
                <div class="col-12 div col-md-5 col-lg-5">
                    <form action="{{route('revisor.acceptAnnouncement',['announcement'=>$announcementToCheck])}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn btn-outline-success shadow">Accetta</button>
                    </form>
                </div>
                <div class="col-12 div col-md-5 col-lg-5 text-end">
                    <form action="{{route('revisor.rejectAnnouncement',['announcement'=>$announcementToCheck])}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn btn-outline-danger shadow">Rifiuta</button>
                    </form>
                </div>
            </div>
            @endif
        </div>   
</x-layout>