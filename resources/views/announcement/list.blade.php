<x-layout>
<div class="row bg-2 m-0 py-4 w-100">
        <div class="col-md-8 mx-auto py-4 " >  
                <h1>Benvenuto su <span class="text-3 ">{{ config('app.name') }}</span></h1>
                <h2>Ecco gli ultimi annunci</h2>
        </div>
    </div>
    <div class="container-fluid px-5 ">
        <div class="row justify-content-start">
            <div class="col-md-12">
                <div class="container">
                    <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3 justify-content-center">
                    @forelse($announcements as $announcement)
                        <div class="col-xxl mx-4 mt-5 ">
                            <div class="card-custom" style="width: 18rem;">
                                    <img class="img-fluid rounded-1 m-3" src="https://picsum.photos/id/1/200/300" class="card-img-top p-3 rounded" alt="...">
                                <div class="card-body">
                                    <h3 class="card-title text-3">{{$announcement->title}}</h3>
                                    <p class="card-text fs-4 text-danger ">{{ $announcement->category->name}} </p>
                                    <p class="card-text fs-5">{{$announcement->body}}</p>
                                    <p class="card-text fs-4 text-danger ">{{Number::currency($announcement->price, in: 'EUR', locale: 'de')}}</p>
                                    <div class="my-4">
                                        <a href="{{ route('announcements.show', ['announcement' => $announcement->id]) }}" class="btn-custom text-decoration-none">Visualizza</a>
                                        <a href="#" class="btn-custom text-decoration-none">Categorie</a>
                                    </div>
                                   
                                    <div class="d-flex justify-content-end text-end pe-3 mb-0">
                                        <p class="card-footer fs-6">Pubblicato il: {{$announcement->created_at->format('d/m/Y')}}</p>
                                    </div> 
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="col-12 w-50 mt-5 text-center">
                            <div class="alert alert-warning  py-3 shadow text-center">
                                <p class="lead">Non ci sono annunci per questi campi. Prova a cambiare!</p>
                            </div>
                        </div>
                    @endforelse
                    
                    </div>
                </div>
                <div class="ms-5 text-center">
                   
                </div>
                </div>
                
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-lg-4 mt-5">
            {{ $announcements->links() }}
            </div>
        </div>
    </div>
</x-layout>