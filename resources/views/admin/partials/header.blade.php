<header class="bg-dark">
    <nav class="navbar navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" target="_blank" href="{{ route('home') }}">Navbar</a>
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" target="_blank" href="{{ route('home') }}">Guest</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.home') }}">Dashboard</a>
                </li>
                <a class="nav-link" href="{{ route('admin.projects.index') }}">Lista progetti</a>
                </li>
            </ul>
            <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
                @csrf
                <button class="btn btn-light" type="submit"><i class="fa-solid fa-right-from-bracket"></i></button>
            </form>
        </div>
    </nav>
</header>
