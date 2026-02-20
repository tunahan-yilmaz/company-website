{{-- Portfolio Page --}}
@extends('site.layouts.app')

@section('title', 'Portfolyo - DBS Software')
@section('meta_description', 'DBS Software Portfolyo - Başarılı projelerimiz ve çalışmalarımız.')

@section('content')
    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center" data-aos="fade-up">
                    <h1 class="page-title">
                        <span class="accent-text glow-text">Portfolyo</span>
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
    <section class="portfolio-section section-padding">
        <div class="container">
            <!-- Portfolio Filters -->
            <div class="portfolio-filters text-center mb-5" data-aos="fade-up">
                <button class="filter-btn active" data-filter="all">Tümü</button>
                <button class="filter-btn" data-filter="software">Yazılım</button>
                <button class="filter-btn" data-filter="advertising">Reklam</button>
                <button class="filter-btn" data-filter="mobile">Mobil</button>
                <button class="filter-btn" data-filter="design">Tasarım</button>
            </div>

            <!-- Portfolio Grid -->
            <div class="row g-4 portfolio-grid">
                <div class="col-lg-4 col-md-6 portfolio-item" data-category="software" data-aos="fade-up">
                    <div class="portfolio-card glass-effect">
                        <div class="portfolio-img">
                            <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=600&q=80" alt="E-Ticaret Platformu" class="img-fluid">
                            <div class="portfolio-overlay">
                                <div class="portfolio-details">
                                    <h3 class="portfolio-title">E-Ticaret Platformu</h3>
                                    <p class="portfolio-description">Modern ve ölçeklenebilir e-ticaret çözümü</p>
                                    <div class="portfolio-tags">
                                        <span class="tag">React</span>
                                        <span class="tag">Node.js</span>
                                        <span class="tag">MongoDB</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-category">Yazılım</div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item" data-category="advertising" data-aos="fade-up" data-aos-delay="100">
                    <div class="portfolio-card glass-effect">
                        <div class="portfolio-img">
                            <img src="https://images.unsplash.com/photo-1533750349088-cd871a92f312?w=600&q=80" alt="Lüks Marka Kampanyası" class="img-fluid">
                            <div class="portfolio-overlay">
                                <div class="portfolio-details">
                                    <h3 class="portfolio-title">Lüks Marka Kampanyası</h3>
                                    <p class="portfolio-description">360° dijital pazarlama stratejisi</p>
                                    <div class="portfolio-tags">
                                        <span class="tag">Branding</span>
                                        <span class="tag">Social Media</span>
                                        <span class="tag">SEO</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-category">Reklam</div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item" data-category="mobile" data-aos="fade-up" data-aos-delay="200">
                    <div class="portfolio-card glass-effect">
                        <div class="portfolio-img">
                            <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?w=600&q=80" alt="Finans Uygulaması" class="img-fluid">
                            <div class="portfolio-overlay">
                                <div class="portfolio-details">
                                    <h3 class="portfolio-title">Mobil Finans Uygulaması</h3>
                                    <p class="portfolio-description">Güvenli ve kullanıcı dostu fintech çözümü</p>
                                    <div class="portfolio-tags">
                                        <span class="tag">Flutter</span>
                                        <span class="tag">Firebase</span>
                                        <span class="tag">Blockchain</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-category">Mobil</div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item" data-category="software" data-aos="fade-up">
                    <div class="portfolio-card glass-effect">
                        <div class="portfolio-img">
                            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=600&q=80" alt="CRM Sistemi" class="img-fluid">
                            <div class="portfolio-overlay">
                                <div class="portfolio-details">
                                    <h3 class="portfolio-title">Kurumsal CRM Sistemi</h3>
                                    <p class="portfolio-description">AI destekli müşteri yönetim platformu</p>
                                    <div class="portfolio-tags">
                                        <span class="tag">Python</span>
                                        <span class="tag">Django</span>
                                        <span class="tag">AI/ML</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-category">Yazılım</div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item" data-category="design" data-aos="fade-up" data-aos-delay="100">
                    <div class="portfolio-card glass-effect">
                        <div class="portfolio-img">
                            <img src="https://images.unsplash.com/photo-1561070791-2526d30994b5?w=600&q=80" alt="Kurumsal Kimlik" class="img-fluid">
                            <div class="portfolio-overlay">
                                <div class="portfolio-details">
                                    <h3 class="portfolio-title">Kurumsal Kimlik Tasarımı</h3>
                                    <p class="portfolio-description">Marka yenileme ve görsel kimlik projesi</p>
                                    <div class="portfolio-tags">
                                        <span class="tag">Branding</span>
                                        <span class="tag">UI/UX</span>
                                        <span class="tag">Print</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-category">Tasarım</div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item" data-category="advertising" data-aos="fade-up" data-aos-delay="200">
                    <div class="portfolio-card glass-effect">
                        <div class="portfolio-img">
                            <img src="https://images.unsplash.com/photo-1557804506-669a67965ba0?w=600&q=80" alt="Sosyal Medya" class="img-fluid">
                            <div class="portfolio-overlay">
                                <div class="portfolio-details">
                                    <h3 class="portfolio-title">Sosyal Medya Yönetimi</h3>
                                    <p class="portfolio-description">Çok kanallı dijital pazarlama kampanyası</p>
                                    <div class="portfolio-tags">
                                        <span class="tag">Content</span>
                                        <span class="tag">Influencer</span>
                                        <span class="tag">Analytics</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-category">Reklam</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section section-padding bg-dark-alt">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8" data-aos="fade-right">
                    <h2 class="section-title mb-3">
                        Sizin Projenizi de <span class="accent-text">Hayata Geçirelim</span>
                    </h2>
                    <p class="lead mb-0">
                        Deneyimli ekibimizle hayalinizdeki dijital projeyi birlikte gerçeğe dönüştürelim.
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end mt-4 mt-lg-0" data-aos="fade-left">
                    <a href="{{ route('site.contact') }}" class="btn btn-primary-custom btn-lg">
                        <span>Proje Talebi</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
