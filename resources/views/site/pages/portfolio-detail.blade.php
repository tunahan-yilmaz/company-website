{{-- Portfolio Detail Page --}}
@extends('site.layouts.app')

@section('title', $portfolio->title . ' - DBS Software Portfolyo')
@section('meta_description', $portfolio->description ?? $portfolio->subtitle)

@section('content')
    <!-- Project Hero -->
    <section class="project-hero">
        <div class="project-hero-bg" style="background-image: url('{{ $portfolio->image ? asset('storage/'.$portfolio->image) : 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=1920&q=80' }}');">
            <div class="project-hero-overlay"></div>
        </div>
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-lg-8" data-aos="fade-right">
                    <div class="project-hero-content">
                        <a href="{{ route('site.portfolio') }}" class="back-link mb-3">
                            <i class="fas fa-arrow-left"></i> Portfolyo'ya Dön
                        </a>
                        @if($portfolio->category)
                            <span class="project-category-badge">{{ $portfolio->category->name }}</span>
                        @endif
                        <h1 class="project-hero-title">
                            @php
                                $words = explode(' ', $portfolio->title);
                                $lastWord = array_pop($words);
                                $firstPart = implode(' ', $words);
                            @endphp
                            {{ $firstPart }} <span class="accent-text glow-text">{{ $lastWord }}</span>
                        </h1>
                        <p class="project-hero-subtitle">
                            {{ $portfolio->subtitle ?? $portfolio->description }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Project Info Bar -->
    <section class="project-info-bar">
        <div class="container">
            <div class="row g-4 justify-content-center">
                @if($portfolio->client_name)
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="info-item glass-effect">
                        <div class="info-icon">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <div class="info-content">
                            <div class="info-label">Müşteri</div>
                            <div class="info-value">{{ $portfolio->client_name }}</div>
                        </div>
                    </div>
                </div>
                @endif

                @if($portfolio->date)
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="info-item glass-effect">
                        <div class="info-icon">
                            <i class="fas fa-calendar-alt"></i>
                        </div>
                        <div class="info-content">
                            <div class="info-label">Tarih</div>
                            <div class="info-value">{{ \Carbon\Carbon::parse($portfolio->date)->translatedFormat('F Y') }}</div>
                        </div>
                    </div>
                </div>
                @endif

                @if($portfolio->duration)
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="info-item glass-effect">
                        <div class="info-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="info-content">
                            <div class="info-label">Süre</div>
                            <div class="info-value">{{ $portfolio->duration }}</div>
                        </div>
                    </div>
                </div>
                @endif

                @if($portfolio->category)
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="info-item glass-effect">
                        <div class="info-icon">
                            <i class="fas fa-tags"></i>
                        </div>
                        <div class="info-content">
                            <div class="info-label">Kategori</div>
                            <div class="info-value">{{ $portfolio->category->name }}</div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </section>

    <!-- Project Content -->
    <section class="project-content section-padding">
        <div class="container">
            <div class="row g-5">
                <!-- Main Content -->
                <div class="col-lg-8">
                    <!-- Project Overview -->
                    <div class="content-block mb-5" data-aos="fade-up">
                        <h2 class="content-title">
                            Proje <span class="accent-text">Hakkında</span>
                        </h2>
                        <div class="lead mb-4">
                            {!! nl2br(e($portfolio->detail_text ?? $portfolio->description)) !!}
                        </div>
                    </div>

                    <!-- Challenge -->
                    @if($portfolio->challenge)
                    <div class="content-block mb-5" data-aos="fade-up">
                        <h2 class="content-title">
                            <span class="accent-text">Zorluklar</span> ve Çözümler
                        </h2>
                        <div class="challenge-list">
                            <div class="challenge-item glass-effect">
                                <div class="challenge-icon">
                                    <i class="fas fa-exclamation-circle"></i>
                                </div>
                                <div class="challenge-content">
                                    <h4>Proje Zorlukları</h4>
                                    <p>{{ $portfolio->challenge }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif

                    <!-- Technologies -->
                    @if($portfolio->tech_stack && count($portfolio->tech_stack) > 0)
                    <div class="content-block mb-5" data-aos="fade-up">
                        <h2 class="content-title">
                            Kullanılan <span class="accent-text">Teknolojiler</span>
                        </h2>
                        <div class="tech-stack-grid">
                            @foreach($portfolio->tech_stack as $tech)
                            <div class="tech-stack-item glass-effect">
                                <i class="fas fa-code"></i>
                                <span>{{ $tech }}</span>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endif

                    <!-- Features/Tags -->
                    @if($portfolio->tags && count($portfolio->tags) > 0)
                    <div class="content-block mb-5" data-aos="fade-up">
                        <h2 class="content-title">
                            Proje <span class="accent-text">Etiketleri</span>
                        </h2>
                        <div class="row g-3">
                            @foreach($portfolio->tags as $tag)
                            <div class="col-md-6">
                                <div class="feature-box glass-effect">
                                    <i class="fas fa-check-circle accent-text"></i>
                                    <span>{{ $tag }}</span>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endif

                    <!-- Results -->
                    @if($portfolio->results && count($portfolio->results) > 0)
                    <div class="content-block" data-aos="fade-up">
                        <h2 class="content-title">
                            Proje <span class="accent-text">Sonuçları</span>
                        </h2>
                        <div class="results-grid mt-4">
                            @foreach($portfolio->results as $result)
                            <div class="result-item glass-effect">
                                <div class="result-number accent-text">{{ $result['value'] ?? '' }}</div>
                                <div class="result-label">{{ $result['label'] ?? '' }}</div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endif
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <div class="sidebar-sticky">
                        <!-- Project Details -->
                        <div class="sidebar-widget glass-effect mb-4" data-aos="fade-left">
                            <h3 class="widget-title">Proje Detayları</h3>
                            <ul class="project-details-list">
                                @if($portfolio->client_name)
                                <li>
                                    <span class="detail-label"><i class="fas fa-user-tie"></i> Müşteri:</span>
                                    <span class="detail-value">{{ $portfolio->client_name }}</span>
                                </li>
                                @endif
                                @if($portfolio->location)
                                <li>
                                    <span class="detail-label"><i class="fas fa-map-marker-alt"></i> Lokasyon:</span>
                                    <span class="detail-value">{{ $portfolio->location }}</span>
                                </li>
                                @endif
                                @if($portfolio->date)
                                <li>
                                    <span class="detail-label"><i class="fas fa-calendar-alt"></i> Tarih:</span>
                                    <span class="detail-value">{{ \Carbon\Carbon::parse($portfolio->date)->translatedFormat('F Y') }}</span>
                                </li>
                                @endif
                                @if($portfolio->duration)
                                <li>
                                    <span class="detail-label"><i class="fas fa-clock"></i> Süre:</span>
                                    <span class="detail-value">{{ $portfolio->duration }}</span>
                                </li>
                                @endif
                                @if($portfolio->team_size)
                                <li>
                                    <span class="detail-label"><i class="fas fa-users"></i> Ekip:</span>
                                    <span class="detail-value">{{ $portfolio->team_size }} Kişi</span>
                                </li>
                                @endif
                            </ul>
                            
                            @if($portfolio->project_url)
                            <div class="mt-4">
                                <a href="{{ $portfolio->project_url }}" target="_blank" class="btn btn-primary-custom w-100">
                                    <span>Projeyi İncele</span>
                                    <i class="fas fa-external-link-alt"></i>
                                </a>
                            </div>
                            @endif
                        </div>

                        <!-- CTA -->
                        <div class="sidebar-widget glass-effect" data-aos="fade-left" data-aos-delay="200">
                            <h3 class="widget-title">Benzer Bir Proje mi?</h3>
                            <p class="mb-4">
                                Sizin için de böyle bir çözüm geliştirebiliriz. Hemen iletişime geçin!
                            </p>
                            <a href="{{ route('site.contact') }}" class="btn btn-primary-custom w-100">
                                <span>Proje Başlat</span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        /* Portfolio Detail Page Specific Styles */
        .project-hero {
            position: relative;
            height: 70vh;
            min-height: 500px;
            display: flex;
            align-items: center;
        }

        .project-hero-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
        }

        .project-hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, 
                        rgba(0, 0, 0, 0.9) 0%, 
                        rgba(0, 0, 0, 0.7) 50%, 
                        rgba(0, 0, 0, 0.9) 100%);
        }

        .project-hero-content {
            position: relative;
            z-index: 2;
        }

        .back-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: var(--text-secondary);
            font-size: 14px;
            transition: var(--transition-fast);
        }

        .back-link:hover {
            color: var(--primary-color);
            transform: translateX(-5px);
        }

        .project-category-badge {
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

        .project-hero-title {
            font-size: 70px;
            font-weight: 900;
            margin-bottom: 20px;
            line-height: 1.1;
        }

        .project-hero-subtitle {
            font-size: 22px;
            color: var(--text-muted);
        }

        .project-info-bar {
            margin-top: -60px;
            position: relative;
            z-index: 3;
            padding: 0 0 60px 0;
        }

        .info-item {
            padding: 25px 20px;
            border-radius: 15px;
            display: flex;
            align-items: center;
            gap: 15px;
            height: 100%;
        }

        .info-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            color: var(--bg-primary);
            flex-shrink: 0;
        }

        .info-label {
            font-size: 12px;
            color: var(--text-muted);
            text-transform: uppercase;
            margin-bottom: 5px;
        }

        .info-value {
            font-size: 16px;
            font-weight: 600;
            color: var(--text-primary);
        }

        .content-title {
            font-size: 36px;
            margin-bottom: 25px;
        }

        .challenge-item {
            padding: 30px;
            border-radius: 15px;
            display: flex;
            gap: 20px;
            margin-bottom: 20px;
        }

        .challenge-icon {
            width: 60px;
            height: 60px;
            background: var(--primary-color);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            color: var(--bg-primary);
            flex-shrink: 0;
        }

        .challenge-content h4 {
            font-size: 20px;
            margin-bottom: 12px;
            color: var(--text-primary);
        }

        .challenge-content p {
            font-size: 14px;
            color: var(--text-muted);
            line-height: 1.7;
            margin-bottom: 8px;
        }

        .tech-stack-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(120px, 1fr));
            gap: 15px;
        }

        .tech-stack-item {
            padding: 25px 15px;
            border-radius: 12px;
            text-align: center;
            transition: var(--transition-fast);
        }

        .tech-stack-item:hover {
            transform: translateY(-5px);
        }

        .tech-stack-item i {
            font-size: 40px;
            color: var(--primary-color);
            margin-bottom: 12px;
            display: block;
        }

        .tech-stack-item span {
            font-size: 14px;
            font-weight: 600;
            color: var(--text-secondary);
        }

        .feature-box {
            padding: 15px 20px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 14px;
            color: var(--text-secondary);
        }

        .feature-box i {
            font-size: 18px;
        }

        .results-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }

        .result-item {
            padding: 30px 20px;
            border-radius: 15px;
            text-align: center;
        }

        .result-number {
            font-size: 42px;
            font-weight: 900;
            font-family: var(--font-heading);
            margin-bottom: 10px;
        }

        .result-label {
            font-size: 14px;
            color: var(--text-muted);
        }

        .sidebar-sticky {
            position: sticky;
            top: 100px;
        }

        .sidebar-widget {
            padding: 30px;
            border-radius: 15px;
        }

        .widget-title {
            font-size: 22px;
            margin-bottom: 20px;
            color: var(--text-primary);
        }

        .project-details-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .project-details-list li {
            padding: 12px 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 15px;
        }

        .project-details-list li:last-child {
            border-bottom: none;
        }

        .detail-label {
            font-size: 13px;
            color: var(--text-muted);
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .detail-label i {
            color: var(--primary-color);
        }

        .detail-value {
            font-size: 14px;
            font-weight: 600;
            color: var(--text-primary);
            text-align: right;
        }

        @media (max-width: 768px) {
            .project-hero-title {
                font-size: 42px;
            }

            .content-title {
                font-size: 28px;
            }

            .sidebar-sticky {
                position: relative;
                top: 0;
            }
        }
    </style>
@endsection
