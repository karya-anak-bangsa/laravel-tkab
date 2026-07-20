<div class="user-panel mt-3 mb-3 pb-3 d-flex align-items-center">
    <div class="image">
        <img src="{{ asset('img/laravel-merah.png') }}" class="img-fluid">
    </div>
    <div class="info">
        <a href="{{ route('admin.dashboard') }}" class="d-block text-light">PT. TKAB</a>
    </div>
</div>

<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        {{-- --------------------------------------------------------------------------
        Main Dashboard
        -------------------------------------------------------------------------- --}}
        <li class="nav-item">
            <a href="{{ route('admin.dashboard') }}" class="nav-link @yield('nav-dashboard')">
                <i class="nav-icon fa-solid fa-landmark"></i>
                <p>Main Dashboard</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{-- route('admin.dashboard') --}}" class="nav-link @yield('nav-identitas')">
                <i class="nav-icon fa-solid fa-clone"></i>
                <p>Identitas Website</p>
            </a>
        </li>

        <li class="nav-item ">
            <a href="" class="nav-link @yield('nav-tentang-kami')">
                <i class="nav-icon fa-solid fa-clone"></i>
                <p>Tentang Kami</p>
            </a>
        </li>

        <li class="nav-item ">
            <a href="" class="nav-link @yield('nav-layanan')">
                <i class="nav-icon fa-solid fa-clone"></i>
                <p>Layanan</p>
            </a>
        </li>

        <li class="nav-item ">
            <a href="" class="nav-link @yield('nav-portofolio')">
                <i class="nav-icon fa-solid fa-clone"></i>
                <p>Portofolio</p>
            </a>
        </li>

        <li class="nav-item ">
            <a href="" class="nav-link @yield('nav-blog')">
                <i class="nav-icon fa-solid fa-clone"></i>
                <p>Blog dan Tutorial</p>
            </a>
        </li>

        <li class="nav-item ">
            <a href="" class="nav-link @yield('nav-faq')">
                <i class="nav-icon fa-solid fa-clone"></i>
                <p>FAQ</p>
            </a>
        </li>

        <li class="nav-item ">
            <a href="" class="nav-link @yield('nav-kontak-kami')">
                <i class="nav-icon fa-solid fa-clone"></i>
                <p>Kontak Kami</p>
            </a>
        </li>

        <li class="nav-item ">
            <a href="" class="nav-link @yield('nav-faq')">
                {{-- <i class="nav-icon fa-solid fa-circle-xmark"></i> --}}
                <i class="nav-icon fa-solid fa-square-arrow-up-right"></i>
                {{-- <i class="nav-icon fa-solid fa-square-up-right"></i> --}}
                <p>Keluar</p>
            </a>
        </li>

        {{-- <li class="nav-item">
            <a href="{{ route('admin.hero.index') }}" class="nav-link @yield('nav-hero')">
                <i class="nav-icon fa-solid fa-address-card"></i>
                <p>About TKAB</p>
            </a>
        </li> --}}

        {{-- <li class="nav-item ">
            <a href="" class="nav-link @yield('nav-porfolio')">
                <i class="nav-icon fa-solid fa-box-archive"></i>
                <p>Porfolio</p>
            </a>
        </li>
        <li class="nav-item ">
            <a href="" class="nav-link @yield('nav-learning-center')">
                <i class="nav-icon fa-solid fa-graduation-cap"></i>
                <p>Learning Center</p>
            </a>
        </li>
        <li class="nav-item ">
            <a href="" class="nav-link @yield('nav-faq')">
                <i class="nav-icon fa-solid fa-circle-question"></i>
                <p>FAQ</p>
            </a>
        </li>
        <li class="nav-item ">
            <a href="" class="nav-link @yield('nav-contact')">
                <i class="nav-icon fa-solid fa-address-book"></i>
                <p>Contact</p>
            </a>
        </li> --}}
    </ul>
</nav>
