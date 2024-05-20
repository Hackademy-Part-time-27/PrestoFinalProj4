<x-layout>
<div class="row bg-2 m-0 py-4 w-100">
    <div class="col-md-8 mx-auto py-4 " >  
        <h1>
            {{$announcement_to_check ? 'Ecco l\'annuncio da revisionare' : 'Non ci sono annunci da revisionare'}}
        </h1>
    </div>
</div>
@if($announcement_to_check)
    <div class="container">
        <div class="row mx-auto">
            <div class="col-lg-12">
                <div id="carouselExample" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="img-fluid" src="https://picsum.photos/200/300?grayscale" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid" src="https://picsum.photos/200/300?grayscale" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid" src="https://picsum.photos/200/300?grayscale" class="d-block w-100" alt="...">
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
                <div class="mt-2">
                    <h3>Titolo: {{ $announcement_to_check->title }}</h3>
                    <p>Descrizione: {{ $announcement_to_check->body }} </p>
                    <p>Pubblicato il: {{ $announcement_to_check->created_at->format('D/m/Y') }} </p>
                </div>
            </div>
        </div>
        <div class="row justify-content-start">
            <div class="col-lg-3">
                <div class="row justify-content-between">
                    <div class="col-lg-6">
                        <form action="{{ route('revisor.accept_announcement',['announcement' => $announcement_to_check]) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button class="btn btn-success" type="submit">Accetta</button>                        
                        </form>
                    </div>
                    <div class="col-lg-6">
                        <form action="{{ route('revisor.reject_announcement',['announcement' => $announcement_to_check]) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button class="btn btn-danger" type="submit">Rifiuta</button>                        
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
</x-layout>