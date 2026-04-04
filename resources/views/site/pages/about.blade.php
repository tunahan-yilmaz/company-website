{{-- About Page --}}
@extends('site.layouts.app')

@section('title', 'Hakkımızda - DBS Software')
@section('meta_description', 'DBS Software Hakkında - 10+ yıllık deneyim ile yazılım ve dijital çözümler sunan elit bir ekip.')

@section('content')
    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center" data-aos="fade-up">
                    <h1 class="page-title">
                        <span class="accent-text glow-text">Hakkımızda</span>
                    </h1>
                    <p class="page-description">
                        10+ yıllık deneyim ile dijital dünyanın liderlerinden biri olmaya devam ediyoruz
                    </p>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('site.home') }}">Anasayfa</a></li>
                            <li class="breadcrumb-item active">Hakkımızda</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!-- Company Story Section -->
    <section class="company-story section-padding">
        <div class="container">
            <div class="row align-items-center mb-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="story-images">
                        <div class="story-img-main glass-effect">
                            <img src="{{ $about?->image_1 ? asset('storage/'.$about->image_1) : 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=700&q=80' }}"
                                 alt="DBS Software Ekibi" class="img-fluid rounded">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="section-header text-start mb-4">
                        <span class="section-subtitle">Hikayemiz</span>
                        <h2 class="section-title">
                            <span class="accent-text">DBS Software</span> Yolculuğu
                        </h2>
                    </div>
                    @if($about?->about_text)
                        <div class="lead mb-4">{!! $about->about_text !!}</div>
                    @else
                        <p class="lead mb-4">
                            2014 yılında kurulan DBS Software, yazılım ve dijital reklam sektöründe 10+ yıllık deneyimiyle
                            Türkiye'nin en güvenilir teknoloji partnerlerinden biri haline geldi.
                        </p>
                    @endif
                </div>
            </div>

            <!-- Stats Row -->
            <div class="row g-4 mt-2">
                @php
                    $stats = [
                        ['number' => $about?->stat_1_number ?? '150+', 'label' => $about?->stat_1_label ?? 'Tamamlanan Proje'],
                        ['number' => $about?->stat_2_number ?? '120+', 'label' => $about?->stat_2_label ?? 'Mutlu Müşteri'],
                        ['number' => $about?->stat_3_number ?? '%98', 'label' => $about?->stat_3_label ?? 'Müşteri Memnuniyeti'],
                        ['number' => $about?->stat_4_number ?? '10+', 'label' => $about?->stat_4_label ?? 'Yıllık Deneyim'],
                    ];
                @endphp
                @foreach($stats as $i => $stat)
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="{{ ($i + 1) * 100 }}">
                    <div class="stat-card glass-effect text-center">
                        <div class="stat-number accent-text">{{ $stat['number'] }}</div>
                        <div class="stat-label">{{ $stat['label'] }}</div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Mission Vision Values -->
    <section class="mission-vision section-padding bg-dark-alt">
        <div class="container">
            <div class="section-header text-center mb-5" data-aos="fade-up">
                <span class="section-subtitle">Temel Değerlerimiz</span>
                <h2 class="section-title">Misyon, Vizyon & <span class="accent-text">Değerler</span></h2>
            </div>
            <div class="row g-4">
                <!-- Mission -->
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="mvv-card glass-effect h-100 text-center">
                        <div class="mvv-icon">
                            <i class="fas fa-rocket"></i>
                        </div>
                        <h3 class="mvv-title">Misyonumuz</h3>
                        <p class="mvv-text">
                            {{ $about?->mission ?? 'İşletmelerin dijital dönüşüm süreçlerinde, en son teknolojileri kullanarak yenilikçi ve kullanıcı odaklı çözümler sunmak.' }}
                        </p>
                    </div>
                </div>

                <!-- Vision -->
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="mvv-card glass-effect h-100 text-center featured">
                        <div class="mvv-icon">
                            <i class="fas fa-eye"></i>
                        </div>
                        <h3 class="mvv-title">Vizyonumuz</h3>
                        <p class="mvv-text">
                            {{ $about?->vision ?? 'Türkiye\'nin ve bölgenin en güvenilir ve tercih edilen yazılım ve dijital pazarlama şirketi olmak.' }}
                        </p>
                    </div>
                </div>

                <!-- Values -->
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="mvv-card glass-effect h-100 text-center">
                        <div class="mvv-icon">
                            <i class="fas fa-star"></i>
                        </div>
                        <h3 class="mvv-title">Değerlerimiz</h3>
                        <p class="mvv-text">
                            {{ $about?->values ?? 'Müşteri memnuniyeti, yenilikçilik, şeffaflık, takım çalışması, sürekli gelişim ve kalite odaklılık temel prensiblerimizdir.' }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    @if($team && $team->count() > 0)
    <section class="team-section section-padding">
        <div class="container">
            <div class="section-header text-center mb-5" data-aos="fade-up">
                <span class="section-subtitle">Ekibimiz</span>
                <h2 class="section-title">
                    Uzman <span class="accent-text">Kadromuz</span>
                </h2>
                <p class="section-description">
                    Alanında uzman, tutkulu ve deneyimli ekip üyelerimizle tanışın
                </p>
            </div>

            <div class="row g-4">
                @foreach($team as $i => $member)
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="{{ ($i % 4 + 1) * 100 }}">
                    <div class="team-card glass-effect text-center">
                        <div class="team-img">
                            <img src="{{ $member->image ? asset('storage/'.$member->image) : 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=400&q=80' }}"
                                 alt="{{ $member->name }}" class="img-fluid rounded-circle">
                        </div>
                        <div class="team-info">
                            <h4 class="team-name">{{ $member->name }}</h4>
                            <p class="team-position accent-text">{{ $member->position }}</p>
                            @if($member->bio)
                                <p class="team-bio">{{ Str::limit($member->bio, 100) }}</p>
                            @endif
                            <div class="team-social">
                                @if($member->linkedin)
                                    <a href="{{ $member->linkedin }}" target="_blank"><i class="fab fa-linkedin"></i></a>
                                @endif
                                @if($member->twitter)
                                    <a href="{{ $member->twitter }}" target="_blank"><i class="fab fa-twitter"></i></a>
                                @endif
                                @if($member->github)
                                    <a href="{{ $member->github }}" target="_blank"><i class="fab fa-github"></i></a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    <!-- Timeline Section -->
    @if($timeline && $timeline->count() > 0)
    <section class="timeline-section section-padding bg-dark-alt">
        <div class="container">
            <div class="section-header text-center mb-5" data-aos="fade-up">
                <span class="section-subtitle">Yolculuğumuz</span>
                <h2 class="section-title">
                    Büyüme <span class="accent-text">Hikayemiz</span>
                </h2>
            </div>

            <div class="timeline">
                @foreach($timeline as $i => $event)
                <div class="timeline-item {{ $i % 2 === 0 ? 'left' : 'right' }}" data-aos="{{ $i % 2 === 0 ? 'fade-right' : 'fade-left' }}">
                    <div class="timeline-content glass-effect">
                        <div class="timeline-year accent-text">{{ $event->year }}</div>
                        <h3 class="timeline-title">{{ $event->title }}</h3>
                        <p class="timeline-description">{{ $event->description }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    <!-- CTA Section -->
    <section class="contact-cta-section section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8" data-aos="fade-right">
                    <h2 class="section-title mb-3">
                        Birlikte <span class="accent-text">Çalışalım</span>
                    </h2>
                    <p class="lead mb-0">
                        Sizi de başarı hikayelerimizin bir parçası yapmak istiyoruz. Projenizi konuşalım!
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end mt-4 mt-lg-0" data-aos="fade-left">
                    <a href="{{ route('site.contact') }}" class="btn btn-primary-custom btn-lg">
                        <span>İletişime Geçin</span>
                        <i class="fas fa-paper-plane"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
