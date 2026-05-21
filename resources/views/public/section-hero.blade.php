<section id="hero" class="hero section dark-background">

    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-6">
                <div class="hero-content pe-0 pe-lg-5">
                    <h1 class="hero-title">{{ $hero->title }}</h1>
                    {{-- <h1 class="hero-title">Transformasi Digital di Akselerasi Bisnis Anda</h1> --}}
                    <p class="hero-description">
                        {{ $hero->description }}
                        {{-- Kami menghadirkan solusi teknologi modern melalui jasa pembuatan website, aplikasi mobile, serta program pelatihan IT intensif untuk mempersiapkan SDM siap kerja. --}}
                        {{-- Kami menghadirkan solusi digital modern yang membantu bisnis berkembang lebih cepat, efisien, dan siap menghadapi era teknologi. --}}
                        {{-- Solusi software development, mobile apps, dan pelatihan IT profesional untuk membantu bisnis berkembang di era digital. --}}
                    </p>
                    <div class="hero-features">
                        <div class="feature-item">
                            <i class="bi bi-check-circle-fill"></i>
                            <span>Web Development</span>
                        </div>
                        <div class="feature-item">
                            <i class="bi bi-check-circle-fill"></i>
                            <span>Mobile Development</span>
                        </div>
                        <div class="feature-item">
                            <i class="bi bi-check-circle-fill"></i>
                            <span>Training IT</span>
                        </div>
                        <div class="feature-item">
                            <i class="bi bi-check-circle-fill"></i>
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
                </div>
            </div>

            <div class="col-lg-6">
                <div class="hero-visual">
                    <div class="visual-container">
                        <img src="{{ $hero->image_url }}" alt="Product Dashboard" class="img-fluid main-screen">
                    </div>
                </div>
            </div>

        </div>
        {{-- row --}}
    </div>
    {{-- container --}}

</section>
