<!DOCTYPE html>
<html lang="en">

    <head>

        {{-- set metadata on this website --}}
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>LOGIN | PT. Teknologi Karya Anak Bangsa</title>

        {{-- Favicons --}}
        <link href="{{ asset('img/laravel-merah.png') }}" rel="icon">
        <link href="{{ asset('img/laravel-merah.png') }}" rel="apple-touch-icon">

        {{-- Fonts --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&family=Poppins:wght@300;400;500;600;700&family=Quicksand:wght@300;400;500;600;700&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

        {{-- Bootstrap 5.3.8 --}}
        <link rel="stylesheet" href="{{ asset('template-auth/bootstrap-5.3.8/dist/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('template-auth/main.css') }}">

        {{-- Fontawesome 6.7.2 --}}
        <link rel="stylesheet" href="{{ asset('template-plugins/fontawesome-6.7.2/css/all.min.css') }}">

        @stack('styles')
    </head>

    <body>

        <main class="container-fluid">
            <div class="row min-vh-100">
                <div class="col-lg-7 d-flex flex-column align-items-center justify-content-center p-0" id="auth-left">

                </div>
                <div class="col-lg-5 d-flex flex-column align-items-center justify-content-center p-0" id="auth-right">

                    <div class="text-center">
                        <div class="mb-3">
                            <img src="{{ asset('img/laravel-merah.png') }}" style="height:90px">
                        </div>
                        <div class="mb-5">
                            <h3 class="fw-bold">PT. Teknologi Karya Anak Bangsa</h3>
                            <span class="text-muted">
                                Solusi IT Terbaik untuk Keberlanjutan Bisnis Anda
                            </span>
                        </div>
                    </div>

                </div>
                {{-- col --}}
            </div>
            {{-- row --}}
        </main>
        {{-- main container --}}

        {{-- Bootstrap 5.3.8 --}}
        <script src="{{ asset('template-auth/bootstrap-5.3.8/dist/js/bootstrap.bundle.min.js') }}"></script>

        {{-- Fontawesome 6.7.2 --}}
        <script src="{{ asset('template-plugins/fontawesome-6.7.2/js/all.min.js') }}"></script>

        @stack('scripts')
    </body>

</html>
