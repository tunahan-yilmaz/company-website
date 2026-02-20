{{-- Blog Detail Page --}}
@extends('site.layouts.app')

@section('title', 'Blog Detay - DBS Software')
@section('meta_description', 'DBS Software Blog yazısı detay sayfası.')

@section('content')
    <!-- Blog Hero -->
    <section class="project-hero">
        <div class="project-hero-bg"
             style="background-image: url('https://images.unsplash.com/photo-1677442136019-21780ecad995?w=1920&q=80');">
            <div class="project-hero-overlay"></div>
        </div>
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-lg-8" data-aos="fade-right">
                    <div class="project-hero-content">
                        <a href="blog.html" class="back-link mb-3">
                            <i class="fas fa-arrow-left"></i> Blog'a Dön
                        </a>
                        <span class="project-category-badge">Teknoloji</span>
                        <h1 class="project-hero-title">
                            Yapay Zeka ve <span class="accent-text glow-text">İşletmelerde</span> Kullanım Alanları
                        </h1>
                        <p class="project-hero-subtitle">
                            Yapay zeka teknolojilerinin işletmelere sağladığı avantajlar ve kullanım senaryoları
                            hakkında detaylı bir inceleme
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Info Bar -->
    <section class="project-info-bar">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="info-item glass-effect">
                        <div class="info-icon">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="info-content">
                            <div class="info-label">Yazar</div>
                            <div class="info-value">DBS Software</div>
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
                            <div class="info-value">15 Kasım 2024</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="info-item glass-effect">
                        <div class="info-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="info-content">
                            <div class="info-label">Okuma Süresi</div>
                            <div class="info-value">5 Dakika</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="info-item glass-effect">
                        <div class="info-icon">
                            <i class="fas fa-eye"></i>
                        </div>
                        <div class="info-content">
                            <div class="info-label">Okunma</div>
                            <div class="info-value">1,250</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Content -->
    <section class="project-content section-padding">
        <div class="container">
            <div class="row">
                <!-- Main Content -->
                <div class="col-lg-8">
                    <!-- Featured Image -->
                    <div class="content-block mb-5" data-aos="fade-up">
                        <img src="https://images.unsplash.com/photo-1677442136019-21780ecad995?w=1200&q=80"
                             alt="Yapay Zeka" class="img-fluid rounded">
                    </div>

                    <!-- Article Content -->
                    <article class="content-block mb-5" data-aos="fade-up">
                        <h2 class="content-title">
                            Yapay Zeka <span class="accent-text">Nedir?</span>
                        </h2>
                        <p class="lead mb-4">
                            Yapay zeka teknolojisi, günümüzde iş dünyasında devrim niteliğinde değişikliklere yol
                            açıyor.
                            İşletmeler, AI'ın sunduğu olanaklardan yararlanarak operasyonlarını optimize ediyor,
                            müşteri deneyimini iyileştiriyor ve rekabet avantajı elde ediyor.
                        </p>

                        <p class="mb-3">
                            Yapay zeka, makinelerin insan benzeri düşünme ve öğrenme yeteneklerini sergilemesini
                            sağlayan
                            bir teknoloji dalıdır. Machine learning, deep learning ve natural language processing gibi
                            alt dalları içerir.
                        </p>

                        <div class="challenge-item glass-effect mb-4">
                            <div class="challenge-icon">
                                <i class="fas fa-quote-left"></i>
                            </div>
                            <div class="challenge-content">
                                <p class="mb-2">
                                    "Yapay zeka, 21. yüzyılın elektriğidir. Her sektörü dönüştüren ve yeniden
                                    şekillendiren
                                    temel bir teknoloji haline geldi."
                                </p>
                                <p class="mb-0 text-muted">— Andrew Ng, AI Pioneer</p>
                            </div>
                        </div>

                        <h2 class="content-title">
                            İşletmelerde <span class="accent-text">Kullanım Alanları</span>
                        </h2>

                        <h3 class="mt-4">1. Müşteri Hizmetleri ve Chatbotlar</h3>
                        <p class="mb-3">
                            AI destekli chatbotlar, 7/24 müşteri desteği sağlayarak müşteri memnuniyetini artırır.
                            Natural language processing kullanarak müşteri sorularını anlayabilir ve uygun yanıtlar
                            verebilir.
                        </p>

                        <h3 class="mt-4">2. Veri Analizi ve Tahminleme</h3>
                        <p class="mb-3">
                            AI algoritmaları, büyük veri setlerini analiz ederek işletmelere değerli içgörüler sunar.
                            Gelecek trendlerini tahmin etmek, pazar fırsatlarını belirlemek ve risk yönetimi yapmak
                            için kullanılır.
                        </p>

                        <h3 class="mt-4">3. Süreç Otomasyonu</h3>
                        <p class="mb-4">
                            Tekrarlayan ve zaman alıcı görevlerin otomasyonu, çalışanların daha stratejik işlere
                            odaklanmasını sağlar ve operasyonel verimliliği artırır.
                        </p>
                    </article>

                    <!-- Technologies Used -->
                    <div class="content-block mb-5" data-aos="fade-up">
                        <h2 class="content-title">
                            Popüler AI <span class="accent-text">Teknolojileri</span>
                        </h2>
                        <div class="tech-stack-grid">
                            <div class="tech-stack-item glass-effect">
                                <i class="fas fa-brain"></i>
                                <span>Machine Learning</span>
                            </div>
                            <div class="tech-stack-item glass-effect">
                                <i class="fas fa-robot"></i>
                                <span>Deep Learning</span>
                            </div>
                            <div class="tech-stack-item glass-effect">
                                <i class="fas fa-comments"></i>
                                <span>NLP</span>
                            </div>
                            <div class="tech-stack-item glass-effect">
                                <i class="fas fa-eye"></i>
                                <span>Computer Vision</span>
                            </div>
                            <div class="tech-stack-item glass-effect">
                                <i class="fab fa-python"></i>
                                <span>Python</span>
                            </div>
                            <div class="tech-stack-item glass-effect">
                                <i class="fas fa-database"></i>
                                <span>TensorFlow</span>
                            </div>
                        </div>
                    </div>

                    <!-- Key Benefits -->
                    <div class="content-block mb-5" data-aos="fade-up">
                        <h2 class="content-title">
                            Öne Çıkan <span class="accent-text">Faydalar</span>
                        </h2>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="feature-box glass-effect">
                                    <i class="fas fa-check-circle accent-text"></i>
                                    <span>Artan operasyonel verimlilik</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-box glass-effect">
                                    <i class="fas fa-check-circle accent-text"></i>
                                    <span>İyileştirilmiş müşteri deneyimi</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-box glass-effect">
                                    <i class="fas fa-check-circle accent-text"></i>
                                    <span>Maliyet tasarrufu</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-box glass-effect">
                                    <i class="fas fa-check-circle accent-text"></i>
                                    <span>Daha iyi karar verme</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-box glass-effect">
                                    <i class="fas fa-check-circle accent-text"></i>
                                    <span>Rekabet avantajı</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-box glass-effect">
                                    <i class="fas fa-check-circle accent-text"></i>
                                    <span>Ölçeklenebilirlik</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Conclusion -->
                    <div class="content-block" data-aos="fade-up">
                        <h2 class="content-title">
                            <span class="accent-text">Sonuç</span>
                        </h2>
                        <p class="mb-4">
                            Yapay zeka, artık lüks değil, bir gereklilik haline gelmiştir. İşletmeler, rekabetçi
                            kalabilmek için AI teknolojilerini stratejik olarak kullanmalıdır. Doğru uygulama ve
                            sürekli öğrenme ile AI, işletmenizin büyümesinde önemli bir rol oynayabilir.
                        </p>

                        <!-- Tags -->
                        <div class="article-tags mt-5">
                            <h5>Etiketler:</h5>
                            <div class="tags-list">
                                <span class="tag">Yapay Zeka</span>
                                <span class="tag">AI</span>
                                <span class="tag">Machine Learning</span>
                                <span class="tag">İş Zekası</span>
                                <span class="tag">Teknoloji</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <div class="sidebar-sticky">
                        <!-- Author Info -->
                        <div class="sidebar-widget author-widget glass-effect mb-4" data-aos="fade-left">
                            <div class="author-card">
                                <div class="author-card-header">
                                    <div class="author-avatar-wrapper">
                                        <div class="avatar-ring"></div>
                                        <img src="https://ui-avatars.com/api/?name=DBS+Software&size=120&background=6366f1&color=fff"
                                             alt="DBS Software" class="author-avatar-img">
                                        <div class="verified-badge">
                                            <i class="fas fa-check"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="author-card-body">
                                    <h3 class="author-name">DBS Software</h3>
                                    <p class="author-role">Technology & Innovation Expert</p>
                                    <p class="author-bio">
                                        10+ yıllık deneyime sahip, teknoloji ve yazılım alanında uzman ekip. Her projede
                                        mükemmeliyeti hedefliyoruz.
                                    </p>
                                    <div class="author-stats">
                                        <div class="stat-item">
                                            <div class="stat-value">250+</div>
                                            <div class="stat-label">Makale</div>
                                        </div>
                                        <div class="stat-item">
                                            <div class="stat-value">50K</div>
                                            <div class="stat-label">Okuyucu</div>
                                        </div>
                                        <div class="stat-item">
                                            <div class="stat-value">100+</div>
                                            <div class="stat-label">Proje</div>
                                        </div>
                                    </div>
                                    <div class="author-social">
                                        <a href="#" class="social-link linkedin-link" title="LinkedIn">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                        <a href="#" class="social-link twitter-link" title="Twitter">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                        <a href="#" class="social-link github-link" title="GitHub">
                                            <i class="fab fa-github"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Share -->
                        <div class="sidebar-widget share-widget glass-effect mb-4" data-aos="fade-left"
                             data-aos-delay="100">
                            <h3 class="widget-title">
                                <i class="fas fa-share-nodes me-2"></i>Bu Yazıyı Paylaş
                            </h3>
                            <div class="share-buttons-modern">
                                <a href="#" class="share-btn-modern facebook" title="Facebook'ta Paylaş">
                                    <div class="share-btn-icon">
                                        <i class="fab fa-facebook-f"></i>
                                    </div>
                                    <div class="share-btn-text">
                                        <span class="share-label">Facebook</span>
                                        <span class="share-count">2.3K</span>
                                    </div>
                                </a>
                                <a href="#" class="share-btn-modern twitter" title="Twitter'da Paylaş">
                                    <div class="share-btn-icon">
                                        <i class="fab fa-twitter"></i>
                                    </div>
                                    <div class="share-btn-text">
                                        <span class="share-label">Twitter</span>
                                        <span class="share-count">1.8K</span>
                                    </div>
                                </a>
                                <a href="#" class="share-btn-modern linkedin" title="LinkedIn'de Paylaş">
                                    <div class="share-btn-icon">
                                        <i class="fab fa-linkedin-in"></i>
                                    </div>
                                    <div class="share-btn-text">
                                        <span class="share-label">LinkedIn</span>
                                        <span class="share-count">3.1K</span>
                                    </div>
                                </a>
                                <a href="#" class="share-btn-modern whatsapp" title="WhatsApp'ta Paylaş">
                                    <div class="share-btn-icon">
                                        <i class="fab fa-whatsapp"></i>
                                    </div>
                                    <div class="share-btn-text">
                                        <span class="share-label">WhatsApp</span>
                                        <span class="share-count">890</span>
                                    </div>
                                </a>
                            </div>
                            <div class="copy-link-wrapper mt-3">
                                <input type="text" class="copy-link-input"
                                       value="https://dbssoftware.com/blog/ai-isletmelerde-kullanim" readonly>
                                <button class="copy-link-btn" onclick="copyLink()">
                                    <i class="fas fa-copy"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Popular Posts -->
                        <div class="sidebar-widget popular-widget glass-effect" data-aos="fade-left"
                             data-aos-delay="200">
                            <h3 class="widget-title">
                                <i class="fas fa-fire me-2"></i>Popüler Yazılar
                            </h3>
                            <div class="popular-posts-modern">
                                <a href="blog-detail.html?id=2" class="popular-post-card">
                                    <div class="popular-post-image">
                                        <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?w=400&h=250&q=80"
                                             alt="Cloud Computing">
                                        <div class="popular-post-overlay">
                                            <div class="post-number">1</div>
                                        </div>
                                    </div>
                                    <div class="popular-post-details">
                                        <h6 class="popular-post-title">Cloud Computing: İşletmeler İçin Avantajları</h6>
                                        <div class="popular-post-meta">
                                            <span class="post-date">
                                                <i class="far fa-calendar-alt"></i> 10 Kas 2024
                                            </span>
                                            <span class="post-views">
                                                <i class="far fa-eye"></i> 2.3K
                                            </span>
                                        </div>
                                    </div>
                                </a>
                                <a href="blog-detail.html?id=3" class="popular-post-card">
                                    <div class="popular-post-image">
                                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=400&h=250&q=80"
                                             alt="Dijital Pazarlama">
                                        <div class="popular-post-overlay">
                                            <div class="post-number">2</div>
                                        </div>
                                    </div>
                                    <div class="popular-post-details">
                                        <h6 class="popular-post-title">2024 Dijital Pazarlama Trendleri</h6>
                                        <div class="popular-post-meta">
                                            <span class="post-date">
                                                <i class="far fa-calendar-alt"></i> 5 Kas 2024
                                            </span>
                                            <span class="post-views">
                                                <i class="far fa-eye"></i> 1.9K
                                            </span>
                                        </div>
                                    </div>
                                </a>
                                <a href="blog-detail.html?id=4" class="popular-post-card">
                                    <div class="popular-post-image">
                                        <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?w=400&h=250&q=80"
                                             alt="Blockchain">
                                        <div class="popular-post-overlay">
                                            <div class="post-number">3</div>
                                        </div>
                                    </div>
                                    <div class="popular-post-details">
                                        <h6 class="popular-post-title">Blockchain Teknolojisi ve Geleceği</h6>
                                        <div class="popular-post-meta">
                                            <span class="post-date">
                                                <i class="far fa-calendar-alt"></i> 1 Kas 2024
                                            </span>
                                            <span class="post-views">
                                                <i class="far fa-eye"></i> 1.7K
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Posts -->
    <section class="related-projects section-padding bg-dark-alt">
        <div class="container">
            <div class="section-header text-center mb-5" data-aos="fade-up">
                <span class="section-subtitle">Daha Fazla İçerik</span>
                <h2 class="section-title">
                    İlgili <span class="accent-text">Yazılar</span>
                </h2>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="portfolio-card glass-effect">
                        <div class="portfolio-img">
                            <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?w=600&q=80"
                                 alt="Cloud Computing" class="img-fluid">
                            <div class="portfolio-overlay">
                                <div class="portfolio-details">
                                    <h3 class="portfolio-title">Cloud Computing: İşletmeler İçin Avantajları</h3>
                                    <p class="portfolio-description">Bulut bilişim teknolojilerinin işletmelere sunduğu
                                        esneklik...</p>
                                    <a href="blog-detail.html?id=2" class="portfolio-btn">
                                        Devamını Oku <i class="fas fa-arrow-right"></i>
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
                            <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?w=600&q=80"
                                 alt="Blockchain" class="img-fluid">
                            <div class="portfolio-overlay">
                                <div class="portfolio-details">
                                    <h3 class="portfolio-title">Blockchain Teknolojisi ve Geleceği</h3>
                                    <p class="portfolio-description">Blockchain teknolojisinin çalışma prensibi...</p>
                                    <a href="blog-detail.html?id=4" class="portfolio-btn">
                                        Devamını Oku <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-category">Teknoloji</div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="portfolio-card glass-effect">
                        <div class="portfolio-img">
                            <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=600&q=80"
                                 alt="Mobile Development" class="img-fluid">
                            <div class="portfolio-overlay">
                                <div class="portfolio-details">
                                    <h3 class="portfolio-title">Mobil Uygulama Geliştirmede En İyi Pratikler</h3>
                                    <p class="portfolio-description">Modern mobil uygulama geliştirmede dikkat edilmesi
                                        gereken...</p>
                                    <a href="blog-detail.html?id=5" class="portfolio-btn">
                                        Devamını Oku <i class="fas fa-arrow-right"></i>
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
