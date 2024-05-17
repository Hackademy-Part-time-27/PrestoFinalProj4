<x-layout>
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="mt-4">
                <h1>Benvenuto {{ auth()->user()->name }}</h1>
            </div>
            @auth
            <div class="mt-4">
                <a class="btn-custom text-decoration-none" href="{{ route('announcement.create') }}">Crea Annuncio</a>
            </div>
            @endauth
        </div>
    </div>
</x-layout>