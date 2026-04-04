{{-- Portfolio Page --}}
@extends('site.layouts.app')

@section('title', 'Portfolyo - DBS Software')
@section('meta_description', 'DBS Software Portfolyo - Başarıyla tamamlanan projeler ve referans çalışmalar.')

@section('content')
    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center" data-aos="fade-up">
                    <h1 class="page-title">
                        <span class="accent-text glow-text">Portfolyomuz</span>
                    </h1>
                    <p class="page-description">
                        Çeşitli sektörlerden müşterilerimiz için geliştirdiğimiz başarılı projeler
                    </p>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('site.home') }}">Anasayfa</a></li>
                            <li class="breadcrumb-item active">Portfolyo</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section class="portfolio-page section-padding">
        <div class="container">
            <!-- Category Filters -->
            <div class="portfolio-filters text-center mb-5" data-aos="fade-up">
                <button class="filter-btn {{ !$currentCategory ? 'active' : '' }}"
                        onclick="window.location='{{ route('site.portfolio') }}'">Tümü</button>
                @foreach($categories as $category)
                    <button class="filter-btn {{ $currentCategory === $category->slug ? 'active' : '' }}"
                            onclick="window.location='{{ route('site.portfolio') }}?kategori={{ $category->slug }}'">
                        {{ $category->name }}
                    </button>
                @endforeach
            </div>

            <!-- Portfolio Grid -->
            <div class="row g-4 portfolio-grid">
                @forelse($portfolios as $i => $portfolio)
                <div class="col-lg-4 col-md-6 portfolio-item" data-category="{{ $portfolio->category?->slug }}"
                     data-aos="fade-up" data-aos-delay="{{ ($i % 3) * 100 }}">
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
                @empty
                    <div class="col-12 text-center text-muted py-5">
                        <i class="fas fa-folder-open fa-3x mb-3 opacity-25"></i>
                        <p>Bu kategoride henüz proje eklenmemiş.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
@endsection
