<x-layout>
    
    <div class="container">
        <div class="row">
            @if(session('success'))
            <div class="col-12 alert alert-success">
                <p>{{$message}}</p>
            </div>
            @endif
            
            <div class="col-12 mt-5">
                <h1 class="mt-5 pt-3 t-b">Area revisore</h1>
                <h2 class="t-o">{{$announcementToCheck ? 'Ecco gli annunci da revisionare' : 'Non ci sono annunci da revisionare'}}</h2>
                
            </div>
        </div>
    </div>
    @if($announcementToCheck)
    <div class="container">
        <div class="row">
            <div class="col-12">
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
        
        <h5 class="card-title">Titolo : {{$announcementToCheck->name}}</h5>
        <p class="card-text"> Descrizione : {{$announcementToCheck->description}}</p>
        <p class="card-footer">Pubblicato il : {{$announcementToCheck->created_at->format('d/m/Y') }} </p>
        <div class="row">
            <div class="col-12 div col-md-6">
                <form action="{{route('revisor.acceptAnnouncement',['announcement'=>$announcementToCheck])}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-succes shadow">Accetta</button>
                </form>
            </div>
            
            <div class="col-12 div col-md-6 text-end">
                <form action="{{route('revisor.rejectAnnouncement',['announcement'=>$announcementToCheck])}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-succes shadow">Rifiuta</button>
                </form>
            </div>
            
        </div>
    </div>
    @endif
</x-layout>