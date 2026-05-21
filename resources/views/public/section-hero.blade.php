<section id="hero" class="hero section light-background">

    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-6">
                <div class="hero-content pe-0 pe-lg-5">

                    <div class="hero-badge">
                        <i class="bi bi-lightning-fill"></i>
                        <span>The Best IT Solutions for Your Business Continuity</span>
                    </div>

                    <h1 class="hero-title">{{ $hero->title }}</h1>
                    <p class="hero-description">{{ $hero->description }}</p>

                    {{-- Kami menghadirkan solusi teknologi modern melalui jasa pembuatan website, aplikasi mobile, serta program pelatihan IT intensif untuk mempersiapkan SDM siap kerja. --}}
                    {{-- Kami menghadirkan solusi digital modern yang membantu bisnis berkembang lebih cepat, efisien, dan siap menghadapi era teknologi. --}}
                    {{-- Solusi software development, mobile apps, dan pelatihan IT profesional untuk membantu bisnis berkembang di era digital. --}}

                    <div class="hero-features">
                        <div class="feature-item">
                            <i class="bi bi-globe2"></i>
                            <span>Web Development</span>
                        </div>
                        <div class="feature-item">
                            <i class="bi bi-phone-fill"></i>
                            <span>Mobile Development</span>
                        </div>
                        <div class="feature-item">
                            <i class="bi bi-bar-chart-fill"></i>
                            <span>Training IT</span>
                        </div>
                        <div class="feature-item">
                            <i class="bi bi-rocket-takeoff-fill"></i>
                            <span>Bootcamp</span>
                        </div>
                    </div>
                    <div class="hero-actions">
                        <a href="#" class="btn-primary glightbox">
                            <i class="bi bi-whatsapp"></i>
                            <span>Konsultasi Gratis</span>
                        </a>
                        <a href="#" class="btn-secondary glightbox">
                            <i class="bi bi-stack"></i>
                            <span>Lihat Portfolio</span>
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
                </div>
                {{-- hero-visual --}}
            </div>
            {{-- col-lg-6 --}}

        </div>
        {{-- row --}}
    </div>
    {{-- container --}}

</section>
