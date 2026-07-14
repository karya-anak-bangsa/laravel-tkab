<section id="hero" class="hero section dark-background">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-6">
                <div class="hero-content">

                    {{-- <div class="hero-badge">
                        <i class="bi bi-lightning-fill"></i>
                        <span>Solusi IT Terbaik untuk Kelangsungan Bisnis Anda</span>
                    </div> --}}

                    <h1 class="hero-title">{{ $hero->title }}</h1>
                    <p class="hero-description">{!! $hero->description !!}</p>

                    <div class="hero-features">
                        @foreach ($hero->keywords() as $keywords)
                            <div class="feature-item">
                                <i class="bi bi-rocket-takeoff-fill"></i>
                                <span>{{ $keywords }}</span>
                            </div>
                        @endforeach
                    </div>
                    <div class="hero-actions">
                        <a href="#" class="btn-primary glightbox">
                            <i class="bi bi-whatsapp"></i>
                            <span>{{ $hero->cta_1 }}</span>
                        </a>
                        <a href="#" class="btn-secondary glightbox">
                            <i class="bi bi-stack"></i>
                            <span>{{ $hero->cta_2 }}</span>
                        </a>
                    </div>
                    {{-- hero-actions --}}
                </div>
                {{-- hero-content --}}
            </div>
            {{-- col-lg-6 --}}

            <div class="col-lg-6">
                <div class="hero-visual">
                    <div class="visual-container">
                        <img src="{{ $hero->image_url }}" alt="Product Dashboard" class="img-fluid main-screen">
                    </div>
                    {{-- visual-container --}}
                </div>
                {{-- hero-visual --}}
            </div>
            {{-- col-lg-6 --}}

        </div>
        {{-- row --}}
    </div>
    {{-- container --}}
</section>
{{-- section --}}
