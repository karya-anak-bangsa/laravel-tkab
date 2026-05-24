<div class="user-panel mt-3 mb-3 pb-3 d-flex align-items-center">
    <div class="image">
        <img src="{{ asset('img/laravel-merah.png') }}" class="img-fluid">
    </div>
    <div class="info">
        <a href="{{ route('admin.dashboard') }}" class="d-block text-light">TKAB Apps</a>
    </div>
</div>

<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <li class="nav-item">
            <a href="{{ route('admin.dashboard') }}" class="nav-link @yield('nav-dashboard')">
                <i class="nav-icon fa-solid fa-building-columns"></i>
                <p>Main Dashboard</p>
            </a>
        </li>

        <li class="nav-header mt-2">COMPANY PROFILE</li>
        <li class="nav-item">
            <a href="{{ route('admin.hero.index') }}" class="nav-link @yield('nav-hero')">
                <i class="nav-icon fa-solid fa-building-columns"></i>
                <p>About TKAB</p>
            </a>
        </li>
        <li class="nav-item ">
            <a href="" class="nav-link @yield('nav-services')">
                <i class="nav-icon fa-solid fa-sitemap"></i>
                <p>Services</p>
            </a>
        </li>
        <li class="nav-item ">
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
        </li>

        <li class="nav-header mt-2">LOGOUT</li>
        <li class="nav-item">
            <a href="" class="nav-link @yield('nav-logout')">
                <i class="nav-icon fa-solid fa-right-from-bracket"></i>
                <p>Logout</p>
            </a>
        </li>

    </ul>
</nav>
