{{-- Home Page --}}
@extends('site.layouts.app')

@section('title', 'DBS Software - Premium Yazılım & Dijital Çözümler')
@section('meta_description', 'DBS Software - 10+ yıllık deneyim ile premium yazılım çözümleri ve dijital dönüşüm partneri.')

@section('content')
    <!-- Hero Slider -->
    <section class="hero-slider" id="heroSlider">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-indicators">
                @foreach($sliders as $i => $slider)
                    <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="{{ $i }}" class="{{ $i === 0 ? 'active' : '' }}"></button>
                @endforeach
            </div>

            <div class="carousel-inner">
                @foreach($sliders as $i => $slider)
                <div class="carousel-item {{ $i === 0 ? 'active' : '' }}">
                    <div class="hero-slide-bg"
                         style="background-image: url('{{ $slider->image ? asset('storage/'.$slider->image) : 'https://images.unsplash.com/photo-1451187580459-43490279c0fa?w=1920&q=80' }}');">
                        <div class="hero-overlay"></div>
                    </div>
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-lg-8" data-aos="fade-right">
                                <div class="hero-content glass-effect">
                                    @if($slider->uptitle)
                                        <span class="hero-uptitle">{{ $slider->uptitle }}</span>
                                    @endif
                                    <h1 class="hero-title">
                                        @foreach(explode("\n", $slider->title) as $line)
                                            <span class="title-line {{ $loop->last ? 'accent-text glow-text' : '' }}">{{ $line }}</span>
                                        @endforeach
                                    </h1>
                                    <p class="hero-subtitle">{{ $slider->subtitle }}</p>
                                    <div class="hero-buttons">
                                        @if($slider->btn_text && $slider->btn_url)
                                        <a href="{{ $slider->btn_url }}" class="btn btn-primary-custom btn-lg">
                                            <span>{{ $slider->btn_text }}</span>
                                            <i class="fas fa-arrow-right"></i>
                                        </a>
                                        @endif
                                        @if($slider->btn_text_2 && $slider->btn_url_2)
                                        <a href="{{ $slider->btn_url_2 }}" class="btn btn-outline-custom btn-lg">
                                            <span>{{ $slider->btn_text_2 }}</span>
                                            <i class="fas fa-paper-plane"></i>
                                        </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide-number">{{ str_pad($i+1, 2, '0', STR_PAD_LEFT) }}</div>
                </div>
                @endforeach
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                <span class="carousel-control-icon"><i class="fas fa-chevron-left"></i></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                <span class="carousel-control-icon"><i class="fas fa-chevron-right"></i></span>
            </button>
        </div>

        <!-- Scroll Indicator -->
        <div class="scroll-indicator">
            <div class="scroll-line"></div>
            <span class="scroll-text">Scroll</span>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-section section-padding" id="about">
        <div class="container">
            <div class="row align-items-center mb-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="section-header text-start mb-4">
                        <span class="section-subtitle">Biz Kimiz?</span>
                        <h2 class="section-title">
                            Premium <span class="accent-text">Dijital Çözümler</span>
                        </h2>
                    </div>
                    @if($about)
                        <div class="lead mb-4">{!! $about->about_text !!}</div>
                    @else
                        <p class="lead mb-4">DBS Software olarak, 10 yılı aşkın süredir yazılım ve reklam sektöründe elit müşterilere hizmet veriyoruz.</p>
                    @endif

                    <div class="row g-3 mb-4">
                        <div class="col-md-4">
                            <div class="stat-card glass-effect text-center">
                                <div class="stat-number accent-text">{{ $about?->stat_1_number ?? '150+' }}</div>
                                <div class="stat-label">{{ $about?->stat_1_label ?? 'Tamamlanan Proje' }}</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="stat-card glass-effect text-center">
                                <div class="stat-number accent-text">{{ $about?->stat_3_number ?? '%98' }}</div>
                                <div class="stat-label">{{ $about?->stat_3_label ?? 'Müşteri Memnuniyeti' }}</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="stat-card glass-effect text-center">
                                <div class="stat-number accent-text">{{ $about?->stat_4_number ?? '10+' }}</div>
                                <div class="stat-label">{{ $about?->stat_4_label ?? 'Yıllık Deneyim' }}</div>
                            </div>
                        </div>
                    </div>

                    <a href="{{ route('site.about') }}" class="btn btn-primary-custom">
                        <span>Daha Fazla Bilgi</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                <div class="col-lg-6" data-aos="fade-left">
                    <div class="about-images">
                        <div class="about-img-main glass-effect">
                            <img src="{{ $about?->image_1 ? asset('storage/'.$about->image_1) : 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=600&q=80' }}"
                                 alt="Team Working" class="img-fluid rounded">
                        </div>
                        <div class="about-img-small glass-effect">
                            <img src="{{ $about?->image_2 ? asset('storage/'.$about->image_2) : 'https://images.unsplash.com/photo-1553877522-43269d4ea984?w=400&q=80' }}" alt="Office"
                                 class="img-fluid rounded">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services-section section-padding bg-dark-alt" id="services">
        <div class="container">
            <div class="section-header text-center mb-5" data-aos="fade-up">
                <span class="section-subtitle">Hizmetlerimiz</span>
                <h2 class="section-title">
                    Sunduğumuz <span class="accent-text">Çözümler</span>
                </h2>
                <p class="section-description">
                    İşletmenizin ihtiyaçlarına özel, profesyonel ve yenilikçi hizmetler sunuyoruz
                </p>
            </div>

            <div class="row g-4">
                @foreach($services as $i => $service)
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ ($i % 3 + 1) * 100 }}">
                    <div class="service-card glass-effect h-100">
                        <div class="service-icon">
                            <i class="{{ $service->icon ?? 'fas fa-cogs' }}"></i>
                        </div>
                        <h3 class="service-title">{{ $service->title }}</h3>
                        <p class="service-description">{{ $service->short_description }}</p>
                        @if($service->features)
                        <ul class="service-features">
                            @foreach(array_slice($service->features, 0, 4) as $feature)
                                <li><i class="fas fa-check accent-text"></i> {{ $feature }}</li>
                            @endforeach
                        </ul>
                        @endif
                        <a href="{{ route('site.service.detail', $service->slug) }}" class="service-link">
                            Detaylı Bilgi <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section class="portfolio-section section-padding" id="portfolio">
        <div class="container">
            <div class="section-header text-center mb-5" data-aos="fade-up">
                <span class="section-subtitle">Portfolyo</span>
                <h2 class="section-title">
                    Son <span class="accent-text">Projelerimiz</span>
                </h2>
                <p class="section-description">
                    Çeşitli sektörlerden müşterilerimiz için geliştirdiğimiz başarılı projeler
                </p>
            </div>

            <div class="row g-4 portfolio-grid">
                @foreach($portfolios as $i => $portfolio)
                <div class="col-lg-4 col-md-6 portfolio-item" data-category="{{ $portfolio->category?->slug }}" data-aos="fade-up" data-aos-delay="{{ ($i % 3) * 100 }}">
                    <div class="portfolio-card glass-effect">
                        <div class="portfolio-img">
                            <img src="{{ $portfolio->image ? asset('storage/'.$portfolio->image) : 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=600&q=80' }}"
                                 alt="{{ $portfolio->title }}" class="img-fluid">
                            <div class="portfolio-overlay">
                                <div class="portfolio-details">
                                    <h3 class="portfolio-title">{{ $portfolio->title }}</h3>
                                    <p class="portfolio-description">{{ $portfolio->subtitle }}</p>
                                    @if($portfolio->tech_stack)
                                    <div class="portfolio-tags">
                                        @foreach(array_slice($portfolio->tech_stack, 0, 3) as $tech)
                                            <span class="tag">{{ $tech }}</span>
                                        @endforeach
                                    </div>
                                    @endif
                                    <a href="{{ route('site.portfolio.detail', $portfolio->slug) }}" class="portfolio-btn">
                                        Detaylar <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-category">{{ $portfolio->category?->name }}</div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="text-center mt-5" data-aos="fade-up">
                <a href="{{ route('site.portfolio') }}" class="btn btn-outline-custom btn-lg">
                    <span>Tüm Projeleri Gör</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- References Section -->
    <section class="references-section section-padding bg-dark-alt" id="references">
        <div class="container">
            <div class="section-header text-center mb-5" data-aos="fade-up">
                <span class="section-subtitle">Güven Veren İşbirlikleri</span>
                <h2 class="section-title">
                    <span class="accent-text">Referanslarımız</span>
                </h2>
                <p class="section-description">
                    Dünya çapında saygın firmalarla gurur duyarak çalışıyoruz
                </p>
            </div>

            <div class="row g-4 mb-5">
                @foreach($references as $i => $reference)
                <div class="col-lg-3 col-md-4 col-6" data-aos="fade-up" data-aos-delay="{{ ($i % 4 + 1) * 50 }}">
                    <a href="{{ $reference->website_url ?: '#' }}" target="_blank" class="reference-card glass-effect">
                        <div class="reference-logo">
                            @if($reference->logo_image)
                                <img src="{{ asset('storage/'.$reference->logo_image) }}" alt="{{ $reference->name }}" style="max-height:60px;object-fit:contain;">
                            @else
                                <div class="logo-placeholder">
                                    <i class="fas fa-building"></i>
                                    <span>{{ $reference->name }}</span>
                                </div>
                            @endif
                        </div>
                        <div class="reference-name">{{ $reference->name }}</div>
                    </a>
                </div>
                @endforeach
            </div>

            <div class="text-center" data-aos="fade-up">
                <a href="{{ route('site.references') }}" class="btn btn-primary-custom btn-lg">
                    <span>Tüm Referanslar</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <section class="blog-section section-padding" id="blog">
        <div class="container">
            <div class="section-header text-center mb-5" data-aos="fade-up">
                <span class="section-subtitle">Blog & Haberler</span>
                <h2 class="section-title">
                    Son <span class="accent-text">Yazılarımız</span>
                </h2>
                <p class="section-description">
                    Teknoloji ve dijital dünya hakkında güncel içerikler
                </p>
            </div>

            <div class="row g-4">
                @forelse($blogs as $i => $blog)
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ ($i + 1) * 100 }}">
                    <article class="blog-card glass-effect h-100">
                        <div class="blog-img">
                            <img src="{{ $blog->image ? asset('storage/'.$blog->image) : 'https://images.unsplash.com/photo-1677442136019-21780ecad995?w=600&q=80' }}"
                                 alt="{{ $blog->title }}" class="img-fluid">
                            <div class="blog-date">
                                <span class="day">{{ $blog->created_at->format('d') }}</span>
                                <span class="month">{{ $blog->created_at->translatedFormat('M') }}</span>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span><i class="fas fa-user"></i> {{ $blog->author ?? 'Admin' }}</span>
                                @if($blog->category)<span><i class="fas fa-folder"></i> {{ $blog->category }}</span>@endif
                            </div>
                            <h3 class="blog-title">
                                <a href="{{ route('site.blog.detail', $blog->slug) }}">{{ $blog->title }}</a>
                            </h3>
                            <p class="blog-excerpt">{{ Str::limit($blog->excerpt ?? strip_tags($blog->content ?? ''), 120) }}</p>
                            <a href="{{ route('site.blog.detail', $blog->slug) }}" class="blog-link">
                                Devamını Oku <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </article>
                </div>
                @empty
                    <div class="col-12 text-center text-muted py-4">Henüz blog yazısı eklenmemiş.</div>
                @endforelse
            </div>

            <div class="text-center mt-5" data-aos="fade-up">
                <a href="{{ route('site.blog') }}" class="btn btn-outline-custom btn-lg">
                    <span>Tüm Yazılar</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Contact CTA Section -->
    <section class="contact-cta-section section-padding bg-dark-alt" id="contact-cta">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8" data-aos="fade-right">
                    <h2 class="section-title mb-3">
                        Projenizi <span class="accent-text">Konuşalım</span>
                    </h2>
                    <p class="lead mb-0">
                        Hayalinizdeki dijital projeyi birlikte gerçeğe dönüştürelim.
                        Uzman ekibimiz sizin için burada!
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end mt-4 mt-lg-0" data-aos="fade-left">
                    <a href="{{ route('site.contact') }}" class="btn btn-primary-custom btn-lg">
                        <span>Bize Ulaşın</span>
                        <i class="fas fa-paper-plane"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
