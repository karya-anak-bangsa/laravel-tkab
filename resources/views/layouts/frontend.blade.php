<!DOCTYPE html>
<html lang="en">

    <head>

        {{-- set metadata on this website --}}
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>PT. Teknologi Karya Anak Bangsa | Solusi IT Terbaik untuk Keberlanjutan Bisnis Anda</title>
        <meta name="description" content="">
        <meta name="keywords" content="">

        {{-- Favicons --}}
        <link href="{{ asset('img/laravel-merah.png') }}" rel="icon">
        <link href="{{ asset('img/laravel-merah.png') }}" rel="apple-touch-icon">

        {{-- Fonts --}}
        <link href="https://fonts.googleapis.com" rel="preconnect">
        <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

        {{-- Vendor CSS Files --}}
        <link rel="stylesheet" href="{{ asset('template-frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('template-frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('template-frontend/assets/vendor/aos/aos.css') }}">
        <link rel="stylesheet" href="{{ asset('template-frontend/assets/vendor/glightbox/css/glightbox.min.css') }}">
        <link rel="stylesheet" href="{{ asset('template-frontend/assets/vendor/swiper/swiper-bundle.min.css') }}">

        {{-- Main CSS File --}}
        <link rel="stylesheet" href="{{ asset('template-frontend/assets/css/main.css') }}">

        {{-- plugin style - fontawesome 6.7.2 --}}
        <link rel="stylesheet" href="{{ asset('template-plugins/fontawesome-6.7.2/css/all.min.css') }}">

        @stack('styles')
    </head>

    <body class="index-page">

        <header id="header" class="header d-flex align-items-center fixed-top">
            @include('layouts.partials-frontend.header')
        </header>

        <main class="main">
            @yield('content')
        </main>

        <footer id="footer" class="footer position-relative dark-background">
            @include('layouts.partials-frontend.footer')
        </footer>

        {{-- Scroll Top --}}
        <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
            <i class="bi bi-arrow-up-short"></i>
        </a>

        {{-- Vendor JS Files --}}
        <script src="{{ asset('template-frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('template-frontend/assets/vendor/php-email-form/validate.js') }}"></script>
        <script src="{{ asset('template-frontend/assets/vendor/aos/aos.js') }}"></script>
        <script src="{{ asset('template-frontend/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
        <script src="{{ asset('template-frontend/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('template-frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('template-frontend/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

        {{-- Main JS File --}}
        <script src="{{ asset('template-frontend/assets/js/main.js') }}"></script>

        {{-- scripts fontawesome 6.7.2 --}}
        <script src="{{ asset('template-plugins/fontawesome-6.7.2/js/all.min.js') }}"></script>

        @stack('scripts')
    </body>

</html>
