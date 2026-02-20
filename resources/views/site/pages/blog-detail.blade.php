{{-- Blog Detail Page --}}
@extends('site.layouts.app')

@section('title', 'Blog Detay - DBS Software')
@section('meta_description', 'DBS Software Blog yazısı detay sayfası.')

@section('content')
    <!-- Page Header -->
    <section class="page-header page-header-small">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center" data-aos="fade-up">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('site.home') }}">Anasayfa</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('site.blog') }}">Blog</a></li>
                            <li class="breadcrumb-item active">Yazı Detayı</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Detail Section -->
    <section class="blog-detail-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <article class="blog-detail-card glass-effect" data-aos="fade-up">
                        <div class="blog-detail-img">
                            <img src="https://images.unsplash.com/photo-1677442136019-21780ecad995?w=1200&q=80" alt="Blog Yazısı" class="img-fluid rounded">
                        </div>
                        
                        <div class="blog-detail-content">
                            <div class="blog-detail-meta">
                                <span><i class="fas fa-calendar"></i> 15 Kasım 2024</span>
                                <span><i class="fas fa-user"></i> Admin</span>
                                <span><i class="fas fa-folder"></i> Teknoloji</span>
                            </div>
                            
                            <h1 class="blog-detail-title">Yapay Zeka ve Yazılım Geliştirmenin Geleceği</h1>
                            
                            <div class="blog-detail-body">
                                <p class="lead">
                                    Yapay zeka teknolojileri, yazılım geliştirme süreçlerini kökten değiştiriyor. 
                                    GitHub Copilot'tan GPT-4'e kadar, AI araçları geliştiricilerin iş yapma şeklini yeniden tanımlıyor.
                                </p>
                                
                                <h2>AI'ın Kod Yazımına Etkisi</h2>
                                <p>
                                    Modern AI araçları, geliştiricilerin daha hızlı ve verimli kod yazmasına yardımcı oluyor. 
                                    Ancak bu, insan geliştiricilerin yerini alacağı anlamına gelmiyor - aksine, onların 
                                    yeteneklerini güçlendiriyor.
                                </p>
                                
                                <h2>Gelecekte Bizi Neler Bekliyor?</h2>
                                <p>
                                    Uzmanlar, önümüzdeki 5 yıl içinde AI destekli geliştirme araçlarının standart hale geleceğini 
                                    öngörüyor. Bu durum, yazılım projelerinin daha hızlı ve daha az hata ile tamamlanmasını sağlayacak.
                                </p>
                                
                                <blockquote class="glass-effect">
                                    <p>"Yapay zeka, yazılım geliştirmeyi demokratikleştiriyor. Artık herkes kod yazabilir."</p>
                                    <cite>- Tech Industry Expert</cite>
                                </blockquote>
                                
                                <h2>Sonuç</h2>
                                <p>
                                    AI teknolojileri hızla gelişmeye devam ederken, yazılım geliştiricilerin de bu değişime 
                                    uyum sağlaması gerekiyor. DBS Software olarak, en son AI teknolojilerini projelerimizde 
                                    aktif olarak kullanıyoruz.
                                </p>
                            </div>
                            
                            <!-- Tags -->
                            <div class="blog-tags mt-4">
                                <span class="tag-label">Etiketler:</span>
                                <span class="tag">Yapay Zeka</span>
                                <span class="tag">Yazılım</span>
                                <span class="tag">Teknoloji</span>
                                <span class="tag">AI</span>
                            </div>
                            
                            <!-- Share -->
                            <div class="blog-share mt-4">
                                <span class="share-label">Paylaş:</span>
                                <div class="share-links">
                                    <a href="#" class="share-link"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#" class="share-link"><i class="fab fa-twitter"></i></a>
                                    <a href="#" class="share-link"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#" class="share-link"><i class="fab fa-whatsapp"></i></a>
                                </div>
                            </div>
                        </div>
                    </article>
                    
                    <!-- Related Posts -->
                    <div class="related-posts mt-5" data-aos="fade-up">
                        <h3 class="section-title mb-4">İlgili Yazılar</h3>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <article class="blog-card glass-effect h-100">
                                    <div class="blog-img">
                                        <img src="https://images.unsplash.com/photo-1633356122544-f134324a6cee?w=600&q=80" alt="İlgili Yazı" class="img-fluid">
                                    </div>
                                    <div class="blog-content">
                                        <h4 class="blog-title">
                                            <a href="{{ route('site.blog.detail', 'dijital-pazarlama-trendleri') }}">2024'te Dijital Pazarlama Trendleri</a>
                                        </h4>
                                        <a href="{{ route('site.blog.detail', 'dijital-pazarlama-trendleri') }}" class="blog-link">
                                            Devamını Oku <i class="fas fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </article>
                            </div>
                            <div class="col-md-6">
                                <article class="blog-card glass-effect h-100">
                                    <div class="blog-img">
                                        <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?w=600&q=80" alt="İlgili Yazı" class="img-fluid">
                                    </div>
                                    <div class="blog-content">
                                        <h4 class="blog-title">
                                            <a href="{{ route('site.blog.detail', 'mobil-uygulama-gelistirme') }}">Başarılı Mobil Uygulama Geliştirme İpuçları</a>
                                        </h4>
                                        <a href="{{ route('site.blog.detail', 'mobil-uygulama-gelistirme') }}" class="blog-link">
                                            Devamını Oku <i class="fas fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
