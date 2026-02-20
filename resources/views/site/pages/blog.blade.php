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
                        Teknoloji, yazılım ve dijital dönüşüm hakkında güncel içerikler
                    </p>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="index.html">Anasayfa</a></li>
                            <li class="breadcrumb-item active">Blog</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Statistics -->
    <section class="blog-stats section-padding">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="stat-card glass-effect text-center">
                        <div class="stat-icon">
                            <i class="fas fa-newspaper"></i>
                        </div>
                        <div class="stat-number accent-text" data-target="150">0</div>
                        <div class="stat-label">Yayınlanan Makale</div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="stat-card glass-effect text-center">
                        <div class="stat-icon">
                            <i class="fas fa-eye"></i>
                        </div>
                        <div class="stat-number accent-text" data-target="50">0</div>
                        <div class="stat-label">Bin Okuyucu</div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="stat-card glass-effect text-center">
                        <div class="stat-icon">
                            <i class="fas fa-tags"></i>
                        </div>
                        <div class="stat-number accent-text" data-target="12">0</div>
                        <div class="stat-label">Kategori</div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="stat-card glass-effect text-center">
                        <div class="stat-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="stat-number accent-text" data-target="8">0</div>
                        <div class="stat-label">Yazar</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <section class="blog-section section-padding bg-dark-alt">
        <div class="container">
            <!-- Filters -->
            <div class="blog-filters text-center mb-5" data-aos="fade-up">
                <button class="filter-btn active" data-filter="all">Tümü</button>
                <button class="filter-btn" data-filter="technology">Teknoloji</button>
                <button class="filter-btn" data-filter="software">Yazılım</button>
                <button class="filter-btn" data-filter="marketing">Dijital Pazarlama</button>
                <button class="filter-btn" data-filter="trends">Trendler</button>
            </div>

            <!-- Blog Grid -->
            <div class="row g-4 blog-grid">
                <!-- Blog Post 1 -->
                <div class="col-lg-4 col-md-6 blog-item" data-category="technology" data-aos="fade-up"
                     data-aos-delay="100">
                    <article class="blog-card glass-effect h-100">
                        <div class="blog-featured-image">
                            <img src="https://images.unsplash.com/photo-1677442136019-21780ecad995?w=600&q=80"
                                 alt="Yapay Zeka" class="img-fluid">
                            <div class="blog-date-badge">
                                <span class="day">15</span>
                                <span class="month">Kas</span>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span><i class="fas fa-user"></i> DBS Software</span>
                                <span><i class="fas fa-folder"></i> Teknoloji</span>
                                <span><i class="fas fa-clock"></i> 5 dk</span>
                            </div>
                            <h3 class="blog-title">
                                <a href="{{route("site.blog.detail")}}">Yapay Zeka ve İşletmelerde Kullanım Alanları</a>
                            </h3>
                            <p class="blog-excerpt">
                                Yapay zeka teknolojilerinin işletmelere sağladığı avantajlar ve kullanım senaryoları
                                hakkında detaylı bir inceleme...
                            </p>
                            <a href="{{route("site.blog.detail")}}" class="blog-read-more">
                                Devamını Oku <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </article>
                </div>

                <!-- Blog Post 2 -->
                <div class="col-lg-4 col-md-6 blog-item" data-category="software" data-aos="fade-up"
                     data-aos-delay="200">
                    <article class="blog-card glass-effect h-100">
                        <div class="blog-featured-image">
                            <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?w=600&q=80"
                                 alt="Cloud Computing" class="img-fluid">
                            <div class="blog-date-badge">
                                <span class="day">10</span>
                                <span class="month">Kas</span>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span><i class="fas fa-user"></i> DBS Software</span>
                                <span><i class="fas fa-folder"></i> Yazılım</span>
                                <span><i class="fas fa-clock"></i> 7 dk</span>
                            </div>
                            <h3 class="blog-title">
                                <a href="blog-detail.html?id=2">Cloud Computing: İşletmeler İçin Avantajları</a>
                            </h3>
                            <p class="blog-excerpt">
                                Bulut bilişim teknolojilerinin işletmelere sunduğu esneklik, maliyet tasarrufu ve
                                ölçeklenebilirlik avantajları...
                            </p>
                            <a href="blog-detail.html?id=2" class="blog-read-more">
                                Devamını Oku <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </article>
                </div>

                <!-- Blog Post 3 -->
                <div class="col-lg-4 col-md-6 blog-item" data-category="marketing" data-aos="fade-up"
                     data-aos-delay="300">
                    <article class="blog-card glass-effect h-100">
                        <div class="blog-featured-image">
                            <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=600&q=80"
                                 alt="Dijital Pazarlama" class="img-fluid">
                            <div class="blog-date-badge">
                                <span class="day">05</span>
                                <span class="month">Kas</span>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span><i class="fas fa-user"></i> DBS Software</span>
                                <span><i class="fas fa-folder"></i> Pazarlama</span>
                                <span><i class="fas fa-clock"></i> 6 dk</span>
                            </div>
                            <h3 class="blog-title">
                                <a href="blog-detail.html?id=3">2024 Dijital Pazarlama Trendleri</a>
                            </h3>
                            <p class="blog-excerpt">
                                2024 yılında dijital pazarlama dünyasında öne çıkan trendler ve markalar için stratejik
                                öneriler...
                            </p>
                            <a href="blog-detail.html?id=3" class="blog-read-more">
                                Devamını Oku <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </article>
                </div>

                <!-- Blog Post 4 -->
                <div class="col-lg-4 col-md-6 blog-item" data-category="technology" data-aos="fade-up"
                     data-aos-delay="100">
                    <article class="blog-card glass-effect h-100">
                        <div class="blog-featured-image">
                            <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?w=600&q=80"
                                 alt="Blockchain" class="img-fluid">
                            <div class="blog-date-badge">
                                <span class="day">01</span>
                                <span class="month">Kas</span>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span><i class="fas fa-user"></i> DBS Software</span>
                                <span><i class="fas fa-folder"></i> Teknoloji</span>
                                <span><i class="fas fa-clock"></i> 8 dk</span>
                            </div>
                            <h3 class="blog-title">
                                <a href="blog-detail.html?id=4">Blockchain Teknolojisi ve Geleceği</a>
                            </h3>
                            <p class="blog-excerpt">
                                Blockchain teknolojisinin çalışma prensibi, kullanım alanları ve gelecekte bizi bekleyen
                                yenilikler...
                            </p>
                            <a href="blog-detail.html?id=4" class="blog-read-more">
                                Devamını Oku <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </article>
                </div>

                <!-- Blog Post 5 -->
                <div class="col-lg-4 col-md-6 blog-item" data-category="software" data-aos="fade-up"
                     data-aos-delay="200">
                    <article class="blog-card glass-effect h-100">
                        <div class="blog-featured-image">
                            <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=600&q=80"
                                 alt="Mobile Development" class="img-fluid">
                            <div class="blog-date-badge">
                                <span class="day">28</span>
                                <span class="month">Eki</span>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span><i class="fas fa-user"></i> DBS Software</span>
                                <span><i class="fas fa-folder"></i> Yazılım</span>
                                <span><i class="fas fa-clock"></i> 7 dk</span>
                            </div>
                            <h3 class="blog-title">
                                <a href="blog-detail.html?id=5">Mobil Uygulama Geliştirmede En İyi Pratikler</a>
                            </h3>
                            <p class="blog-excerpt">
                                Modern mobil uygulama geliştirmede dikkat edilmesi gereken temel prensipler ve best
                                practices...
                            </p>
                            <a href="blog-detail.html?id=5" class="blog-read-more">
                                Devamını Oku <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </article>
                </div>

                <!-- Blog Post 6 -->
                <div class="col-lg-4 col-md-6 blog-item" data-category="trends" data-aos="fade-up" data-aos-delay="300">
                    <article class="blog-card glass-effect h-100">
                        <div class="blog-featured-image">
                            <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?w=600&q=80"
                                 alt="Tech Trends" class="img-fluid">
                            <div class="blog-date-badge">
                                <span class="day">22</span>
                                <span class="month">Eki</span>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span><i class="fas fa-user"></i> DBS Software</span>
                                <span><i class="fas fa-folder"></i> Trendler</span>
                                <span><i class="fas fa-clock"></i> 6 dk</span>
                            </div>
                            <h3 class="blog-title">
                                <a href="blog-detail.html?id=6">2025'te İzlenmesi Gereken Teknoloji Trendleri</a>
                            </h3>
                            <p class="blog-excerpt">
                                Gelecek yıl teknoloji dünyasını şekillendirecek en önemli trendler ve işletmeler için
                                öneriler...
                            </p>
                            <a href="blog-detail.html?id=6" class="blog-read-more">
                                Devamını Oku <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </article>
                </div>

                <!-- Blog Post 7 -->
                <div class="col-lg-4 col-md-6 blog-item" data-category="software" data-aos="fade-up"
                     data-aos-delay="100">
                    <article class="blog-card glass-effect h-100">
                        <div class="blog-featured-image">
                            <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=600&q=80"
                                 alt="Web Development" class="img-fluid">
                            <div class="blog-date-badge">
                                <span class="day">18</span>
                                <span class="month">Eki</span>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span><i class="fas fa-user"></i> DBS Software</span>
                                <span><i class="fas fa-folder"></i> Yazılım</span>
                                <span><i class="fas fa-clock"></i> 9 dk</span>
                            </div>
                            <h3 class="blog-title">
                                <a href="blog-detail.html?id=7">Modern Web Geliştirme Teknikleri</a>
                            </h3>
                            <p class="blog-excerpt">
                                Web geliştirmede kullanılan en son teknolojiler, araçlar ve framework'ler hakkında
                                kapsamlı rehber...
                            </p>
                            <a href="blog-detail.html?id=7" class="blog-read-more">
                                Devamını Oku <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </article>
                </div>

                <!-- Blog Post 8 -->
                <div class="col-lg-4 col-md-6 blog-item" data-category="marketing" data-aos="fade-up"
                     data-aos-delay="200">
                    <article class="blog-card glass-effect h-100">
                        <div class="blog-featured-image">
                            <img src="https://images.unsplash.com/photo-1557804506-669a67965ba0?w=600&q=80"
                                 alt="Social Media" class="img-fluid">
                            <div class="blog-date-badge">
                                <span class="day">12</span>
                                <span class="month">Eki</span>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span><i class="fas fa-user"></i> DBS Software</span>
                                <span><i class="fas fa-folder"></i> Pazarlama</span>
                                <span><i class="fas fa-clock"></i> 5 dk</span>
                            </div>
                            <h3 class="blog-title">
                                <a href="blog-detail.html?id=8">Sosyal Medya Stratejileri 2024</a>
                            </h3>
                            <p class="blog-excerpt">
                                Başarılı sosyal medya kampanyaları için ipuçları, stratejiler ve dikkat edilmesi gereken
                                noktalar...
                            </p>
                            <a href="blog-detail.html?id=8" class="blog-read-more">
                                Devamını Oku <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </article>
                </div>

                <!-- Blog Post 9 -->
                <div class="col-lg-4 col-md-6 blog-item" data-category="technology" data-aos="fade-up"
                     data-aos-delay="300">
                    <article class="blog-card glass-effect h-100">
                        <div class="blog-featured-image">
                            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=600&q=80"
                                 alt="Cyber Security" class="img-fluid">
                            <div class="blog-date-badge">
                                <span class="day">08</span>
                                <span class="month">Eki</span>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span><i class="fas fa-user"></i> DBS Software</span>
                                <span><i class="fas fa-folder"></i> Güvenlik</span>
                                <span><i class="fas fa-clock"></i> 10 dk</span>
                            </div>
                            <h3 class="blog-title">
                                <a href="blog-detail.html?id=9">Siber Güvenlik: İşletmeler İçin Temel Rehber</a>
                            </h3>
                            <p class="blog-excerpt">
                                İşletmenizi siber tehditlerden korumak için yapmanız gerekenler ve güvenlik best
                                practices...
                            </p>
                            <a href="blog-detail.html?id=9" class="blog-read-more">
                                Devamını Oku <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </article>
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
                        Bültenimize <span class="accent-text">Abone Olun</span>
                    </h2>
                    <p class="lead mb-0">
                        Teknoloji ve yazılım dünyasındaki son gelişmelerden haberdar olun
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end mt-4 mt-lg-0" data-aos="fade-left">
                    <a href="#" class="btn btn-primary-custom btn-lg">
                        <span>Abone Ol</span>
                        <i class="fas fa-envelope"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
