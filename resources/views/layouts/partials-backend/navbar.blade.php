<ul class="navbar-nav mr-auto">
    <li class="nav-item">
        <a class="nav-link text-dark" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
</ul>
<ul class="navbar-nav ml-auto">
    {{-- <li class="nav-item d-none d-sm-inline-block">
        <span class="nav-link text-dark">
            <i class="fa-solid fa-user-gear mr-2"></i>Aryajaya Alamsyah, S.Kom., M.Kom.
        </span>
    </li> --}}
    {{-- <li class="nav-item d-none d-sm-inline-block">
        <span class="nav-link text-danger">
            <i class="fa-solid fa-right-from-bracket mr-2"></i>Logout
        </span>
    </li> --}}
    <li class="nav-item d-none d-sm-inline-block">
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button type="submit" class="nav-link bg-transparent border-0 text-danger">
                <i class="fa-solid fa-right-from-bracket mr-1"></i>Logout
            </button>
        </form>
    </li>
</ul>
