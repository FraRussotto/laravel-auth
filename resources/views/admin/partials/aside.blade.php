<aside>
    <ul class="nav d-flex flex-column">

        <a target="_blank" href="{{ route('home') }}">
            <li class="nav-item">Guest</li>
        </a>


        <a href="{{ route('admin.home') }}">
            <li class="nav-item">Dashboard</li>
        </a>


        <a href="{{ route('admin.projects.index') }}">
            <li class="nav-item">Projects list</li>
        </a>

        <a href="{{ route('admin.projects.create') }}">
            <li class="nav-item">Add project</li>
        </a>

    </ul>
</aside>
