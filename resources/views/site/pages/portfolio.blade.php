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
                            <li class="breadcrumb-item"><a href="index.html">Anasayfa</a></li>
                            <li class="breadcrumb-item active">Portfolyo</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Statistics -->
    <section class="portfolio-stats section-padding">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="stat-card glass-effect text-center">
                        <div class="stat-icon">
                            <i class="fas fa-briefcase"></i>
                        </div>
                        <div class="stat-number accent-text" data-target="150">0</div>
                        <div class="stat-label">Tamamlanan Proje</div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="stat-card glass-effect text-center">
                        <div class="stat-icon">
                            <i class="fas fa-industry"></i>
                        </div>
                        <div class="stat-number accent-text" data-target="25">0</div>
                        <div class="stat-label">Farklı Sektör</div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="stat-card glass-effect text-center">
                        <div class="stat-icon">
                            <i class="fas fa-globe-americas"></i>
                        </div>
                        <div class="stat-number accent-text" data-target="8">0</div>
                        <div class="stat-label">Ülke</div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="stat-card glass-effect text-center">
                        <div class="stat-icon">
                            <i class="fas fa-trophy"></i>
                        </div>
                        <div class="stat-number accent-text" data-target="12">0</div>
                        <div class="stat-label">Ödül</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Filters -->
    <section class="portfolio-section section-padding bg-dark-alt">
        <div class="container">
            <!-- Filters -->
            <div class="portfolio-filters text-center mb-5" data-aos="fade-up">
                <button class="filter-btn active" data-filter="all">Tümü</button>
                <button class="filter-btn" data-filter="software">Yazılım</button>
                <button class="filter-btn" data-filter="advertising">Reklam</button>
                <button class="filter-btn" data-filter="mobile">Mobil</button>
                <button class="filter-btn" data-filter="design">Tasarım</button>
            </div>

            <!-- Portfolio Grid -->
            <div class="row g-4 portfolio-grid">
                <!-- Project 1 -->
                <div class="col-lg-4 col-md-6 portfolio-item" data-category="software" data-aos="fade-up" data-aos-delay="100">
                    <div class="portfolio-card glass-effect">
                        <div class="portfolio-img">
                            <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=600&q=80" alt="E-Ticaret Platformu" class="img-fluid">
                            <div class="portfolio-overlay">
                                <div class="portfolio-details">
                                    <h3 class="portfolio-title">E-Ticaret Platformu</h3>
                                    <p class="portfolio-description">Modern ve ölçeklenebilir B2C e-ticaret çözümü</p>
                                    <div class="portfolio-tags">
                                        <span class="tag">React</span>
                                        <span class="tag">Node.js</span>
                                        <span class="tag">MongoDB</span>
                                    </div>
                                    <a href="{{ route('site.portfolio.detail') }}" class="portfolio-btn">
                                        Detaylar <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-category">Yazılım</div>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="col-lg-4 col-md-6 portfolio-item" data-category="advertising" data-aos="fade-up" data-aos-delay="200">
                    <div class="portfolio-card glass-effect">
                        <div class="portfolio-img">
                            <img src="https://images.unsplash.com/photo-1533750349088-cd871a92f312?w=600&q=80" alt="Lüks Marka Kampanyası" class="img-fluid">
                            <div class="portfolio-overlay">
                                <div class="portfolio-details">
                                    <h3 class="portfolio-title">Lüks Marka Kampanyası</h3>
                                    <p class="portfolio-description">360° dijital pazarlama ve marka konumlandırma</p>
                                    <div class="portfolio-tags">
                                        <span class="tag">Branding</span>
                                        <span class="tag">Social Media</span>
                                        <span class="tag">SEO</span>
                                    </div>
                                    <a href="portfolio-detail.html?id=2" class="portfolio-btn">
                                        Detaylar <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-category">Reklam</div>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="col-lg-4 col-md-6 portfolio-item" data-category="mobile" data-aos="fade-up" data-aos-delay="300">
                    <div class="portfolio-card glass-effect">
                        <div class="portfolio-img">
                            <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?w=600&q=80" alt="Finans Uygulaması" class="img-fluid">
                            <div class="portfolio-overlay">
                                <div class="portfolio-details">
                                    <h3 class="portfolio-title">Mobil Finans Uygulaması</h3>
                                    <p class="portfolio-description">Güvenli blockchain tabanlı fintech çözümü</p>
                                    <div class="portfolio-tags">
                                        <span class="tag">Flutter</span>
                                        <span class="tag">Firebase</span>
                                        <span class="tag">Blockchain</span>
                                    </div>
                                    <a href="portfolio-detail.html?id=3" class="portfolio-btn">
                                        Detaylar <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-category">Mobil</div>
                    </div>
                </div>

                <!-- Project 4 -->
                <div class="col-lg-4 col-md-6 portfolio-item" data-category="software" data-aos="fade-up" data-aos-delay="100">
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
                                    <a href="portfolio-detail.html?id=4" class="portfolio-btn">
                                        Detaylar <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-category">Yazılım</div>
                    </div>
                </div>

                <!-- Project 5 -->
                <div class="col-lg-4 col-md-6 portfolio-item" data-category="design" data-aos="fade-up" data-aos-delay="200">
                    <div class="portfolio-card glass-effect">
                        <div class="portfolio-img">
                            <img src="https://images.unsplash.com/photo-1561070791-2526d30994b5?w=600&q=80" alt="Kurumsal Kimlik" class="img-fluid">
                            <div class="portfolio-overlay">
                                <div class="portfolio-details">
                                    <h3 class="portfolio-title">Kurumsal Kimlik Tasarımı</h3>
                                    <p class="portfolio-description">Complete rebranding ve görsel kimlik projesi</p>
                                    <div class="portfolio-tags">
                                        <span class="tag">Branding</span>
                                        <span class="tag">UI/UX</span>
                                        <span class="tag">Print</span>
                                    </div>
                                    <a href="portfolio-detail.html?id=5" class="portfolio-btn">
                                        Detaylar <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-category">Tasarım</div>
                    </div>
                </div>

                <!-- Project 6 -->
                <div class="col-lg-4 col-md-6 portfolio-item" data-category="advertising" data-aos="fade-up" data-aos-delay="300">
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
                                    <a href="portfolio-detail.html?id=6" class="portfolio-btn">
                                        Detaylar <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-category">Reklam</div>
                    </div>
                </div>

                <!-- Project 7 -->
                <div class="col-lg-4 col-md-6 portfolio-item" data-category="software" data-aos="fade-up" data-aos-delay="100">
                    <div class="portfolio-card glass-effect">
                        <div class="portfolio-img">
                            <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=600&q=80" alt="SaaS Platform" class="img-fluid">
                            <div class="portfolio-overlay">
                                <div class="portfolio-details">
                                    <h3 class="portfolio-title">SaaS Platformu</h3>
                                    <p class="portfolio-description">Multi-tenant B2B SaaS çözümü</p>
                                    <div class="portfolio-tags">
                                        <span class="tag">Vue.js</span>
                                        <span class="tag">Laravel</span>
                                        <span class="tag">AWS</span>
                                    </div>
                                    <a href="portfolio-detail.html?id=7" class="portfolio-btn">
                                        Detaylar <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-category">Yazılım</div>
                    </div>
                </div>

                <!-- Project 8 -->
                <div class="col-lg-4 col-md-6 portfolio-item" data-category="mobile" data-aos="fade-up" data-aos-delay="200">
                    <div class="portfolio-card glass-effect">
                        <div class="portfolio-img">
                            <img src="https://images.unsplash.com/photo-1512428559087-560fa5ceab42?w=600&q=80" alt="Sağlık Uygulaması" class="img-fluid">
                            <div class="portfolio-overlay">
                                <div class="portfolio-details">
                                    <h3 class="portfolio-title">Sağlık & Fitness Uygulaması</h3>
                                    <p class="portfolio-description">AI destekli kişisel sağlık asistanı</p>
                                    <div class="portfolio-tags">
                                        <span class="tag">React Native</span>
                                        <span class="tag">AI</span>
                                        <span class="tag">HealthKit</span>
                                    </div>
                                    <a href="portfolio-detail.html?id=8" class="portfolio-btn">
                                        Detaylar <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-category">Mobil</div>
                    </div>
                </div>

                <!-- Project 9 -->
                <div class="col-lg-4 col-md-6 portfolio-item" data-category="design" data-aos="fade-up" data-aos-delay="300">
                    <div class="portfolio-card glass-effect">
                        <div class="portfolio-img">
                            <img src="https://images.unsplash.com/photo-1558655146-9f40138edfeb?w=600&q=80" alt="Web Tasarım" class="img-fluid">
                            <div class="portfolio-overlay">
                                <div class="portfolio-details">
                                    <h3 class="portfolio-title">Premium Web Tasarımı</h3>
                                    <p class="portfolio-description">Lüks otel için kurumsal web sitesi</p>
                                    <div class="portfolio-tags">
                                        <span class="tag">Figma</span>
                                        <span class="tag">UI/UX</span>
                                        <span class="tag">Responsive</span>
                                    </div>
                                    <a href="portfolio-detail.html?id=9" class="portfolio-btn">
                                        Detaylar <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-category">Tasarım</div>
                    </div>
                </div>

                <!-- Project 10 -->
                <div class="col-lg-4 col-md-6 portfolio-item" data-category="software" data-aos="fade-up" data-aos-delay="100">
                    <div class="portfolio-card glass-effect">
                        <div class="portfolio-img">
                            <img src="https://images.unsplash.com/photo-1563986768609-322da13575f3?w=600&q=80" alt="Lojistik Sistemi" class="img-fluid">
                            <div class="portfolio-overlay">
                                <div class="portfolio-details">
                                    <h3 class="portfolio-title">Lojistik Yönetim Sistemi</h3>
                                    <p class="portfolio-description">Gerçek zamanlı kargo takip platformu</p>
                                    <div class="portfolio-tags">
                                        <span class="tag">Angular</span>
                                        <span class="tag">.NET</span>
                                        <span class="tag">SQL</span>
                                    </div>
                                    <a href="portfolio-detail.html?id=10" class="portfolio-btn">
                                        Detaylar <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-category">Yazılım</div>
                    </div>
                </div>

                <!-- Project 11 -->
                <div class="col-lg-4 col-md-6 portfolio-item" data-category="advertising" data-aos="fade-up" data-aos-delay="200">
                    <div class="portfolio-card glass-effect">
                        <div class="portfolio-img">
                            <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?w=600&q=80" alt="Google Ads" class="img-fluid">
                            <div class="portfolio-overlay">
                                <div class="portfolio-details">
                                    <h3 class="portfolio-title">Google Ads Kampanyası</h3>
                                    <p class="portfolio-description">E-ticaret için ROI odaklı reklam yönetimi</p>
                                    <div class="portfolio-tags">
                                        <span class="tag">Google Ads</span>
                                        <span class="tag">Analytics</span>
                                        <span class="tag">Conversion</span>
                                    </div>
                                    <a href="portfolio-detail.html?id=11" class="portfolio-btn">
                                        Detaylar <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-category">Reklam</div>
                    </div>
                </div>

                <!-- Project 12 -->
                <div class="col-lg-4 col-md-6 portfolio-item" data-category="mobile" data-aos="fade-up" data-aos-delay="300">
                    <div class="portfolio-card glass-effect">
                        <div class="portfolio-img">
                            <img src="https://images.unsplash.com/photo-1551650975-87deedd944c3?w=600&q=80" alt="Restoran App" class="img-fluid">
                            <div class="portfolio-overlay">
                                <div class="portfolio-details">
                                    <h3 class="portfolio-title">Restoran Sipariş Uygulaması</h3>
                                    <p class="portfolio-description">QR kod menü ve sipariş yönetim sistemi</p>
                                    <div class="portfolio-tags">
                                        <span class="tag">Flutter</span>
                                        <span class="tag">Firebase</span>
                                        <span class="tag">Payment</span>
                                    </div>
                                    <a href="portfolio-detail.html?id=12" class="portfolio-btn">
                                        Detaylar <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-category">Mobil</div>
                    </div>
                </div>
            </div>

            <!-- Load More Button -->
            <div class="text-center mt-5" data-aos="fade-up">
                <button class="btn btn-outline-custom btn-lg" id="loadMoreBtn">
                    <span>Daha Fazla Yükle</span>
                    <i class="fas fa-arrow-down"></i>
                </button>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8" data-aos="fade-right">
                    <h2 class="section-title mb-3">
                        Sıradaki Proje <span class="accent-text">Sizinki Olsun</span>
                    </h2>
                    <p class="lead mb-0">
                        Başarılı projeler portföyümüze sizin projenizi de eklemek isteriz. Hemen görüşelim!
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end mt-4 mt-lg-0" data-aos="fade-left">
                    <a href="contact.html" class="btn btn-primary-custom btn-lg">
                        <span>Proje Başlat</span>
                        <i class="fas fa-rocket"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
