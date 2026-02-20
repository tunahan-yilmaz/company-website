{{-- Blog Page --}}
@extends('site.layouts.app')

@section('title', 'Blog - DBS Software')
@section('meta_description', 'DBS Software Blog - Teknoloji ve dijital dünya hakkında güncel içerikler.')

@section('content')
    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center" data-aos="fade-up">
                    <h1 class="page-title">
                        <span class="accent-text glow-text">Blog</span>
                    </h1>
                    <p class="page-description">
                        Teknoloji ve dijital dünya hakkında güncel içerikler
                    </p>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('site.home') }}">Anasayfa</a></li>
                            <li class="breadcrumb-item active">Blog</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <section class="blog-section section-padding">
        <div class="container">
            <div class="row g-4">
                <!-- Blog Post 1 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <article class="blog-card glass-effect h-100">
                        <div class="blog-img">
                            <img src="https://images.unsplash.com/photo-1677442136019-21780ecad995?w=600&q=80" alt="AI ve Yazılım" class="img-fluid">
                            <div class="blog-date">
                                <span class="day">15</span>
                                <span class="month">Kas</span>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span><i class="fas fa-user"></i> Admin</span>
                                <span><i class="fas fa-folder"></i> Teknoloji</span>
                            </div>
                            <h3 class="blog-title">
                                <a href="{{ route('site.blog.detail', 'yapay-zeka-yazilim-gelistirme') }}">Yapay Zeka ve Yazılım Geliştirmenin Geleceği</a>
                            </h3>
                            <p class="blog-excerpt">
                                AI teknolojilerinin yazılım geliştirme süreçlerine etkisi ve gelecekte bizi bekleyen yenilikler...
                            </p>
                            <a href="{{ route('site.blog.detail', 'yapay-zeka-yazilim-gelistirme') }}" class="blog-link">
                                Devamını Oku <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </article>
                </div>

                <!-- Blog Post 2 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <article class="blog-card glass-effect h-100">
                        <div class="blog-img">
                            <img src="https://images.unsplash.com/photo-1633356122544-f134324a6cee?w=600&q=80" alt="Dijital Pazarlama" class="img-fluid">
                            <div class="blog-date">
                                <span class="day">10</span>
                                <span class="month">Kas</span>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span><i class="fas fa-user"></i> Admin</span>
                                <span><i class="fas fa-folder"></i> Pazarlama</span>
                            </div>
                            <h3 class="blog-title">
                                <a href="{{ route('site.blog.detail', 'dijital-pazarlama-trendleri') }}">2024'te Dijital Pazarlama Trendleri</a>
                            </h3>
                            <p class="blog-excerpt">
                                Dijital pazarlamanın geleceğini şekillendirecek en önemli trendler ve stratejiler...
                            </p>
                            <a href="{{ route('site.blog.detail', 'dijital-pazarlama-trendleri') }}" class="blog-link">
                                Devamını Oku <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </article>
                </div>

                <!-- Blog Post 3 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <article class="blog-card glass-effect h-100">
                        <div class="blog-img">
                            <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?w=600&q=80" alt="Mobil Uygulamalar" class="img-fluid">
                            <div class="blog-date">
                                <span class="day">05</span>
                                <span class="month">Kas</span>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span><i class="fas fa-user"></i> Admin</span>
                                <span><i class="fas fa-folder"></i> Mobil</span>
                            </div>
                            <h3 class="blog-title">
                                <a href="{{ route('site.blog.detail', 'mobil-uygulama-gelistirme') }}">Başarılı Mobil Uygulama Geliştirme İpuçları</a>
                            </h3>
                            <p class="blog-excerpt">
                                Kullanıcı dostu ve başarılı mobil uygulamalar geliştirmek için bilmeniz gerekenler...
                            </p>
                            <a href="{{ route('site.blog.detail', 'mobil-uygulama-gelistirme') }}" class="blog-link">
                                Devamını Oku <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </article>
                </div>

                <!-- Blog Post 4 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up">
                    <article class="blog-card glass-effect h-100">
                        <div class="blog-img">
                            <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?w=600&q=80" alt="Cloud Computing" class="img-fluid">
                            <div class="blog-date">
                                <span class="day">01</span>
                                <span class="month">Kas</span>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span><i class="fas fa-user"></i> Admin</span>
                                <span><i class="fas fa-folder"></i> Cloud</span>
                            </div>
                            <h3 class="blog-title">
                                <a href="{{ route('site.blog.detail', 'cloud-computing-avantajlari') }}">Cloud Computing'in İşletmelere Sağladığı Avantajlar</a>
                            </h3>
                            <p class="blog-excerpt">
                                Bulut bilişimin işletmenize sağlayacağı faydalar ve maliyet optimizasyonu...
                            </p>
                            <a href="{{ route('site.blog.detail', 'cloud-computing-avantajlari') }}" class="blog-link">
                                Devamını Oku <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </article>
                </div>

                <!-- Blog Post 5 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <article class="blog-card glass-effect h-100">
                        <div class="blog-img">
                            <img src="https://images.unsplash.com/photo-1561070791-2526d30994b5?w=600&q=80" alt="UI/UX Tasarım" class="img-fluid">
                            <div class="blog-date">
                                <span class="day">28</span>
                                <span class="month">Eki</span>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span><i class="fas fa-user"></i> Admin</span>
                                <span><i class="fas fa-folder"></i> Tasarım</span>
                            </div>
                            <h3 class="blog-title">
                                <a href="{{ route('site.blog.detail', 'ui-ux-tasarim-trendleri') }}">2024 UI/UX Tasarım Trendleri</a>
                            </h3>
                            <p class="blog-excerpt">
                                Bu yıl takip etmeniz gereken kullanıcı arayüzü ve deneyimi tasarım trendleri...
                            </p>
                            <a href="{{ route('site.blog.detail', 'ui-ux-tasarim-trendleri') }}" class="blog-link">
                                Devamını Oku <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </article>
                </div>

                <!-- Blog Post 6 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <article class="blog-card glass-effect h-100">
                        <div class="blog-img">
                            <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=600&q=80" alt="E-Ticaret" class="img-fluid">
                            <div class="blog-date">
                                <span class="day">22</span>
                                <span class="month">Eki</span>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span><i class="fas fa-user"></i> Admin</span>
                                <span><i class="fas fa-folder"></i> E-Ticaret</span>
                            </div>
                            <h3 class="blog-title">
                                <a href="{{ route('site.blog.detail', 'eticaret-basari-stratejileri') }}">E-Ticaret Başarı Stratejileri</a>
                            </h3>
                            <p class="blog-excerpt">
                                Online satışlarınızı artırmak için uygulayabileceğiniz etkili e-ticaret stratejileri...
                            </p>
                            <a href="{{ route('site.blog.detail', 'eticaret-basari-stratejileri') }}" class="blog-link">
                                Devamını Oku <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
@endsection
