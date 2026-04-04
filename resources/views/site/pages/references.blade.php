{{-- References Page --}}
@extends('site.layouts.app')

@section('title', 'Referanslarımız - DBS Software')
@section('meta_description', 'DBS Software Referanslar - Değerli müşterilerimiz ve çözüm ortaklarımız.')

@section('content')
    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center" data-aos="fade-up">
                    <h1 class="page-title">
                        <span class="accent-text glow-text">Referanslarımız</span>
                    </h1>
                    <p class="page-description">
                        Birlikte başardığımız, güvenin ve kalitenin kanıtı olan değerli müşterilerimiz.
                    </p>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('site.home') }}">Ana Sayfa</a></li>
                            <li class="breadcrumb-item active">Referanslar</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="portfolio-stats section-padding">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="stat-card glass-effect text-center">
                        <div class="stat-icon">
                            <i class="fas fa-building"></i>
                        </div>
                        <div class="stat-number accent-text" data-target="200">0</div>
                        <div class="stat-label">Mutlu Müşteri</div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="stat-card glass-effect text-center">
                        <div class="stat-icon">
                            <i class="fas fa-globe-europe"></i>
                        </div>
                        <div class="stat-number accent-text" data-target="15">0</div>
                        <div class="stat-label">Ülkede Hizmet</div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="stat-card glass-effect text-center">
                        <div class="stat-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <div class="stat-number accent-text" data-target="98">0</div>
                        <div class="stat-label">Müşteri Memnuniyeti</div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="stat-card glass-effect text-center">
                        <div class="stat-icon">
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="stat-number accent-text" data-target="4.9">0</div>
                        <div class="stat-label">Ortalama Puan</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- References Grid -->
    <section class="references-section section-padding bg-dark-alt">
        <div class="container">
            <div class="section-header text-center mb-5" data-aos="fade-up">
                <span class="section-subtitle">Güven Veren İşbirlikleri</span>
                <h2 class="section-title">
                    Çalıştığımız <span class="accent-text">Firmalar</span>
                </h2>
                <p class="section-description">
                    Dünya çapında saygın firmalarla gurur duyarak çalışıyoruz
                </p>
            </div>

            <div class="row g-4 justify-content-center">
                @forelse($references as $i => $reference)
                <div class="col-lg-3 col-md-4 col-6" data-aos="fade-up" data-aos-delay="{{ ($i % 4 + 1) * 100 }}">
                    <div class="reference-person-card">
                        <img src="{{ $reference->logo_image ? asset('storage/'.$reference->logo_image) : 'https://images.unsplash.com/photo-1560250097-0b93528c311a?w=600&q=80' }}" alt="{{ $reference->name }}" class="person-img">
                        <div class="person-overlay">
                            <h4 class="person-name">{{ $reference->name }}</h4>
                            @if($reference->description)
                                <div class="person-info">{{ Str::limit($reference->description, 100) }}</div>
                            @endif
                        </div>
                    </div>
                </div>
                @empty
                    <div class="col-12 text-center text-muted py-5">
                        <i class="fas fa-users fa-3x mb-3 opacity-25"></i>
                        <p>Henüz referans eklenmemiş.</p>
                    </div>
                @endforelse
            </div>

            <div class="text-center mt-5 pt-3" data-aos="fade-up">
                <a href="{{ route('site.contact') }}" class="btn btn-primary-custom btn-lg">
                    <span>Siz de Referansımız Olun</span>
                    <i class="fas fa-handshake"></i>
                </a>
            </div>
        </div>
    </section>
@endsection

@push('styles')
<style>
    .page-header {
        padding: 180px 0 100px;
        background: linear-gradient(135deg, var(--bg-primary) 0%, var(--bg-light) 100%);
        position: relative;
        overflow: hidden;
    }

    .page-header::before {
        content: '';
        position: absolute; top: 0; left: 0; width: 100%; height: 100%;
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
        text-decoration: none;
    }

    .breadcrumb-item a:hover {
        color: var(--primary-color);
    }

    /* Reference Card - Responsive Square Flip Style */
    .reference-person-card {
        position: relative;
        border-radius: 20px;
        overflow: hidden;
        aspect-ratio: 1 / 1;
        cursor: pointer;
        border: none;
        background: rgba(255, 255, 255, 0.03);
        border: 1px solid rgba(255, 255, 255, 0.05);
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
    }

    .person-img {
        max-width: 80%;
        max-height: 80%;
        object-fit: contain;
        transition: transform 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94), opacity 0.4s;
    }

    .person-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(15, 23, 42, 0.95);
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        padding: 25px;
        opacity: 0;
        transition: opacity 0.4s ease;
    }

    .reference-person-card:hover .person-overlay {
        opacity: 1;
    }

    .reference-person-card:hover .person-img {
        transform: scale(0.9);
        opacity: 0;
    }

    .person-name {
        color: #ffffff;
        font-size: 1.3rem;
        font-weight: 700;
        margin-bottom: 12px;
        transform: translateY(15px);
        transition: transform 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }

    .person-info {
        color: rgba(255, 255, 255, 0.85);
        font-size: 0.95rem;
        line-height: 1.5;
        transform: translateY(15px);
        transition: transform 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        transition-delay: 0.05s;
    }

    .reference-person-card:hover .person-name,
    .reference-person-card:hover .person-info {
        transform: translateY(0);
    }

    @media (max-width: 768px) {
        .page-title {
            font-size: 42px;
        }
    }
</style>
@endpush
