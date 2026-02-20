{{-- Services Page --}}
@extends('site.layouts.app')

@section('title', 'Hizmetlerimiz - DBS Software')
@section('meta_description', 'DBS Software Hizmetler - Yazılım geliştirme, dijital reklam, mobil uygulamalar ve daha fazlası.')

@section('content')
    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center" data-aos="fade-up">
                    <h1 class="page-title">
                        <span class="accent-text glow-text">Hizmetlerimiz</span>
                    </h1>
                    <p class="page-description">
                        İşletmenizin ihtiyaçlarına özel, profesyonel ve yenilikçi dijital çözümler
                    </p>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('site.home') }}">Anasayfa</a></li>
                            <li class="breadcrumb-item active">Hizmetlerimiz</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Overview -->
    <section class="services-overview section-padding">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <a href="#software" class="service-overview-card glass-effect">
                        <div class="service-overview-icon"><i class="fas fa-code"></i></div>
                        <h3 class="service-overview-title">Yazılım Geliştirme</h3>
                        <p class="service-overview-text">Özel ve kurumsal yazılım çözümleri</p>
                        <span class="service-overview-arrow"><i class="fas fa-arrow-right"></i></span>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <a href="#advertising" class="service-overview-card glass-effect">
                        <div class="service-overview-icon"><i class="fas fa-bullhorn"></i></div>
                        <h3 class="service-overview-title">Dijital Reklam</h3>
                        <p class="service-overview-text">Performans odaklı reklam kampanyaları</p>
                        <span class="service-overview-arrow"><i class="fas fa-arrow-right"></i></span>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <a href="#mobile" class="service-overview-card glass-effect">
                        <div class="service-overview-icon"><i class="fas fa-mobile-alt"></i></div>
                        <h3 class="service-overview-title">Mobil Uygulamalar</h3>
                        <p class="service-overview-text">iOS ve Android uygulama geliştirme</p>
                        <span class="service-overview-arrow"><i class="fas fa-arrow-right"></i></span>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <a href="#design" class="service-overview-card glass-effect">
                        <div class="service-overview-icon"><i class="fas fa-paint-brush"></i></div>
                        <h3 class="service-overview-title">UI/UX Tasarım</h3>
                        <p class="service-overview-text">Kullanıcı deneyimi odaklı tasarımlar</p>
                        <span class="service-overview-arrow"><i class="fas fa-arrow-right"></i></span>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <a href="#cloud" class="service-overview-card glass-effect">
                        <div class="service-overview-icon"><i class="fas fa-cloud"></i></div>
                        <h3 class="service-overview-title">Cloud & DevOps</h3>
                        <p class="service-overview-text">Bulut altyapı ve sistem yönetimi</p>
                        <span class="service-overview-arrow"><i class="fas fa-arrow-right"></i></span>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <a href="#consulting" class="service-overview-card glass-effect">
                        <div class="service-overview-icon"><i class="fas fa-chart-line"></i></div>
                        <h3 class="service-overview-title">Dijital Danışmanlık</h3>
                        <p class="service-overview-text">Strateji ve teknoloji danışmanlığı</p>
                        <span class="service-overview-arrow"><i class="fas fa-arrow-right"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Software Development Service -->
    <section class="service-detail section-padding bg-dark-alt" id="software">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-right">
                    <div class="service-detail-img glass-effect">
                        <img src="https://images.unsplash.com/photo-1461749280684-dccba630e2f6?w=700&q=80" alt="Yazılım Geliştirme" class="img-fluid rounded">
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="service-detail-content">
                        <span class="service-badge">Hizmet #1</span>
                        <h2 class="service-detail-title"><span class="accent-text">Yazılım</span> Geliştirme</h2>
                        <p class="service-detail-text">
                            Modern teknolojiler kullanarak işletmenizin ihtiyaçlarına özel, ölçeklenebilir ve 
                            güvenli yazılım çözümleri geliştiriyoruz.
                        </p>
                        <div class="service-features-list">
                            <div class="row g-3">
                                <div class="col-md-6"><div class="feature-item"><i class="fas fa-check-circle accent-text"></i> <span>Web Uygulamaları</span></div></div>
                                <div class="col-md-6"><div class="feature-item"><i class="fas fa-check-circle accent-text"></i> <span>Backend Sistemler</span></div></div>
                                <div class="col-md-6"><div class="feature-item"><i class="fas fa-check-circle accent-text"></i> <span>E-Ticaret Platformları</span></div></div>
                                <div class="col-md-6"><div class="feature-item"><i class="fas fa-check-circle accent-text"></i> <span>Kurumsal Yazılımlar</span></div></div>
                            </div>
                        </div>
                        <a href="{{ route('site.contact') }}" class="btn btn-primary-custom mt-4">
                            <span>Teklif Alın</span> <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Digital Advertising Service -->
    <section class="service-detail section-padding" id="advertising">
        <div class="container">
            <div class="row align-items-center flex-lg-row-reverse">
                <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-left">
                    <div class="service-detail-img glass-effect">
                        <img src="https://images.unsplash.com/photo-1533750349088-cd871a92f312?w=700&q=80" alt="Dijital Reklam" class="img-fluid rounded">
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="service-detail-content">
                        <span class="service-badge">Hizmet #2</span>
                        <h2 class="service-detail-title"><span class="accent-text">Dijital</span> Reklam</h2>
                        <p class="service-detail-text">
                            Markanızı dijital dünyada öne çıkaran, hedef kitleye ulaşan ve ölçülebilir sonuçlar 
                            üreten reklam kampanyaları yönetiyoruz.
                        </p>
                        <div class="service-features-list">
                            <div class="row g-3">
                                <div class="col-md-6"><div class="feature-item"><i class="fas fa-check-circle accent-text"></i> <span>Google Ads Yönetimi</span></div></div>
                                <div class="col-md-6"><div class="feature-item"><i class="fas fa-check-circle accent-text"></i> <span>Sosyal Medya Reklamları</span></div></div>
                                <div class="col-md-6"><div class="feature-item"><i class="fas fa-check-circle accent-text"></i> <span>SEO & SEM</span></div></div>
                                <div class="col-md-6"><div class="feature-item"><i class="fas fa-check-circle accent-text"></i> <span>İçerik Pazarlama</span></div></div>
                            </div>
                        </div>
                        <a href="{{ route('site.contact') }}" class="btn btn-primary-custom mt-4">
                            <span>Kampanya Başlat</span> <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mobile Development Service -->
    <section class="service-detail section-padding bg-dark-alt" id="mobile">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-right">
                    <div class="service-detail-img glass-effect">
                        <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?w=700&q=80" alt="Mobil Uygulamalar" class="img-fluid rounded">
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="service-detail-content">
                        <span class="service-badge">Hizmet #3</span>
                        <h2 class="service-detail-title"><span class="accent-text">Mobil</span> Uygulamalar</h2>
                        <p class="service-detail-text">
                            iOS ve Android platformları için kullanıcı dostu, performanslı ve modern mobil uygulamalar 
                            geliştiriyoruz.
                        </p>
                        <div class="service-features-list">
                            <div class="row g-3">
                                <div class="col-md-6"><div class="feature-item"><i class="fas fa-check-circle accent-text"></i> <span>iOS Uygulamaları</span></div></div>
                                <div class="col-md-6"><div class="feature-item"><i class="fas fa-check-circle accent-text"></i> <span>Android Uygulamaları</span></div></div>
                                <div class="col-md-6"><div class="feature-item"><i class="fas fa-check-circle accent-text"></i> <span>Cross-Platform (Flutter)</span></div></div>
                                <div class="col-md-6"><div class="feature-item"><i class="fas fa-check-circle accent-text"></i> <span>React Native</span></div></div>
                            </div>
                        </div>
                        <a href="{{ route('site.contact') }}" class="btn btn-primary-custom mt-4">
                            <span>Uygulama Geliştir</span> <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- UI/UX Design Service -->
    <section class="service-detail section-padding" id="design">
        <div class="container">
            <div class="row align-items-center flex-lg-row-reverse">
                <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-left">
                    <div class="service-detail-img glass-effect">
                        <img src="https://images.unsplash.com/photo-1561070791-2526d30994b5?w=700&q=80" alt="UI/UX Tasarım" class="img-fluid rounded">
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="service-detail-content">
                        <span class="service-badge">Hizmet #4</span>
                        <h2 class="service-detail-title"><span class="accent-text">UI/UX</span> Tasarım</h2>
                        <p class="service-detail-text">
                            Kullanıcı deneyimini ön planda tutan, estetik ve fonksiyonel arayüz tasarımları ile 
                            markanızı görsel olarak güçlendiriyoruz.
                        </p>
                        <div class="service-features-list">
                            <div class="row g-3">
                                <div class="col-md-6"><div class="feature-item"><i class="fas fa-check-circle accent-text"></i> <span>Kullanıcı Araştırması</span></div></div>
                                <div class="col-md-6"><div class="feature-item"><i class="fas fa-check-circle accent-text"></i> <span>Wireframe & Prototip</span></div></div>
                                <div class="col-md-6"><div class="feature-item"><i class="fas fa-check-circle accent-text"></i> <span>Görsel Tasarım</span></div></div>
                                <div class="col-md-6"><div class="feature-item"><i class="fas fa-check-circle accent-text"></i> <span>Kullanılabilirlik Testi</span></div></div>
                            </div>
                        </div>
                        <a href="{{ route('site.contact') }}" class="btn btn-primary-custom mt-4">
                            <span>Tasarım Talebi</span> <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cloud & DevOps Service -->
    <section class="service-detail section-padding bg-dark-alt" id="cloud">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-right">
                    <div class="service-detail-img glass-effect">
                        <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?w=700&q=80" alt="Cloud & DevOps" class="img-fluid rounded">
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="service-detail-content">
                        <span class="service-badge">Hizmet #5</span>
                        <h2 class="service-detail-title"><span class="accent-text">Cloud</span> & DevOps</h2>
                        <p class="service-detail-text">
                            Ölçeklenebilir bulut altyapı çözümleri, CI/CD pipeline yönetimi ve sistem optimizasyonu ile 
                            işletmenizi geleceğe taşıyoruz.
                        </p>
                        <div class="service-features-list">
                            <div class="row g-3">
                                <div class="col-md-6"><div class="feature-item"><i class="fas fa-check-circle accent-text"></i> <span>AWS / Azure / GCP</span></div></div>
                                <div class="col-md-6"><div class="feature-item"><i class="fas fa-check-circle accent-text"></i> <span>Kubernetes & Docker</span></div></div>
                                <div class="col-md-6"><div class="feature-item"><i class="fas fa-check-circle accent-text"></i> <span>CI/CD Pipeline</span></div></div>
                                <div class="col-md-6"><div class="feature-item"><i class="fas fa-check-circle accent-text"></i> <span>Monitoring & Security</span></div></div>
                            </div>
                        </div>
                        <a href="{{ route('site.contact') }}" class="btn btn-primary-custom mt-4">
                            <span>Altyapı Danışmanlığı</span> <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Digital Consulting Service -->
    <section class="service-detail section-padding" id="consulting">
        <div class="container">
            <div class="row align-items-center flex-lg-row-reverse">
                <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-left">
                    <div class="service-detail-img glass-effect">
                        <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=700&q=80" alt="Dijital Danışmanlık" class="img-fluid rounded">
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="service-detail-content">
                        <span class="service-badge">Hizmet #6</span>
                        <h2 class="service-detail-title"><span class="accent-text">Dijital</span> Danışmanlık</h2>
                        <p class="service-detail-text">
                            Dijital dönüşüm süreçlerinizde stratejik danışmanlık, teknoloji seçimi ve proje yönetimi 
                            hizmetleri sunuyoruz.
                        </p>
                        <div class="service-features-list">
                            <div class="row g-3">
                                <div class="col-md-6"><div class="feature-item"><i class="fas fa-check-circle accent-text"></i> <span>Dijital Strateji</span></div></div>
                                <div class="col-md-6"><div class="feature-item"><i class="fas fa-check-circle accent-text"></i> <span>Teknoloji Danışmanlığı</span></div></div>
                                <div class="col-md-6"><div class="feature-item"><i class="fas fa-check-circle accent-text"></i> <span>Proje Yönetimi</span></div></div>
                                <div class="col-md-6"><div class="feature-item"><i class="fas fa-check-circle accent-text"></i> <span>İş Analizi</span></div></div>
                            </div>
                        </div>
                        <a href="{{ route('site.contact') }}" class="btn btn-primary-custom mt-4">
                            <span>Danışmanlık Talebi</span> <i class="fas fa-arrow-right"></i>
                        </a>
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
                        Hangi Hizmete <span class="accent-text">İhtiyacınız Var?</span>
                    </h2>
                    <p class="lead mb-0">
                        Uzman ekibimizle ücretsiz danışmanlık alın ve projeniz için en uygun çözümü belirleyin.
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end mt-4 mt-lg-0" data-aos="fade-left">
                    <a href="{{ route('site.contact') }}" class="btn btn-primary-custom btn-lg">
                        <span>Ücretsiz Görüşme</span>
                        <i class="fas fa-phone"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
