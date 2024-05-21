<x-layout>
    <div class="row bg-2 m-0 py-4 w-100">
        <div class="col-md-8 mx-auto py-4 " >  
                <h1>Ecco gli annunci per la categoria <span class="text-3 ">{{ $category->name }}</span></h1>
        </div>
    </div>
    <div class="container-fluid px-5">
        <div class="row justify-content-start">
            <div class="col-md-12">
                <div class="container">
                    <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
                        @forelse($announcements as $announcement)
                            <div class="col-xxl mx-4 mt-5 ">
                                <div class="card-custom shadow" style="width: 18rem;">
                                        <img class="img-fluid rounded-1 m-3" src="https://picsum.photos/id/1/200/300" class="card-img-top p-3 rounded" alt="...">
                                    <div class="card-body">
                                        <h3 class="card-title text-3">{{$announcement->title}}</h3>
                                        <p class="card-text fs-5">{{$announcement->body}}</p>
                                        <p class="card-text fs-4 text-danger ">{{Number::currency($announcement->price, in: 'EUR', locale: 'de')}}</p>
                                        <div class="my-4">
                                            <a href="{{ route('announcements.show', $announcement) }}" class="btn-custom text-decoration-none">Visualizza</a>
                                        </div>
                                        <div class="d-flex justify-content-end text-end pe-3 mb-0">
                                            <p class="card-footer fs-6">Pubblicato il: {{$announcement->created_at->format('d/m/Y')}}</p>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        @empty
                    </div>
                </div>
            </div>
                <div class="col-12">
                    <div class="my-3 text-center">
                        <div class="container-xl">
                            <h2>Non sono presenti Annunci per questa categoria</h2>
                            <h3>Vuoi creare un annuncio per la categoria <span class="text-3">{{ $category->name }}</span> ?</h3>
                        </div>
                        <div class="mt-5 h-auto">
                            <a class="btn-custom text-decoration-none" href="{{ route('announcement.create') }}">Crea Annuncio</a>
                        </div>
                            
                    </div>
                </div>
        @endforelse
        </div>
    </div>
</x-layout>