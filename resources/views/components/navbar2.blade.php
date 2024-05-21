<nav class="navbar navbar-expand-lg border-bttm">
  <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
    <div class="collapse navbar-collapse justify-content-between " id="navbarNavDropdown">
       
        <ul class="navbar-nav fs-4 w-25 align-items-center align-content-center">
            <li class="nav-item me-5 text-3 fs-3">{{ config('app.name') }}</li>
            <li class="nav-item me-4">
                <a class="nav-link hover" aria-current="page" href="{{ route('welcome') }}">Home</a>
            </li>
            <li class="nav-item me-4">
                <a class="nav-link hover" href="{{ route('contacts') }}">Contattaci</a>
            </li>
            @if(auth()->user())
            @if(auth()->user()->is_revisor)
                <li class="nav-item me-4 @if(App\Models\Announcement::toBeRevisionedCount()!=0)revision-element @endif position-relative">
                    <a href="{{ route('revisor.index') }}" class="nav-link hover">Revisiona</a>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger mt-2">
                        {{App\Models\Announcement::toBeRevisionedCount()}}
                        <span class="visually-hidden">unread messages</span>
                    </span>
                </li>
            @endif 
            @endif   
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle hover " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categorie
                </a>
      
                    <ul class="dropdown-menu dropdown-menu-end uppercased bg-drop m-0 px-3 fs-5">
                        @foreach($categories as $category)
                        <li  class="border-bttm"><a class="dropdown-element" href="{{ route('announcementes.category-filter', $category ) }}">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
            </li>
        </ul>
        
        <ul class="navbar-nav justify-content-end align-items-center w-25 fs-4 ">
             <li onclick="changeMode()" id="light" class="hover nav-item me-4 light"><span class="material-symbols-outlined position-light ">light_mode</span></li>
             <li onclick="changeMode()" id="night" class="me-4 hover nav-item dark"><span class="material-symbols-outlined position-dark">mode_night</span></li>
            @auth
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle hover" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{auth()->user()->name}}
                </a>
                    <ul class="dropdown-menu dropdown-menu-end uppercased bg-drop m-0 px-3 fs-5">
                        <li class="dropdown-element ps-1">
                            <form action="/logout" method="POST">
                                @csrf
                                <button class="dropdown-element text-classic uppercased dropdown-btn ps-0" type="submit">Logout</button>
                            </form>
                        </li>
                        <li class="border-bttm"><a class="dropdown-element " href="{{ route('category.create') }}">Crea Categoria</a></li>
                        <li  class="border-bttm" ><a class="dropdown-element" href="{{ route('category.index')}}">Categorie</a></li>
                        <li ><a class="dropdown-element" href="{{ route('announcement.create')}}">Crea Annuncio</a></li>
                    </ul>
            </li>
            @else
            <li class="nav-item me-4">
                <a class="nav-link hover text-3 " href="/register">Registrati</a>
            </li>
            <li class="nav-item">
                <a class="nav-link hover" href="/login">Login</a>
            </li>
            
            @endauth
            <form action="{{ route('announcements.search') }}" method="GET" class=" d-flex w-75 ms-4">
    <input name="searched" class="form-control me-2 " type="search" placeholder="Search" aria-label="search">
<button class="btn btn-outline-success" type="submit">Search</button>
</form>
        </ul>
    </div>
  </div>
</nav>