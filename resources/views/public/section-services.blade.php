<section id="services" class="services section">

    <div class="container section-title">
        <h2>Our Business Solutions</h2>
        <p>Diskusikan kebutuhan website, aplikasi mobile, atau pelatihan IT bersama tim kami.</p>
    </div>

    <div class="container">

        <div class="row g-3">
            @foreach ($services as $service)
                <div class="col-lg-4">
                    <div class="service-card">
                        <div class="service-card-header">
                            <div class="service-icon">
                                <i class="{{ $service->icon }}"></i>
                            </div>
                            <div class="service-meta">
                                <span class="service-category">{{ $service->category }}</span>
                            </div>
                        </div>
                        <div class="service-card-body">
                            <h3>{{ $service->title }}</h3>
                            <p>{{ $service->description }}</p>
                            <div class="service-features">
                                @foreach ($service->activeServicesFeatures as $feature)
                                    <div class="feature-item align-items-end">
                                        <i class="bi bi-check-circle-fill"></i>
                                        <span>{{ $feature->features }}</span>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="service-card-footer">
                            <span class="service-link badge text-bg-success">
                                {{ $service->tech_stack }}
                            </span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="row">
            <div class="col-12">
                <div class="cta-section">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <div class="cta-content">
                                <h3>Kami Siap Membangun Solusi Digital Anda</h3>
                                {{-- <p>Diskusikan kebutuhan website, aplikasi mobile, atau pelatihan IT bersama tim kami.</p> --}}
                                <div class="cta-stats">
                                    <div class="stat-item">
                                        <div class="stat-number">7+</div>
                                        <div class="stat-label">Years Experience</div>
                                    </div>
                                    <div class="stat-item">
                                        <div class="stat-number">10+</div>
                                        <div class="stat-label">Projects Completed</div>
                                    </div>
                                    <div class="stat-item">
                                        <div class="stat-number">95%</div>
                                        <div class="stat-label">Client Satisfaction</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 text-lg-end">
                            <div class="cta-actions">
                                <a href="" class="btn-secondary">
                                    <i class="bi bi-whatsapp me-2"></i>Konsultasi Gratis
                                </a>
                                <a href="" class="btn-secondary">
                                    <i class="bi bi-stack me-2"></i>Lihat Portfolio
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- cta-section --}}
            </div>
            {{-- col-lg-12 --}}
        </div>
        {{-- row --}}

    </div>
</section>
