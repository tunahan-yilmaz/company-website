{{-- Service Detail Page --}}
@extends('site.layouts.app')

@section('title', $service->title . ' Hizmeti - DBS Software')
@section('meta_description', $service->short_description ?? Str::limit(strip_tags($service->description), 150))

@section('content')
    <!-- Page Header -->
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url('{{ $service->image ? asset('storage/'.$service->image) : 'https://images.unsplash.com/photo-1461749280684-dccba630e2f6?w=1920&q=80' }}');">
            <div class="page-header-overlay"></div>
        </div>
        <div class="container text-center position-relative z-index-2">
            <div class="service-icon-wrapper mx-auto mb-4" data-aos="fade-down">
                <i class="{{ $service->icon ?? 'fas fa-cogs' }}"></i>
            </div>
            <h1 class="page-title text-white" data-aos="fade-up">{{ $service->title }}</h1>
            <p class="page-description text-white-50" data-aos="fade-up" data-aos-delay="100">{{ $service->short_description }}</p>
            <div class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('site.home') }}" class="text-white-50">Ana Sayfa</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('site.services') }}" class="text-white-50">Hizmetlerimiz</a></li>
                        <li class="breadcrumb-item active text-white">{{ $service->title }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    <section class="service-detail-content-section section-padding pt-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-8" data-aos="fade-right">
                    <div class="service-main-content">
                        <h2 class="section-title mb-4">Hizmet <span class="accent-text">Detayları</span></h2>
                        <div class="service-description lead text-secondary mb-5">
                            @if($service->description)
                                {!! nl2br(e($service->description)) !!}
                            @else
                                <p>{{ $service->short_description }}</p>
                            @endif
                        </div>

                        <div class="row g-4 mb-5">
                            @if($service->features && count($service->features) > 0)
                            <div class="col-md-6">
                                <h4 class="mb-4">Özellikler</h4>
                                <ul class="list-unstyled service-features-list-alt">
                                    @foreach($service->features as $feature)
                                    <li class="mb-3 d-flex align-items-center">
                                        <i class="fas fa-check-circle accent-text me-3 fs-5"></i>
                                        <span class="text-secondary">{{ $feature }}</span>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif

                            @if($service->tech_stack && count($service->tech_stack) > 0)
                            <div class="col-md-6">
                                <h4 class="mb-4">Kullanılan Teknolojiler</h4>
                                <div class="tech-badges-grid">
                                    @foreach($service->tech_stack as $tech)
                                        <div class="tech-badge-item glass-effect px-4 py-3 rounded-3 mb-2 text-center text-secondary fw-semibold border border-secondary border-opacity-25">
                                            {{ $tech }}
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            @endif
                        </div>

                        @if($service->result_1_value || $service->result_2_value)
                        <div class="service-stats-box glass-effect p-4 border-radius-xl mb-5">
                            <h4 class="mb-4 text-center">Ölçülebilir Başarı</h4>
                            <div class="row g-3 text-center">
                                @if($service->result_1_value)
                                <div class="col-md-4">
                                    <h3 class="accent-text display-5 fw-bold mb-0">{{ $service->result_1_value }}</h3>
                                    <p class="text-secondary text-uppercase small letter-spacing-1">{{ $service->result_1_label }}</p>
                                </div>
                                @endif
                                @if($service->result_2_value)
                                <div class="col-md-4">
                                    <h3 class="accent-text display-5 fw-bold mb-0">{{ $service->result_2_value }}</h3>
                                    <p class="text-secondary text-uppercase small letter-spacing-1">{{ $service->result_2_label }}</p>
                                </div>
                                @endif
                                @if($service->result_3_value)
                                <div class="col-md-4">
                                    <h3 class="accent-text display-5 fw-bold mb-0">{{ $service->result_3_value }}</h3>
                                    <p class="text-secondary text-uppercase small letter-spacing-1">{{ $service->result_3_label }}</p>
                                </div>
                                @endif
                            </div>
                        </div>
                        @endif
                    </div>
                </div>

                <div class="col-lg-4" data-aos="fade-left">
                    <div class="sidebar-sticky" style="top: 100px; position: sticky;">
                        <div class="sidebar-widget glass-effect p-4 rounded-4 mb-4">
                            <h4 class="widget-title mb-4 border-bottom border-secondary border-opacity-25 pb-3">Diğer Hizmetlerimiz</h4>
                            <div class="related-services-list">
                                @foreach($related as $rel)
                                <a href="{{ route('site.service.detail', $rel->slug) }}" class="d-flex align-items-center mb-3 text-decoration-none transition-fast hover-accent">
                                    <div class="related-icon-box bg-dark-alt rounded p-3 me-3 text-primary">
                                        <i class="{{ $rel->icon ?? 'fas fa-concierge-bell' }}"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-1 text-white">{{ $rel->title }}</h6>
                                        <p class="text-secondary small mb-0"><i class="fas fa-arrow-right small"></i> İncele</p>
                                    </div>
                                </a>
                                @endforeach
                            </div>
                        </div>

                        <div class="sidebar-widget glass-effect p-4 rounded-4 text-center">
                            <i class="fas fa-headset fs-1 accent-text mb-3"></i>
                            <h4 class="mb-3">Sorularınız mı var?</h4>
                            <p class="text-secondary mb-4">Bu hizmet hakkında daha fazla bilgi almak veya projenizi görüşmek için hemen bizimle iletişime geçin.</p>
                            <a href="{{ route('site.contact') }}" class="btn btn-primary-custom w-100">
                                <span>{{ $service->cta_text ?? 'Teklif İste' }}</span> <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('styles')
<style>
    .page-header {
        padding: 160px 0 100px;
        position: relative;
        overflow: hidden;
    }
    .page-header-bg {
        position: absolute; top:0; left:0; width:100%; height:100%;
        background-size: cover; background-position: center;
        z-index: 0;
    }
    .page-header-overlay {
        position: absolute; top:0; left:0; width:100%; height:100%;
        background: linear-gradient(135deg, rgba(15, 23, 42, 0.95) 0%, rgba(15, 23, 42, 0.8) 100%);
        z-index: 1;
    }
    .z-index-2 { position: relative; z-index: 2; }
    
    .service-icon-wrapper {
        width: 80px; height: 80px;
        background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
        border-radius: 20px;
        display: flex; align-items: center; justify-content: center;
        font-size: 36px; color: var(--bg-primary);
        box-shadow: 0 10px 30px rgba(99, 102, 241, 0.4);
    }
    
    .hover-accent:hover h6 {
        color: var(--primary-color) !important;
    }
    .transition-fast { transition: all 0.3s ease; }
    
    .letter-spacing-1 { letter-spacing: 1px; }
    .border-radius-xl { border-radius: 1.5rem; }
</style>
@endpush
