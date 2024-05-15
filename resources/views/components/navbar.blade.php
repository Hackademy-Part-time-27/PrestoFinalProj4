<nav class="navbar navbar-expand-lg bg-body-tertiary m-0 fs-5 uppercased">
    <div class="container-fluid">
        <a class="navbar-brand fs-3" href="#">{{config('app.name')}}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse nav justify-content-between" id="navbarNavDropdown">
            <ul class="navbar-nav w-25 justify-content-around ">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('welcome') }}">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
                </li>
            </ul>

            <ul class="navbar-nav justify-content-end me-2">
                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{auth()->user()->name}}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end uppercased">
                        <li class="dropdown-item ps-1">
                            <form action="/logout" method="POST">
                                @csrf
                                <button class="dropdown-item uppercased" type="submit">Logout</button>
                            </form>
                        </li>
                        <li><a class="dropdown-item" href="{{ route('category.create') }}">Crea Categoria</a></li>
                        <li><a class="dropdown-item" href="{{ route('category.index')}}">Categorie</a></li>
                    </ul>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="/register">Registrati</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/login">Login</a>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
