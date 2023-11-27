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
            <div id="showCarousel"></div>
        </div>
    </div>
</div>
</x-layout>