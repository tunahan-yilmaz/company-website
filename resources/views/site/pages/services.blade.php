{{-- Services Page --}}
@extends('site.layouts.app')

@section('title', 'Hizmetlerimiz - DBS Software')
@section('meta_description', 'DBS Software Hizmetler - Yazılım geliştirme, dijital reklam, mobil uygulamalar ve daha fazlası.')

@section('content')
    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center" data-aos="fade-up">
                    <h1 class="page-title">
                        <span class="accent-text glow-text">Hizmetlerimiz</span>
                    </h1>
                    <p class="page-description">
                        İşletmenizin ihtiyaçlarına özel, profesyonel ve yenilikçi dijital çözümler
                    </p>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('site.home') }}">Ana Sayfa</a></li>
                            <li class="breadcrumb-item active">Hizmetlerimiz</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Overview (quick nav) -->
    <section class="services-overview section-padding">
        <div class="container">
            <div class="row g-4 justify-content-center">
                @foreach($services as $i => $service)
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ ($i % 3 + 1) * 100 }}">
                    <a href="#service-{{ $service->slug }}" class="service-overview-card glass-effect">
                        <div class="service-overview-icon">
                            <i class="{{ $service->icon ?? 'fas fa-cogs' }}"></i>
                        </div>
                        <h3 class="service-overview-title">{{ $service->title }}</h3>
                        <p class="service-overview-text">{{ $service->short_description ?? Str::limit(strip_tags($service->description), 60) }}</p>
                        <span class="service-overview-arrow"><i class="fas fa-arrow-right"></i></span>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Service Detail Sections -->
    @foreach($services as $i => $service)
    <section class="service-detail section-padding {{ $i % 2 == 0 ? 'bg-dark-alt' : '' }}" id="service-{{ $service->slug }}">
        <div class="container">
            <div class="row align-items-center {{ $i % 2 != 0 ? 'flex-lg-row-reverse' : '' }}">
                <div class="col-lg-6 mb-5 mb-lg-0" data-aos="{{ $i % 2 == 0 ? 'fade-right' : 'fade-left' }}">
                    <div class="service-detail-img glass-effect">
                        <img src="{{ $service->image ? asset('storage/'.$service->image) : 'https://images.unsplash.com/photo-1461749280684-dccba630e2f6?w=700&q=80' }}" alt="{{ $service->title }}" class="img-fluid rounded">
                    </div>
                </div>
                <div class="col-lg-6" data-aos="{{ $i % 2 == 0 ? 'fade-left' : 'fade-right' }}">
                    <div class="service-detail-content">
                        <span class="service-badge">Hizmet #{{ $i + 1 }}</span>
                        <h2 class="service-detail-title">
                            @php
                                $words = explode(' ', $service->title);
                                $firstWord = array_shift($words);
                                $rest = implode(' ', $words);
                            @endphp
                            <span class="accent-text">{{ $firstWord }}</span> {{ $rest }}
                        </h2>
                        <div class="service-detail-text">
                            @if($service->description)
                                {!! nl2br(e($service->description)) !!}
                            @else
                                <p>{{ $service->short_description }}</p>
                            @endif
                        </div>

                        @if($service->features && count($service->features) > 0)
                        <div class="service-features-list mt-4">
                            <div class="row g-3">
                                @foreach($service->features as $feature)
                                <div class="col-md-6">
                                    <div class="feature-item">
                                        <i class="fas fa-check-circle accent-text"></i>
                                        <span>{{ $feature }}</span>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @endif

                        @if($service->tech_stack && count($service->tech_stack) > 0)
                        <div class="service-tech-stack mt-4">
                            <h5 class="mb-3">Kullanılan Teknolojiler:</h5>
                            <div class="tech-badges">
                                @foreach($service->tech_stack as $tech)
                                    <span class="tech-badge">{{ $tech }}</span>
                                @endforeach
                            </div>
                        </div>
                        @endif
                        
                        <!-- Added dynamically loaded custom stats here -->
                        @if($service->result_1_value || $service->result_2_value)
                        <div class="service-stats mt-4">
                            <div class="row g-3">
                                @if($service->result_1_value)
                                <div class="col-6">
                                    <div class="stat-mini glass-effect">
                                        <div class="stat-mini-number accent-text">{{ $service->result_1_value }}</div>
                                        <div class="stat-mini-label">{{ $service->result_1_label ?? 'Sonuç' }}</div>
                                    </div>
                                </div>
                                @endif
                                @if($service->result_2_value)
                                <div class="col-6">
                                    <div class="stat-mini glass-effect">
                                        <div class="stat-mini-number accent-text">{{ $service->result_2_value }}</div>
                                        <div class="stat-mini-label">{{ $service->result_2_label ?? 'Sonuç' }}</div>
                                    </div>
                                </div>
                                @endif
                                @if($service->result_3_value)
                                <div class="col-6">
                                    <div class="stat-mini glass-effect">
                                        <div class="stat-mini-number accent-text">{{ $service->result_3_value }}</div>
                                        <div class="stat-mini-label">{{ $service->result_3_label ?? 'Sonuç' }}</div>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                        @else
                        <!-- Or default static if no custom stat available for consistency with theme -->
                        @endif

                        <a href="{{ route('site.contact') }}" class="btn btn-primary-custom mt-4">
                            <span>{{ $service->cta_text ?? 'Teklif Alın' }}</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endforeach

    <section class="cta-section section-padding bg-dark-alt">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8" data-aos="fade-right">
                    <h2 class="section-title mb-3">
                        Hangi Hizmete <span class="accent-text">İhtiyacınız Var?</span>
                    </h2>
                    <p class="lead mb-0">
                        Uzman ekibimizle ücretsiz danışmanlık alın ve projeniz için en uygun çözümü belirleyin.
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end mt-4 mt-lg-0" data-aos="fade-left">
                    <a href="{{ route('site.contact') }}" class="btn btn-primary-custom btn-lg">
                        <span>Ücretsiz Görüşme</span>
                        <i class="fas fa-phone"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('styles')
<style>
    /* Services Page Specific Styles */
    .page-header {
        padding: 180px 0 100px;
        background: linear-gradient(135deg, var(--bg-primary) 0%, var(--bg-light) 100%);
        position: relative;
        overflow: hidden;
    }

    .page-header::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: radial-gradient(ellipse at center, var(--primary-glow) 0%, transparent 70%);
        opacity: 0.3;
    }

    .page-title {
        font-size: 60px;
        font-weight: 900;
        margin-bottom: 20px;
    }

    .page-description {
        font-size: 20px;
        color: var(--text-muted);
        margin-bottom: 30px;
    }

    .breadcrumb {
        background: transparent;
        margin: 0;
    }

    .breadcrumb-item {
        color: var(--text-secondary);
    }

    .breadcrumb-item.active {
        color: var(--primary-color);
    }

    .breadcrumb-item + .breadcrumb-item::before {
        color: var(--text-muted);
    }

    .breadcrumb-item a {
        color: var(--text-secondary);
    }

    .breadcrumb-item a:hover {
        color: var(--primary-color);
    }

    .service-overview-card {
        display: block;
        padding: 40px 30px;
        border-radius: 20px;
        text-align: center;
        position: relative;
        transition: var(--transition-fast);
        height: 100%;
    }

    .service-overview-icon {
        width: 80px;
        height: 80px;
        background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
        border-radius: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 36px;
        color: var(--bg-primary);
        margin: 0 auto 25px;
        box-shadow: var(--shadow-glow);
        transition: var(--transition-fast);
    }

    .service-overview-card:hover .service-overview-icon {
        transform: scale(1.1) rotate(5deg);
    }

    .service-overview-title {
        font-size: 22px;
        margin-bottom: 12px;
        color: var(--text-primary);
    }

    .service-overview-text {
        font-size: 15px;
        color: var(--text-muted);
        margin-bottom: 20px;
    }

    .service-overview-arrow {
        display: inline-block;
        color: var(--primary-color);
        transition: var(--transition-fast);
    }

    .service-overview-card:hover .service-overview-arrow {
        transform: translateX(10px);
    }

    .service-detail-img {
        padding: 15px;
        border-radius: 20px;
    }

    .service-detail-img img {
        border-radius: 15px;
        width: 100%;
        object-fit: cover;
    }

    .service-badge {
        display: inline-block;
        padding: 8px 20px;
        background: var(--primary-color);
        color: var(--bg-primary);
        font-size: 12px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        border-radius: 20px;
        margin-bottom: 20px;
    }

    .service-detail-title {
        font-size: 42px;
        margin-bottom: 20px;
    }

    .service-detail-text {
        font-size: 16px;
        color: var(--text-muted);
        line-height: 1.8;
        margin-bottom: 30px;
    }

    .feature-item {
        display: flex;
        align-items: flex-start;
        gap: 12px;
        font-size: 15px;
        color: var(--text-secondary);
        padding: 8px 0;
    }

    .feature-item i {
        font-size: 18px;
        margin-top: 2px;
    }

    .tech-badges {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }

    .tech-badge {
        padding: 8px 18px;
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid var(--primary-color);
        color: var(--primary-color);
        font-size: 13px;
        font-weight: 600;
        border-radius: 20px;
        transition: var(--transition-fast);
    }

    .tech-badge:hover {
        background: var(--primary-color);
        color: var(--bg-primary);
    }

    .process-step {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 15px;
        background: rgba(255, 255, 255, 0.03);
        border-radius: 10px;
        border: 1px solid rgba(255, 255, 255, 0.1);
        margin-bottom: 15px;
    }

    .process-number {
        width: 40px;
        height: 40px;
        background: var(--primary-color);
        color: var(--bg-primary);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        flex-shrink: 0;
    }

    .process-text {
        font-size: 14px;
        color: var(--text-secondary);
    }

    .stat-mini {
        padding: 25px 20px;
        border-radius: 15px;
        text-align: center;
    }

    .stat-mini-number {
        font-size: 36px;
        font-weight: 900;
        font-family: var(--font-heading);
        margin-bottom: 8px;
    }

    .stat-mini-label {
        font-size: 13px;
        color: var(--text-muted);
        text-transform: uppercase;
    }
</style>
@endpush
