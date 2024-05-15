<nav class="navbar navbar-expand-lg ">
  <div class="container-fluid">
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-around" id="navbarNavDropdown">
        <h3>{{ config('app.name') }}</h3>
        <ul class="navbar-nav fs-4 w-25">
            <li class="nav-item me-4">
            <a class="nav-link hover" aria-current="page" href="{{ route('welcome') }}">Home</a>
            </li>
            <li class="nav-item me-4">
            <a class="nav-link hover" href="#">Annunci</a>
            </li>
        </ul>
        <ul class="navbar-nav justify-content-end align-items-center w-25 fs-4 ">
             <li onclick="changeMode()" id="light" class="hover nav-item me-4 light"><span class="material-symbols-outlined position-light ">light_mode</span></li>
             <li onclick="changeMode()" id="night" class="me-4 hover nav-item dark"><span class="material-symbols-outlined position-dark">mode_night</span></li>
            @auth
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{auth()->user()->name}}
                </a>
                    <ul class="dropdown-menu dropdown-menu-end uppercased bg-drop m-0 px-3 fs-5">
                        <li class="dropdown-element ps-1">
                            <form action="/logout" method="POST">
                                @csrf
                                <button class="dropdown-element text-classic uppercased dropdown-btn ps-0" type="submit">Logout</button>
                            </form>
                        </li>
                        <li><a class="dropdown-element" href="{{ route('category.create') }}">Crea Categoria</a></li>
                        <li><a class="dropdown-element" href="{{ route('category.index')}}">Categorie</a></li>
                    </ul>
            </li>
            @else
            <li class="nav-item me-4">
                <a class="nav-link hover" href="/register">Registrati</a>
            </li>
            <li class="nav-item">
                <a class="nav-link hover" href="/login">Login</a>
            </li>
            @endauth
        </ul>
    </div>
  </div>
</nav>