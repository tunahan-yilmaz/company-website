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
                            <li class="breadcrumb-item"><a href="index.html">Anasayfa</a></li>
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
                            <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=700&q=80" alt="DBS Software Ekibi" class="img-fluid rounded">
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
                    <p class="lead mb-4">
                        2014 yılında kurulan DBS Software, yazılım ve dijital reklam sektöründe 10+ yıllık deneyimiyle
                        Türkiye'nin en güvenilir teknoloji partnerlerinden biri haline geldi.
                    </p>
                    <p class="mb-4">
                        Sektöre yeni girmiş olsak da, ekibimizin on yılı aşkın deneyimi sayesinde, elit müşterilere
                        profesyonel ve lüks hizmetler sunuyoruz. Her projede mükemmelliği hedefliyor, müşterilerimize
                        sadece yazılım değil, dijital dönüşümde güvenilir bir partner oluyoruz.
                    </p>
                    <p class="mb-4">
                        Modern teknolojileri takip eden, yenilikçi çözümler üreten ve müşteri memnuniyetini her şeyin
                        önünde tutan bir ekiple, markanızı dijital dünyada zirveye taşıyoruz.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission Vision Values -->
    <section class="mission-vision section-padding bg-dark-alt">
        <div class="container">
            <div class="row g-4">
                <!-- Mission -->
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="mvv-card glass-effect h-100 text-center">
                        <div class="mvv-icon">
                            <i class="fas fa-rocket"></i>
                        </div>
                        <h3 class="mvv-title">Misyonumuz</h3>
                        <p class="mvv-text">
                            İşletmelerin dijital dönüşüm süreçlerinde, en son teknolojileri kullanarak yenilikçi
                            ve kullanıcı odaklı çözümler sunmak, müşterilerimizin dijital varlıklarını güçlendirerek
                            rekabet avantajı sağlamalarına katkıda bulunmak.
                        </p>
                    </div>
                </div>

                <!-- Vision -->
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="mvv-card glass-effect h-100 text-center">
                        <div class="mvv-icon">
                            <i class="fas fa-eye"></i>
                        </div>
                        <h3 class="mvv-title">Vizyonumuz</h3>
                        <p class="mvv-text">
                            Türkiye'nin ve bölgenin en güvenilir ve tercih edilen yazılım ve dijital pazarlama şirketi
                            olmak, global pazarlarda tanınan bir marka haline gelmek ve teknoloji ile iş dünyasını
                            şekillendiren öncü bir organizasyon olmak.
                        </p>
                    </div>
                </div>

                <!-- Values -->
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="mvv-card glass-effect h-100 text-center">
                        <div class="mvv-icon">
                            <i class="fas fa-gem"></i>
                        </div>
                        <h3 class="mvv-title">Değerlerimiz</h3>
                        <p class="mvv-text">
                            Müşteri memnuniyeti, yenilikçilik, şeffaflık, takım çalışması, sürekli gelişim,
                            kalite odaklılık ve etik değerlere bağlılık bizim temel prensiblerimizdir.
                            Her projede bu değerlerle hareket ederiz.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="stats-section section-padding">
        <div class="container">
            <div class="section-header text-center mb-5" data-aos="fade-up">
                <span class="section-subtitle">Rakamlarla DBS Software</span>
                <h2 class="section-title">
                    Başarılarımız <span class="accent-text">Konuşuyor</span>
                </h2>
            </div>

            <div class="row g-4">
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="stat-box glass-effect text-center">
                        <div class="stat-icon">
                            <i class="fas fa-project-diagram"></i>
                        </div>
                        <div class="stat-number accent-text" data-target="150">0</div>
                        <div class="stat-label">Tamamlanan Proje</div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="stat-box glass-effect text-center">
                        <div class="stat-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="stat-number accent-text" data-target="120">0</div>
                        <div class="stat-label">Mutlu Müşteri</div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="stat-box glass-effect text-center">
                        <div class="stat-icon">
                            <i class="fas fa-award"></i>
                        </div>
                        <div class="stat-number accent-text" data-target="98">0</div>
                        <div class="stat-label">Müşteri Memnuniyeti %</div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="stat-box glass-effect text-center">
                        <div class="stat-icon">
                            <i class="fas fa-calendar-alt"></i>
                        </div>
                        <div class="stat-number accent-text" data-target="12">0</div>
                        <div class="stat-label">Yıllık Deneyim</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="why-choose section-padding bg-dark-alt">
        <div class="container">
            <div class="section-header text-center mb-5" data-aos="fade-up">
                <span class="section-subtitle">Neden DBS Software?</span>
                <h2 class="section-title">
                    Bizi <span class="accent-text">Farklı Kılan</span> Özellikler
                </h2>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-box glass-effect">
                        <div class="feature-icon">
                            <i class="fas fa-bolt"></i>
                        </div>
                        <h4 class="feature-title">Hızlı Teslimat</h4>
                        <p class="feature-text">
                            Agile metodoloji ile çalışarak projelerinizi hızlı ve kaliteli şekilde teslim ediyoruz.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-box glass-effect">
                        <div class="feature-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h4 class="feature-title">Güvenilirlik</h4>
                        <p class="feature-text">
                            ISO standartları ve güvenlik protokolleri ile verilerinizi en üst düzeyde koruyoruz.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-box glass-effect">
                        <div class="feature-icon">
                            <i class="fas fa-headset"></i>
                        </div>
                        <h4 class="feature-title">7/24 Destek</h4>
                        <p class="feature-text">
                            Proje sonrası da yanınızdayız. Teknik destek ekibimiz her zaman hazır.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="feature-box glass-effect">
                        <div class="feature-icon">
                            <i class="fas fa-cogs"></i>
                        </div>
                        <h4 class="feature-title">Özel Çözümler</h4>
                        <p class="feature-text">
                            Her işletmenin ihtiyacı farklıdır. Size özel, scalable çözümler geliştiriyoruz.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="feature-box glass-effect">
                        <div class="feature-icon">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <h4 class="feature-title">İnovasyon</h4>
                        <p class="feature-text">
                            En son teknolojileri takip ediyor, projelerinize yenilikçi yaklaşımlar getiriyoruz.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="feature-box glass-effect">
                        <div class="feature-icon">
                            <i class="fas fa-dollar-sign"></i>
                        </div>
                        <h4 class="feature-title">Şeffaf Fiyatlandırma</h4>
                        <p class="feature-text">
                            Gizli maliyet yok. Net ve şeffaf fiyat politikası ile çalışıyoruz.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team-section section-padding">
        <div class="container">
            <div class="section-header text-center mb-5" data-aos="fade-up">
                <span class="section-subtitle">Ekibimiz</span>
                <h2 class="section-title">
                    Başarının Arkasındaki <span class="accent-text">İsimler</span>
                </h2>
                <p class="section-description">
                    Alanında uzman, deneyimli ve tutkulu profesyonellerden oluşan ekibimiz
                </p>
            </div>

            <div class="row g-4">
                <!-- Team Member 1 -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="team-card glass-effect">
                        <div class="team-img">
                            <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?w=400&q=80" alt="Ahmet Yılmaz" class="img-fluid">
                            <div class="team-overlay">
                                <div class="team-social">
                                    <a href="#"><i class="fab fa-linkedin"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-github"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-info">
                            <h4 class="team-name">Ahmet Yılmaz</h4>
                            <p class="team-role">CEO & Founder</p>
                        </div>
                    </div>
                </div>

                <!-- Team Member 2 -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="team-card glass-effect">
                        <div class="team-img">
                            <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=400&q=80" alt="Ayşe Demir" class="img-fluid">
                            <div class="team-overlay">
                                <div class="team-social">
                                    <a href="#"><i class="fab fa-linkedin"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-dribbble"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-info">
                            <h4 class="team-name">Ayşe Demir</h4>
                            <p class="team-role">CTO</p>
                        </div>
                    </div>
                </div>

                <!-- Team Member 3 -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="team-card glass-effect">
                        <div class="team-img">
                            <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=400&q=80" alt="Mehmet Kaya" class="img-fluid">
                            <div class="team-overlay">
                                <div class="team-social">
                                    <a href="#"><i class="fab fa-linkedin"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-github"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-info">
                            <h4 class="team-name">Mehmet Kaya</h4>
                            <p class="team-role">Lead Developer</p>
                        </div>
                    </div>
                </div>

                <!-- Team Member 4 -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="team-card glass-effect">
                        <div class="team-img">
                            <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?w=400&q=80" alt="Zeynep Çelik" class="img-fluid">
                            <div class="team-overlay">
                                <div class="team-social">
                                    <a href="#"><i class="fab fa-linkedin"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-behance"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-info">
                            <h4 class="team-name">Zeynep Çelik</h4>
                            <p class="team-role">UI/UX Designer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Timeline Section -->
    <section class="timeline-section section-padding bg-dark-alt">
        <div class="container">
            <div class="section-header text-center mb-5" data-aos="fade-up">
                <span class="section-subtitle">Yolculuğumuz</span>
                <h2 class="section-title">
                    Dönüm <span class="accent-text">Noktalarımız</span>
                </h2>
            </div>

            <div class="timeline">
                <!-- Timeline Item 1 -->
                <div class="timeline-item" data-aos="fade-up">
                    <div class="timeline-marker"></div>
                    <div class="timeline-content glass-effect">
                        <div class="timeline-year">2014</div>
                        <h4 class="timeline-title">Kuruluş</h4>
                        <p class="timeline-text">
                            DBS Software, İstanbul'da 3 kişilik bir ekiple web ve mobil uygulama geliştirme alanında faaliyete başladı.
                        </p>
                    </div>
                </div>

                <!-- Timeline Item 2 -->
                <div class="timeline-item" data-aos="fade-up">
                    <div class="timeline-marker"></div>
                    <div class="timeline-content glass-effect">
                        <div class="timeline-year">2016</div>
                        <h4 class="timeline-title">Büyüme</h4>
                        <p class="timeline-text">
                            Ekibimiz 15 kişiye ulaştı ve dijital reklam hizmetlerini de portföyümüze ekledik. İlk 50 projemizi tamamladık.
                        </p>
                    </div>
                </div>

                <!-- Timeline Item 3 -->
                <div class="timeline-item" data-aos="fade-up">
                    <div class="timeline-marker"></div>
                    <div class="timeline-content glass-effect">
                        <div class="timeline-year">2019</div>
                        <h4 class="timeline-title">Yeni Ofis</h4>
                        <p class="timeline-text">
                            Maslak'taki modern ofisimize taşındık ve cloud & DevOps hizmetlerimizi başlattık. 100+ proje mimarisi.
                        </p>
                    </div>
                </div>

                <!-- Timeline Item 4 -->
                <div class="timeline-item" data-aos="fade-up">
                    <div class="timeline-marker"></div>
                    <div class="timeline-content glass-effect">
                        <div class="timeline-year">2022</div>
                        <h4 class="timeline-title">Uluslararası</h4>
                        <p class="timeline-text">
                            İlk yurtdışı projelerimizi tamamladık ve Avrupa pazarına açıldık. Fortune 500 şirketleriyle çalışmaya başladık.
                        </p>
                    </div>
                </div>

                <!-- Timeline Item 5 -->
                <div class="timeline-item" data-aos="fade-up">
                    <div class="timeline-marker"></div>
                    <div class="timeline-content glass-effect">
                        <div class="timeline-year">2025</div>
                        <h4 class="timeline-title">Bugün</h4>
                        <p class="timeline-text">
                            150+ tamamlanmış proje, 30+ kişilik uzman ekip ve Türkiye'nin önde gelen teknoloji şirketlerinden biri olduk.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8" data-aos="fade-right">
                    <h2 class="section-title mb-3">
                        Projeleriniz İçin <span class="accent-text">Hazırız</span>
                    </h2>
                    <p class="lead mb-0">
                        Deneyimli ekibimizle hayalinizdeki dijital projeyi birlikte gerçeğe dönüştürelim.
                        Hemen iletişime geçin!
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end mt-4 mt-lg-0" data-aos="fade-left">
                    <a href="contact.html" class="btn btn-primary-custom btn-lg">
                        <span>Hemen Başlayın</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection
