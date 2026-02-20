{{-- Home Page --}}
@extends('site.layouts.app')

@section('title', 'DBS Software - Premium Yazılım & Dijital Çözümler Anasayfa')
@section('meta_description', 'DBS Software - Premium Yazılım ve Dijital Çözümler. 10+ yıllık deneyim ile işletmenize değer katıyoruz.')

@section('content')
    <!-- Hero Slider -->
    <section class="hero-slider" id="heroSlider">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
            </div>

            <div class="carousel-inner">
                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <div class="hero-slide-bg"
                         style="background-image: url('https://images.unsplash.com/photo-1451187580459-43490279c0fa?w=1920&q=80');">
                        <div class="hero-overlay"></div>
                    </div>
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-lg-8" data-aos="fade-right">
                                <div class="hero-content glass-effect">
                                    <h1 class="hero-title">
                                        <span class="title-line">Geleceği</span>
                                        <span class="title-line accent-text glow-text">Kodluyoruz</span>
                                    </h1>
                                    <p class="hero-subtitle">10+ yıllık deneyim ile premium yazılım çözümleri ve dijital
                                        dönüşüm partneri</p>
                                    <div class="hero-buttons">
                                        <a href="portfolio.html" class="btn btn-primary-custom btn-lg">
                                            <span>Projelerimiz</span>
                                            <i class="fas fa-arrow-right"></i>
                                        </a>
                                        <a href="contact.html" class="btn btn-outline-custom btn-lg">
                                            <span>İletişime Geç</span>
                                            <i class="fas fa-paper-plane"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide-number">01</div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item">
                    <div class="hero-slide-bg"
                         style="background-image: url('https://images.unsplash.com/photo-1519389950473-47ba0277781c?w=1920&q=80');">
                        <div class="hero-overlay"></div>
                    </div>
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-lg-8" data-aos="fade-right">
                                <div class="hero-content glass-effect">
                                    <h1 class="hero-title">
                                        <span class="title-line">Dijital</span>
                                        <span class="title-line accent-text glow-text">Mükemmellik</span>
                                    </h1>
                                    <p class="hero-subtitle">İşinizi zirveye taşıyan teknoloji çözümleri ve yaratıcı
                                        stratejiler</p>
                                    <div class="hero-buttons">
                                        <a href="services.html" class="btn btn-primary-custom btn-lg">
                                            <span>Hizmetlerimiz</span>
                                            <i class="fas fa-arrow-right"></i>
                                        </a>
                                        <a href="about.html" class="btn btn-outline-custom btn-lg">
                                            <span>Bizi Keşfedin</span>
                                            <i class="fas fa-compass"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide-number">02</div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item">
                    <div class="hero-slide-bg"
                         style="background-image: url('https://images.unsplash.com/photo-1504384308090-c894fdcc538d?w=1920&q=80');">
                        <div class="hero-overlay"></div>
                    </div>
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-lg-8" data-aos="fade-right">
                                <div class="hero-content glass-effect">
                                    <h1 class="hero-title">
                                        <span class="title-line">İnovasyon</span>
                                        <span class="title-line accent-text glow-text">& Yaratıcılık</span>
                                    </h1>
                                    <p class="hero-subtitle">Markanıza değer katan reklam ve yazılım çözümleri ile fark
                                        yaratın</p>
                                    <div class="hero-buttons">
                                        <a href="portfolio.html" class="btn btn-primary-custom btn-lg">
                                            <span>Portföyümüz</span>
                                            <i class="fas fa-arrow-right"></i>
                                        </a>
                                        <a href="contact.html" class="btn btn-outline-custom btn-lg">
                                            <span>Teklif Alın</span>
                                            <i class="fas fa-file-invoice"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide-number">03</div>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                <span class="carousel-control-icon"><i class="fas fa-chevron-left"></i></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                <span class="carousel-control-icon"><i class="fas fa-chevron-right"></i></span>
            </button>
        </div>

        <!-- Scroll Indicator -->
        <div class="scroll-indicator">
            <div class="scroll-line"></div>
            <span class="scroll-text">Scroll</span>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-section section-padding" id="about">
        <div class="container">
            <div class="row align-items-center mb-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="section-header text-start mb-4">
                        <span class="section-subtitle">Biz Kimiz?</span>
                        <h2 class="section-title">
                            Premium <span class="accent-text">Dijital Çözümler</span>
                        </h2>
                    </div>
                    <p class="lead mb-4">
                        DBS Software olarak, 10 yılı aşkın süredir yazılım ve reklam sektöründe elit müşterilere hizmet
                        veriyoruz.
                        İşletmenizin dijital dönüşümünde lüks ve profesyonel çözümler sunuyoruz.
                    </p>
                    <p class="mb-4">
                        Yazılım geliştirme ve dijital reklam alanlarında uzman ekibimizle, markanızı zirveye taşıyoruz.
                        Her projemizde mükemmelliği hedefliyor, en son teknolojileri kullanarak sizin için benzersiz
                        dijital deneyimler yaratıyoruz.
                    </p>

                    <div class="row g-3 mb-4">
                        <div class="col-md-4">
                            <div class="stat-card glass-effect text-center">
                                <div class="stat-number accent-text" data-target="150">0</div>
                                <div class="stat-label">Tamamlanan Proje</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="stat-card glass-effect text-center">
                                <div class="stat-number accent-text" data-target="98">0</div>
                                <div class="stat-label">Müşteri Memnuniyeti</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="stat-card glass-effect text-center">
                                <div class="stat-number accent-text" data-target="12">0</div>
                                <div class="stat-label">Yıllık Deneyim</div>
                            </div>
                        </div>
                    </div>

                    <a href="about.html" class="btn btn-primary-custom">
                        <span>Daha Fazla Bilgi</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                <div class="col-lg-6" data-aos="fade-left">
                    <div class="about-images">
                        <div class="about-img-main glass-effect">
                            <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=600&q=80"
                                 alt="Team Working" class="img-fluid rounded">
                        </div>
                        <div class="about-img-small glass-effect">
                            <img src="https://images.unsplash.com/photo-1553877522-43269d4ea984?w=400&q=80" alt="Office"
                                 class="img-fluid rounded">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services-section section-padding bg-dark-alt" id="services">
        <div class="container">
            <div class="section-header text-center mb-5" data-aos="fade-up">
                <span class="section-subtitle">Hizmetlerimiz</span>
                <h2 class="section-title">
                    Sunduğumuz <span class="accent-text">Çözümler</span>
                </h2>
                <p class="section-description">
                    İşletmenizin ihtiyaçlarına özel, profesyonel ve yenilikçi hizmetler sunuyoruz
                </p>
            </div>

            <div class="row g-4">
                <!-- Service 1 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-card glass-effect h-100">
                        <div class="service-icon">
                            <i class="fas fa-code"></i>
                        </div>
                        <h3 class="service-title">Yazılım Geliştirme</h3>
                        <p class="service-description">
                            Özel yazılım çözümleri, kurumsal uygulamalar ve web platformları.
                            Modern teknolojilerle güçlü ve ölçeklenebilir sistemler.
                        </p>
                        <ul class="service-features">
                            <li><i class="fas fa-check accent-text"></i> Web Uygulamaları</li>
                            <li><i class="fas fa-check accent-text"></i> Kurumsal Yazılımlar</li>
                            <li><i class="fas fa-check accent-text"></i> API Entegrasyonları</li>
                            <li><i class="fas fa-check accent-text"></i> Bulut Çözümleri</li>
                        </ul>
                        <a href="services.html#software" class="service-link">
                            Detaylı Bilgi <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card glass-effect h-100">
                        <div class="service-icon">
                            <i class="fas fa-bullhorn"></i>
                        </div>
                        <h3 class="service-title">Dijital Reklam</h3>
                        <p class="service-description">
                            Markanızı öne çıkaran yaratıcı kampanyalar, sosyal medya yönetimi
                            ve performans odaklı reklam stratejileri.
                        </p>
                        <ul class="service-features">
                            <li><i class="fas fa-check accent-text"></i> Sosyal Medya Pazarlama</li>
                            <li><i class="fas fa-check accent-text"></i> Google Ads Yönetimi</li>
                            <li><i class="fas fa-check accent-text"></i> SEO & SEM</li>
                            <li><i class="fas fa-check accent-text"></i> İçerik Pazarlama</li>
                        </ul>
                        <a href="services.html#advertising" class="service-link">
                            Detaylı Bilgi <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Service 3 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-card glass-effect h-100">
                        <div class="service-icon">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <h3 class="service-title">Mobil Uygulamalar</h3>
                        <p class="service-description">
                            iOS ve Android platformları için kullanıcı dostu, performanslı
                            ve modern mobil uygulama geliştirme hizmetleri.
                        </p>
                        <ul class="service-features">
                            <li><i class="fas fa-check accent-text"></i> iOS Uygulamaları</li>
                            <li><i class="fas fa-check accent-text"></i> Android Uygulamaları</li>
                            <li><i class="fas fa-check accent-text"></i> Cross-Platform</li>
                            <li><i class="fas fa-check accent-text"></i> UI/UX Tasarım</li>
                        </ul>
                        <a href="services.html#mobile" class="service-link">
                            Detaylı Bilgi <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Service 4 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-card glass-effect h-100">
                        <div class="service-icon">
                            <i class="fas fa-paint-brush"></i>
                        </div>
                        <h3 class="service-title">UI/UX Tasarım</h3>
                        <p class="service-description">
                            Kullanıcı deneyimini ön planda tutan, estetik ve fonksiyonel
                            arayüz tasarımları ile markanızı görsel olarak güçlendirin.
                        </p>
                        <ul class="service-features">
                            <li><i class="fas fa-check accent-text"></i> Kullanıcı Araştırması</li>
                            <li><i class="fas fa-check accent-text"></i> Wireframe & Prototip</li>
                            <li><i class="fas fa-check accent-text"></i> Görsel Tasarım</li>
                            <li><i class="fas fa-check accent-text"></i> Kullanılabilirlik Testi</li>
                        </ul>
                        <a href="services.html#design" class="service-link">
                            Detaylı Bilgi <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Service 5 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card glass-effect h-100">
                        <div class="service-icon">
                            <i class="fas fa-cloud"></i>
                        </div>
                        <h3 class="service-title">Cloud & DevOps</h3>
                        <p class="service-description">
                            Ölçeklenebilir bulut altyapı çözümleri, CI/CD pipeline yönetimi
                            ve sistem optimizasyonu ile işletmenizi geleceğe taşıyın.
                        </p>
                        <ul class="service-features">
                            <li><i class="fas fa-check accent-text"></i> AWS / Azure / GCP</li>
                            <li><i class="fas fa-check accent-text"></i> Kubernetes & Docker</li>
                            <li><i class="fas fa-check accent-text"></i> CI/CD Pipeline</li>
                            <li><i class="fas fa-check accent-text"></i> Monitoring & Security</li>
                        </ul>
                        <a href="services.html#cloud" class="service-link">
                            Detaylı Bilgi <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Service 6 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-card glass-effect h-100">
                        <div class="service-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h3 class="service-title">Dijital Danışmanlık</h3>
                        <p class="service-description">
                            Dijital dönüşüm süreçlerinizde stratejik danışmanlık,
                            teknoloji seçimi ve proje yönetimi hizmetleri.
                        </p>
                        <ul class="service-features">
                            <li><i class="fas fa-check accent-text"></i> Dijital Strateji</li>
                            <li><i class="fas fa-check accent-text"></i> Teknoloji Danışmanlığı</li>
                            <li><i class="fas fa-check accent-text"></i> Proje Yönetimi</li>
                            <li><i class="fas fa-check accent-text"></i> İş Analizi</li>
                        </ul>
                        <a href="services.html#consulting" class="service-link">
                            Detaylı Bilgi <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section class="portfolio-section section-padding" id="portfolio">
        <div class="container">
            <div class="section-header text-center mb-5" data-aos="fade-up">
                <span class="section-subtitle">Portfolyo</span>
                <h2 class="section-title">
                    Son <span class="accent-text">Projelerimiz</span>
                </h2>
                <p class="section-description">
                    Çeşitli sektörlerden müşterilerimiz için geliştirdiğimiz başarılı projeler
                </p>
            </div>

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
                <!-- Project 1 -->
                <div class="col-lg-4 col-md-6 portfolio-item" data-category="software" data-aos="fade-up">
                    <div class="portfolio-card glass-effect">
                        <div class="portfolio-img">
                            <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=600&q=80"
                                 alt="E-Ticaret Platformu" class="img-fluid">
                            <div class="portfolio-overlay">
                                <div class="portfolio-details">
                                    <h3 class="portfolio-title">E-Ticaret Platformu</h3>
                                    <p class="portfolio-description">Modern ve ölçeklenebilir e-ticaret çözümü</p>
                                    <div class="portfolio-tags">
                                        <span class="tag">React</span>
                                        <span class="tag">Node.js</span>
                                        <span class="tag">MongoDB</span>
                                    </div>
                                    <a href="portfolio.html#project-1" class="portfolio-btn">
                                        Detaylar <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-category">Yazılım</div>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="col-lg-4 col-md-6 portfolio-item" data-category="advertising" data-aos="fade-up"
                     data-aos-delay="100">
                    <div class="portfolio-card glass-effect">
                        <div class="portfolio-img">
                            <img src="https://images.unsplash.com/photo-1533750349088-cd871a92f312?w=600&q=80"
                                 alt="Lüks Marka Kampanyası" class="img-fluid">
                            <div class="portfolio-overlay">
                                <div class="portfolio-details">
                                    <h3 class="portfolio-title">Lüks Marka Kampanyası</h3>
                                    <p class="portfolio-description">360° dijital pazarlama stratejisi</p>
                                    <div class="portfolio-tags">
                                        <span class="tag">Branding</span>
                                        <span class="tag">Social Media</span>
                                        <span class="tag">SEO</span>
                                    </div>
                                    <a href="portfolio.html#project-2" class="portfolio-btn">
                                        Detaylar <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-category">Reklam</div>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="col-lg-4 col-md-6 portfolio-item" data-category="mobile" data-aos="fade-up"
                     data-aos-delay="200">
                    <div class="portfolio-card glass-effect">
                        <div class="portfolio-img">
                            <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?w=600&q=80"
                                 alt="Finans Uygulaması" class="img-fluid">
                            <div class="portfolio-overlay">
                                <div class="portfolio-details">
                                    <h3 class="portfolio-title">Mobil Finans Uygulaması</h3>
                                    <p class="portfolio-description">Güvenli ve kullanıcı dostu fintech çözümü</p>
                                    <div class="portfolio-tags">
                                        <span class="tag">Flutter</span>
                                        <span class="tag">Firebase</span>
                                        <span class="tag">Blockchain</span>
                                    </div>
                                    <a href="portfolio.html#project-3" class="portfolio-btn">
                                        Detaylar <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-category">Mobil</div>
                    </div>
                </div>

                <!-- Project 4 -->
                <div class="col-lg-4 col-md-6 portfolio-item" data-category="software" data-aos="fade-up">
                    <div class="portfolio-card glass-effect">
                        <div class="portfolio-img">
                            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=600&q=80"
                                 alt="CRM Sistemi" class="img-fluid">
                            <div class="portfolio-overlay">
                                <div class="portfolio-details">
                                    <h3 class="portfolio-title">Kurumsal CRM Sistemi</h3>
                                    <p class="portfolio-description">AI destekli müşteri yönetim platformu</p>
                                    <div class="portfolio-tags">
                                        <span class="tag">Python</span>
                                        <span class="tag">Django</span>
                                        <span class="tag">AI/ML</span>
                                    </div>
                                    <a href="portfolio.html#project-4" class="portfolio-btn">
                                        Detaylar <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-category">Yazılım</div>
                    </div>
                </div>

                <!-- Project 5 -->
                <div class="col-lg-4 col-md-6 portfolio-item" data-category="design" data-aos="fade-up"
                     data-aos-delay="100">
                    <div class="portfolio-card glass-effect">
                        <div class="portfolio-img">
                            <img src="https://images.unsplash.com/photo-1561070791-2526d30994b5?w=600&q=80"
                                 alt="Kurumsal Kimlik" class="img-fluid">
                            <div class="portfolio-overlay">
                                <div class="portfolio-details">
                                    <h3 class="portfolio-title">Kurumsal Kimlik Tasarımı</h3>
                                    <p class="portfolio-description">Marka yenileme ve görsel kimlik projesi</p>
                                    <div class="portfolio-tags">
                                        <span class="tag">Branding</span>
                                        <span class="tag">UI/UX</span>
                                        <span class="tag">Print</span>
                                    </div>
                                    <a href="portfolio.html#project-5" class="portfolio-btn">
                                        Detaylar <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-category">Tasarım</div>
                    </div>
                </div>

                <!-- Project 6 -->
                <div class="col-lg-4 col-md-6 portfolio-item" data-category="advertising" data-aos="fade-up"
                     data-aos-delay="200">
                    <div class="portfolio-card glass-effect">
                        <div class="portfolio-img">
                            <img src="https://images.unsplash.com/photo-1557804506-669a67965ba0?w=600&q=80"
                                 alt="Sosyal Medya" class="img-fluid">
                            <div class="portfolio-overlay">
                                <div class="portfolio-details">
                                    <h3 class="portfolio-title">Sosyal Medya Yönetimi</h3>
                                    <p class="portfolio-description">Çok kanallı dijital pazarlama kampanyası</p>
                                    <div class="portfolio-tags">
                                        <span class="tag">Content</span>
                                        <span class="tag">Influencer</span>
                                        <span class="tag">Analytics</span>
                                    </div>
                                    <a href="portfolio.html#project-6" class="portfolio-btn">
                                        Detaylar <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-category">Reklam</div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5" data-aos="fade-up">
                <a href="portfolio.html" class="btn btn-outline-custom btn-lg">
                    <span>Tüm Projeleri Gör</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- References Section -->
    <section class="references-section section-padding bg-dark-alt" id="references">
        <div class="container">
            <div class="section-header text-center mb-5" data-aos="fade-up">
                <span class="section-subtitle">Güven Veren İşbirlikleri</span>
                <h2 class="section-title">
                    <span class="accent-text">Referanslarımız</span>
                </h2>
                <p class="section-description">
                    Dünya çapında saygın firmalarla gurur duyarak çalışıyoruz
                </p>
            </div>

            <!-- Reference Logos Grid -->
            <div class="row g-4 mb-5">
                <div class="col-lg-3 col-md-4 col-6" data-aos="fade-up" data-aos-delay="100">
                    <a href="https://www.example1.com" target="_blank" class="reference-card glass-effect">
                        <div class="reference-logo">
                            <div class="logo-placeholder">
                                <i class="fas fa-building"></i>
                                <span>Premium Corp</span>
                            </div>
                        </div>
                        <div class="reference-name">Premium Corp</div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-6" data-aos="fade-up" data-aos-delay="150">
                    <a href="https://www.example2.com" target="_blank" class="reference-card glass-effect">
                        <div class="reference-logo">
                            <div class="logo-placeholder">
                                <i class="fas fa-gem"></i>
                                <span>Luxury Brand</span>
                            </div>
                        </div>
                        <div class="reference-name">Luxury Brand</div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-6" data-aos="fade-up" data-aos-delay="200">
                    <a href="https://www.example3.com" target="_blank" class="reference-card glass-effect">
                        <div class="reference-logo">
                            <div class="logo-placeholder">
                                <i class="fas fa-crown"></i>
                                <span>Elite Group</span>
                            </div>
                        </div>
                        <div class="reference-name">Elite Group</div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-6" data-aos="fade-up" data-aos-delay="250">
                    <a href="https://www.example4.com" target="_blank" class="reference-card glass-effect">
                        <div class="reference-logo">
                            <div class="logo-placeholder">
                                <i class="fas fa-star"></i>
                                <span>Star Tech</span>
                            </div>
                        </div>
                        <div class="reference-name">Star Tech</div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-6" data-aos="fade-up" data-aos-delay="300">
                    <a href="https://www.example5.com" target="_blank" class="reference-card glass-effect">
                        <div class="reference-logo">
                            <div class="logo-placeholder">
                                <i class="fas fa-trophy"></i>
                                <span>Excellence Inc</span>
                            </div>
                        </div>
                        <div class="reference-name">Excellence Inc</div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-6" data-aos="fade-up" data-aos-delay="350">
                    <a href="https://www.example6.com" target="_blank" class="reference-card glass-effect">
                        <div class="reference-logo">
                            <div class="logo-placeholder">
                                <i class="fas fa-shield-alt"></i>
                                <span>Trust Finance</span>
                            </div>
                        </div>
                        <div class="reference-name">Trust Finance</div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-6" data-aos="fade-up" data-aos-delay="400">
                    <a href="https://www.example7.com" target="_blank" class="reference-card glass-effect">
                        <div class="reference-logo">
                            <div class="logo-placeholder">
                                <i class="fas fa-rocket"></i>
                                <span>Innovation Labs</span>
                            </div>
                        </div>
                        <div class="reference-name">Innovation Labs</div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-6" data-aos="fade-up" data-aos-delay="450">
                    <a href="https://www.example8.com" target="_blank" class="reference-card glass-effect">
                        <div class="reference-logo">
                            <div class="logo-placeholder">
                                <i class="fas fa-globe"></i>
                                <span>Global Solutions</span>
                            </div>
                        </div>
                        <div class="reference-name">Global Solutions</div>
                    </a>
                </div>
            </div>

            <div class="text-center" data-aos="fade-up">
                <a href="references.html" class="btn btn-primary-custom btn-lg">
                    <span>Tüm Referanslar</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <section class="blog-section section-padding" id="blog">
        <div class="container">
            <div class="section-header text-center mb-5" data-aos="fade-up">
                <span class="section-subtitle">Blog & Haberler</span>
                <h2 class="section-title">
                    Son <span class="accent-text">Yazılarımız</span>
                </h2>
                <p class="section-description">
                    Teknoloji ve dijital dünya hakkında güncel içerikler
                </p>
            </div>

            <div class="row g-4">
                <!-- Blog Post 1 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <article class="blog-card glass-effect h-100">
                        <div class="blog-img">
                            <img src="https://images.unsplash.com/photo-1677442136019-21780ecad995?w=600&q=80"
                                 alt="AI ve Yazılım" class="img-fluid">
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
                                <a href="blog-detail.html">Yapay Zeka ve Yazılım Geliştirmenin Geleceği</a>
                            </h3>
                            <p class="blog-excerpt">
                                AI teknolojilerinin yazılım geliştirme süreçlerine etkisi ve gelecekte bizi bekleyen
                                yenilikler...
                            </p>
                            <a href="blog-detail.html" class="blog-link">
                                Devamını Oku <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </article>
                </div>

                <!-- Blog Post 2 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <article class="blog-card glass-effect h-100">
                        <div class="blog-img">
                            <img src="https://images.unsplash.com/photo-1633356122544-f134324a6cee?w=600&q=80"
                                 alt="Dijital Pazarlama" class="img-fluid">
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
                                <a href="blog-detail.html">2024'te Dijital Pazarlama Trendleri</a>
                            </h3>
                            <p class="blog-excerpt">
                                Dijital pazarlamanın geleceğini şekillendirecek en önemli trendler ve stratejiler...
                            </p>
                            <a href="blog-detail.html" class="blog-link">
                                Devamını Oku <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </article>
                </div>

                <!-- Blog Post 3 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <article class="blog-card glass-effect h-100">
                        <div class="blog-img">
                            <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?w=600&q=80"
                                 alt="Mobil Uygulamalar" class="img-fluid">
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
                                <a href="blog-detail.html">Başarılı Mobil Uygulama Geliştirme İpuçları</a>
                            </h3>
                            <p class="blog-excerpt">
                                Kullanıcı dostu ve başarılı mobil uygulamalar geliştirmek için bilmeniz gerekenler...
                            </p>
                            <a href="blog-detail.html" class="blog-link">
                                Devamını Oku <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </article>
                </div>
            </div>

            <div class="text-center mt-5" data-aos="fade-up">
                <a href="blog.html" class="btn btn-outline-custom btn-lg">
                    <span>Tüm Yazılar</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Contact CTA Section -->
    <section class="contact-cta-section section-padding bg-dark-alt" id="contact-cta">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8" data-aos="fade-right">
                    <h2 class="section-title mb-3">
                        Projenizi <span class="accent-text">Konuşalım</span>
                    </h2>
                    <p class="lead mb-0">
                        Hayalinizdeki dijital projeyi birlikte gerçeğe dönüştürelim.
                        Uzman ekibimiz sizin için burada!
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end mt-4 mt-lg-0" data-aos="fade-left">
                    <a href="contact.html" class="btn btn-primary-custom btn-lg">
                        <span>Bize Ulaşın</span>
                        <i class="fas fa-paper-plane"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
