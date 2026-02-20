{{-- Portfolio Detail Page --}}
@extends('site.layouts.app')

@section('title', 'Proje Detay - DBS Software')
@section('meta_description', 'DBS Software proje detay sayfası.')

@section('content')
    <!-- Project Hero -->
    <section class="project-hero">
        <div class="project-hero-bg" style="background-image: url('https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=1920&q=80');">
            <div class="project-hero-overlay"></div>
        </div>
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-lg-8" data-aos="fade-right">
                    <div class="project-hero-content">
                        <a href="portfolio.html" class="back-link mb-3">
                            <i class="fas fa-arrow-left"></i> Portfolyo'ya Dön
                        </a>
                        <span class="project-category-badge">Yazılım Geliştirme</span>
                        <h1 class="project-hero-title">
                            E-Ticaret <span class="accent-text glow-text">Platformu</span>
                        </h1>
                        <p class="project-hero-subtitle">
                            Modern, ölçeklenebilir ve kullanıcı dostu B2C e-ticaret çözümü
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Project Info Bar -->
    <section class="project-info-bar">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="info-item glass-effect">
                        <div class="info-icon">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <div class="info-content">
                            <div class="info-label">Müşteri</div>
                            <div class="info-value">Premium Fashion</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="info-item glass-effect">
                        <div class="info-icon">
                            <i class="fas fa-calendar-alt"></i>
                        </div>
                        <div class="info-content">
                            <div class="info-label">Tarih</div>
                            <div class="info-value">Eylül 2024</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="info-item glass-effect">
                        <div class="info-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="info-content">
                            <div class="info-label">Süre</div>
                            <div class="info-value">4 Ay</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="info-item glass-effect">
                        <div class="info-icon">
                            <i class="fas fa-tags"></i>
                        </div>
                        <div class="info-content">
                            <div class="info-label">Kategori</div>
                            <div class="info-value">E-Ticaret</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Project Content -->
    <section class="project-content section-padding">
        <div class="container">
            <div class="row">
                <!-- Main Content -->
                <div class="col-lg-8">
                    <!-- Project Overview -->
                    <div class="content-block mb-5" data-aos="fade-up">
                        <h2 class="content-title">
                            Proje <span class="accent-text">Hakkında</span>
                        </h2>
                        <p class="lead mb-4">
                            Premium Fashion için geliştirdiğimiz bu e-ticaret platformu, modern web teknolojileri
                            kullanılarak oluşturulmuş, yüksek performanslı ve ölçeklenebilir bir çözümdür.
                        </p>
                        <p class="mb-3">
                            Müşterimiz, mevcut e-ticaret altyapısının yetersiz kalması ve müşteri deneyimini
                            iyileştirmek istediği için bize başvurdu. Detaylı analiz ve planlama sürecinin ardından,
                            modern teknoloji yığını kullanarak sıfırdan bir platform geliştirdik.
                        </p>
                        <p class="mb-3">
                            Platform, kullanıcı dostu arayüzü, hızlı yükleme süreleri, güvenli ödeme sistemi ve
                            kapsamlı admin paneli ile öne çıkıyor. Responsive tasarımı sayesinde her cihazda
                            mükemmel çalışıyor.
                        </p>
                    </div>

                    <!-- Challenge -->
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
                                    <h4>Yüksek Trafik Yönetimi</h4>
                                    <p>
                                        <strong>Problem:</strong> Kampanya dönemlerinde binlerce eş zamanlı kullanıcı.
                                    </p>
                                    <p>
                                        <strong>Çözüm:</strong> Redis cache, CDN entegrasyonu ve load balancing
                                        ile sistem 10,000+ eş zamanlı kullanıcıyı sorunsuz handle ediyor.
                                    </p>
                                </div>
                            </div>

                            <div class="challenge-item glass-effect">
                                <div class="challenge-icon">
                                    <i class="fas fa-shield-alt"></i>
                                </div>
                                <div class="challenge-content">
                                    <h4>Güvenli Ödeme Sistemi</h4>
                                    <p>
                                        <strong>Problem:</strong> PCI-DSS uyumlu güvenli ödeme entegrasyonu gereksinimi.
                                    </p>
                                    <p>
                                        <strong>Çözüm:</strong> Tokenization sistemi ve 3D Secure entegrasyonu ile
                                        %100 güvenli ödeme altyapısı kuruldu.
                                    </p>
                                </div>
                            </div>

                            <div class="challenge-item glass-effect">
                                <div class="challenge-icon">
                                    <i class="fas fa-sync-alt"></i>
                                </div>
                                <div class="challenge-content">
                                    <h4>Gerçek Zamanlı Stok Yönetimi</h4>
                                    <p>
                                        <strong>Problem:</strong> Fiziksel mağaza ve online satış kanallarının senkronizasyonu.
                                    </p>
                                    <p>
                                        <strong>Çözüm:</strong> WebSocket ile real-time stok güncellemesi ve otomatik
                                        bildirim sistemi oluşturuldu.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Technologies -->
                    <div class="content-block mb-5" data-aos="fade-up">
                        <h2 class="content-title">
                            Kullanılan <span class="accent-text">Teknolojiler</span>
                        </h2>
                        <div class="tech-stack-grid">
                            <div class="tech-stack-item glass-effect">
                                <i class="fab fa-react"></i>
                                <span>React.js</span>
                            </div>
                            <div class="tech-stack-item glass-effect">
                                <i class="fab fa-node-js"></i>
                                <span>Node.js</span>
                            </div>
                            <div class="tech-stack-item glass-effect">
                                <i class="fas fa-database"></i>
                                <span>MongoDB</span>
                            </div>
                            <div class="tech-stack-item glass-effect">
                                <i class="fab fa-aws"></i>
                                <span>AWS</span>
                            </div>
                            <div class="tech-stack-item glass-effect">
                                <i class="fas fa-server"></i>
                                <span>Redis</span>
                            </div>
                            <div class="tech-stack-item glass-effect">
                                <i class="fab fa-stripe"></i>
                                <span>Stripe</span>
                            </div>
                        </div>
                    </div>

                    <!-- Features -->
                    <div class="content-block mb-5" data-aos="fade-up">
                        <h2 class="content-title">
                            Öne Çıkan <span class="accent-text">Özellikler</span>
                        </h2>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="feature-box glass-effect">
                                    <i class="fas fa-check-circle accent-text"></i>
                                    <span>Gelişmiş ürün filtreleme ve arama</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-box glass-effect">
                                    <i class="fas fa-check-circle accent-text"></i>
                                    <span>Kişiselleştirilmiş ürün önerileri</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-box glass-effect">
                                    <i class="fas fa-check-circle accent-text"></i>
                                    <span>Çoklu ödeme yöntemi desteği</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-box glass-effect">
                                    <i class="fas fa-check-circle accent-text"></i>
                                    <span>Gerçek zamanlı sipariş takibi</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-box glass-effect">
                                    <i class="fas fa-check-circle accent-text"></i>
                                    <span>Kapsamlı admin paneli</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-box glass-effect">
                                    <i class="fas fa-check-circle accent-text"></i>
                                    <span>Mobil responsive tasarım</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-box glass-effect">
                                    <i class="fas fa-check-circle accent-text"></i>
                                    <span>SEO optimize yapı</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-box glass-effect">
                                    <i class="fas fa-check-circle accent-text"></i>
                                    <span>Analitik ve raporlama</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project Gallery -->
                    <div class="content-block mb-5" data-aos="fade-up">
                        <h2 class="content-title">
                            Proje <span class="accent-text">Görselleri</span>
                        </h2>
                        <div class="project-gallery">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <a href="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=1200&q=80" data-lightbox="project-gallery" data-title="Ana Sayfa">
                                        <div class="gallery-item glass-effect">
                                            <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=600&q=80" alt="Ana Sayfa" class="img-fluid">
                                            <div class="gallery-overlay">
                                                <i class="fas fa-search-plus"></i>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://images.unsplash.com/photo-1472851294608-062f824d29cc?w=1200&q=80" data-lightbox="project-gallery" data-title="Ürün Listesi">
                                        <div class="gallery-item glass-effect">
                                            <img src="https://images.unsplash.com/photo-1472851294608-062f824d29cc?w=600&q=80" alt="Ürün Listesi" class="img-fluid">
                                            <div class="gallery-overlay">
                                                <i class="fas fa-search-plus"></i>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a href="https://images.unsplash.com/photo-1556742111-a301076d9d18?w=1200&q=80" data-lightbox="project-gallery" data-title="Ürün Detay">
                                        <div class="gallery-item glass-effect">
                                            <img src="https://images.unsplash.com/photo-1556742111-a301076d9d18?w=600&q=80" alt="Ürün Detay" class="img-fluid">
                                            <div class="gallery-overlay">
                                                <i class="fas fa-search-plus"></i>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a href="https://images.unsplash.com/photo-1516321497487-e288fb19713f?w=1200&q=80" data-lightbox="project-gallery" data-title="Sepet">
                                        <div class="gallery-item glass-effect">
                                            <img src="https://images.unsplash.com/photo-1516321497487-e288fb19713f?w=600&q=80" alt="Sepet" class="img-fluid">
                                            <div class="gallery-overlay">
                                                <i class="fas fa-search-plus"></i>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a href="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=1200&q=80" data-lightbox="project-gallery" data-title="Admin Panel">
                                        <div class="gallery-item glass-effect">
                                            <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=600&q=80" alt="Admin Panel" class="img-fluid">
                                            <div class="gallery-overlay">
                                                <i class="fas fa-search-plus"></i>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Results -->
                    <div class="content-block" data-aos="fade-up">
                        <h2 class="content-title">
                            Proje <span class="accent-text">Sonuçları</span>
                        </h2>
                        <p class="mb-4">
                            Platform lansmanından 6 ay sonra elde edilen başarılı sonuçlar:
                        </p>
                        <div class="results-grid">
                            <div class="result-item glass-effect">
                                <div class="result-number accent-text">+250%</div>
                                <div class="result-label">Online Satış Artışı</div>
                            </div>
                            <div class="result-item glass-effect">
                                <div class="result-number accent-text">40%</div>
                                <div class="result-label">Dönüşüm Oranı İyileşmesi</div>
                            </div>
                            <div class="result-item glass-effect">
                                <div class="result-number accent-text">2.1s</div>
                                <div class="result-label">Ortalama Sayfa Yükleme</div>
                            </div>
                            <div class="result-item glass-effect">
                                <div class="result-number accent-text">4.8/5</div>
                                <div class="result-label">Kullanıcı Memnuniyeti</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <div class="sidebar-sticky">
                        <!-- Project Details -->
                        <div class="sidebar-widget glass-effect mb-4" data-aos="fade-left">
                            <h3 class="widget-title">Proje Detayları</h3>
                            <ul class="project-details-list">
                                <li>
                                    <span class="detail-label"><i class="fas fa-user-tie"></i> Müşteri:</span>
                                    <span class="detail-value">Premium Fashion</span>
                                </li>
                                <li>
                                    <span class="detail-label"><i class="fas fa-map-marker-alt"></i> Lokasyon:</span>
                                    <span class="detail-value">İstanbul, Türkiye</span>
                                </li>
                                <li>
                                    <span class="detail-label"><i class="fas fa-calendar-alt"></i> Başlangıç:</span>
                                    <span class="detail-value">Mayıs 2024</span>
                                </li>
                                <li>
                                    <span class="detail-label"><i class="fas fa-calendar-check"></i> Bitiş:</span>
                                    <span class="detail-value">Eylül 2024</span>
                                </li>
                                <li>
                                    <span class="detail-label"><i class="fas fa-users"></i> Ekip:</span>
                                    <span class="detail-value">8 Kişi</span>
                                </li>
                                <li>
                                    <span class="detail-label"><i class="fas fa-tag"></i> Bütçe:</span>
                                    <span class="detail-value">$75,000 - $100,000</span>
                                </li>
                            </ul>
                        </div>

                        <!-- Share -->
                        <div class="sidebar-widget glass-effect mb-4" data-aos="fade-left" data-aos-delay="100">
                            <h3 class="widget-title">Paylaş</h3>
                            <div class="share-buttons">
                                <a href="#" class="share-btn" title="Facebook">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" class="share-btn" title="Twitter">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" class="share-btn" title="LinkedIn">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="#" class="share-btn" title="Pinterest">
                                    <i class="fab fa-pinterest-p"></i>
                                </a>
                            </div>
                        </div>

                        <!-- CTA -->
                        <div class="sidebar-widget glass-effect" data-aos="fade-left" data-aos-delay="200">
                            <h3 class="widget-title">Benzer Bir Proje mi?</h3>
                            <p class="mb-4">
                                Sizin için de böyle bir çözüm geliştirebiliriz. Hemen iletişime geçin!
                            </p>
                            <a href="contact.html" class="btn btn-primary-custom w-100">
                                <span>Proje Başlat</span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Projects -->
    <section class="related-projects section-padding bg-dark-alt">
        <div class="container">
            <div class="section-header text-center mb-5" data-aos="fade-up">
                <span class="section-subtitle">Daha Fazla Proje</span>
                <h2 class="section-title">
                    İlgili <span class="accent-text">Projeler</span>
                </h2>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="portfolio-card glass-effect">
                        <div class="portfolio-img">
                            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=600&q=80" alt="CRM Sistemi" class="img-fluid">
                            <div class="portfolio-overlay">
                                <div class="portfolio-details">
                                    <h3 class="portfolio-title">Kurumsal CRM Sistemi</h3>
                                    <p class="portfolio-description">AI destekli müşteri yönetim platformu</p>
                                    <a href="portfolio-detail.html?id=4" class="portfolio-btn">
                                        Detaylar <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-category">Yazılım</div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="portfolio-card glass-effect">
                        <div class="portfolio-img">
                            <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=600&q=80" alt="SaaS Platform" class="img-fluid">
                            <div class="portfolio-overlay">
                                <div class="portfolio-details">
                                    <h3 class="portfolio-title">SaaS Platformu</h3>
                                    <p class="portfolio-description">Multi-tenant B2B SaaS çözümü</p>
                                    <a href="portfolio-detail.html?id=7" class="portfolio-btn">
                                        Detaylar <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-category">Yazılım</div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="portfolio-card glass-effect">
                        <div class="portfolio-img">
                            <img src="https://images.unsplash.com/photo-1563986768609-322da13575f3?w=600&q=80" alt="Lojistik Sistemi" class="img-fluid">
                            <div class="portfolio-overlay">
                                <div class="portfolio-details">
                                    <h3 class="portfolio-title">Lojistik Yönetim Sistemi</h3>
                                    <p class="portfolio-description">Gerçek zamanlı kargo takip platformu</p>
                                    <a href="portfolio-detail.html?id=10" class="portfolio-btn">
                                        Detaylar <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-category">Yazılım</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
