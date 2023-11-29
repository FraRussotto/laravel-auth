<header class="bg-dark">
    <nav class="navbar navbar-dark">
        <div class="container-fluid d-flex justify-content-between">
            <a class="navbar-brand" target="_blank" href="{{ route('home') }}">BOOLFOLIO</a>
            <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
                @csrf
                <button class="btn btn-light" type="submit"><i class="fa-solid fa-right-from-bracket"></i></button>
            </form>
        </div>
    </nav>
</header>
