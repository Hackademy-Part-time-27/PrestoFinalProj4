<x-layout>
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="mt-4">
                
                <h1>Benvenuto  {{ auth()->user()->name }}</h1>
            </div>
            @auth
            <div class="mt-4">
                <button class="btn btn-primary">Crea Annuncio</button>
            </div>
            @endauth
        </div>
    </div>
   
</x-layout>