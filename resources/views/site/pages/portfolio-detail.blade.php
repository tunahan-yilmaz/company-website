{{-- Portfolio Detail Page --}}
@extends('site.layouts.app')

@section('title', 'Proje Detay - DBS Software')
@section('meta_description', 'DBS Software proje detay sayfası.')

@section('content')
    <!-- Page Header -->
    <section class="page-header page-header-small">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center" data-aos="fade-up">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('site.home') }}">Anasayfa</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('site.portfolio') }}">Portfolyo</a></li>
                            <li class="breadcrumb-item active">Proje Detayı</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Detail Section -->
    <section class="portfolio-detail-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8" data-aos="fade-right">
                    <div class="portfolio-detail-main glass-effect">
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=1200&q=80" alt="Proje Görseli" class="img-fluid rounded mb-4">
                        
                        <h1 class="portfolio-detail-title">E-Ticaret Platformu</h1>
                        
                        <div class="portfolio-detail-content">
                            <h3>Proje Hakkında</h3>
                            <p>
                                Modern ve ölçeklenebilir bir e-ticaret platformu geliştirdik. Bu platform, yüksek trafikli 
                                satış dönemlerinde bile kesintisiz performans sunuyor ve kullanıcı dostu arayüzü ile 
                                dönüşüm oranlarını artırıyor.
                            </p>
                            
                            <h3>Çözüm</h3>
                            <p>
                                React ve Node.js kullanarak microservice mimarisi ile geliştirdiğimiz platform, 
                                MongoDB veritabanı ile esnek veri yönetimi sağlıyor. Redis cache yapısı ile 
                                performans optimize edildi.
                            </p>
                            
                            <h3>Sonuçlar</h3>
                            <ul>
                                <li>%40 daha hızlı sayfa yükleme süreleri</li>
                                <li>%25 artış dönüşüm oranlarında</li>
                                <li>%99.9 uptime garantisi</li>
                                <li>200.000+ aylık aktif kullanıcı</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4" data-aos="fade-left">
                    <div class="portfolio-detail-sidebar glass-effect">
                        <h4>Proje Bilgileri</h4>
                        
                        <div class="sidebar-item">
                            <span class="sidebar-label">Müşteri:</span>
                            <span class="sidebar-value">Premium Corp</span>
                        </div>
                        
                        <div class="sidebar-item">
                            <span class="sidebar-label">Kategori:</span>
                            <span class="sidebar-value">Yazılım Geliştirme</span>
                        </div>
                        
                        <div class="sidebar-item">
                            <span class="sidebar-label">Tarih:</span>
                            <span class="sidebar-value">Ocak 2024</span>
                        </div>
                        
                        <div class="sidebar-item">
                            <span class="sidebar-label">Süre:</span>
                            <span class="sidebar-value">4 Ay</span>
                        </div>
                        
                        <h4 class="mt-4">Kullanılan Teknolojiler</h4>
                        <div class="tech-badges">
                            <span class="tech-badge">React</span>
                            <span class="tech-badge">Node.js</span>
                            <span class="tech-badge">MongoDB</span>
                            <span class="tech-badge">Redis</span>
                            <span class="tech-badge">Docker</span>
                            <span class="tech-badge">AWS</span>
                        </div>
                        
                        <a href="{{ route('site.contact') }}" class="btn btn-primary-custom w-100 mt-4">
                            <span>Benzer Proje Talebi</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Projects -->
    <section class="related-projects section-padding bg-dark-alt">
        <div class="container">
            <div class="section-header text-center mb-5" data-aos="fade-up">
                <h2 class="section-title">
                    Benzer <span class="accent-text">Projeler</span>
                </h2>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="portfolio-card glass-effect">
                        <div class="portfolio-img">
                            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=600&q=80" alt="CRM Sistemi" class="img-fluid">
                        </div>
                        <div class="portfolio-category">Yazılım</div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="portfolio-card glass-effect">
                        <div class="portfolio-img">
                            <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?w=600&q=80" alt="Mobil Uygulama" class="img-fluid">
                        </div>
                        <div class="portfolio-category">Mobil</div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="portfolio-card glass-effect">
                        <div class="portfolio-img">
                            <img src="https://images.unsplash.com/photo-1561070791-2526d30994b5?w=600&q=80" alt="Tasarım Projesi" class="img-fluid">
                        </div>
                        <div class="portfolio-category">Tasarım</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
