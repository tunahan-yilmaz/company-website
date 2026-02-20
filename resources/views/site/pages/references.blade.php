{{-- References Page --}}
@extends('site.layouts.app')

@section('title', 'Referanslar - DBS Software')
@section('meta_description', 'DBS Software Referanslar - Birlikte çalıştığımız değerli markalar.')

@section('content')
    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center" data-aos="fade-up">
                    <h1 class="page-title">
                        <span class="accent-text glow-text">Referanslarımız</span>
                    </h1>
                    <p class="page-description">
                        Dünya çapında saygın firmalarla gurur duyarak çalışıyoruz
                    </p>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('site.home') }}">Anasayfa</a></li>
                            <li class="breadcrumb-item active">Referanslar</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!-- References Section -->
    <section class="references-section section-padding">
        <div class="container">
            <div class="row g-4">
                @foreach(['Premium Corp', 'Luxury Brand', 'Elite Group', 'Star Tech', 'Excellence Inc', 'Trust Finance', 'Innovation Labs', 'Global Solutions'] as $index => $company)
                <div class="col-lg-3 col-md-4 col-6" data-aos="fade-up" data-aos-delay="{{ ($index + 1) * 50 }}">
                    <a href="#" target="_blank" class="reference-card glass-effect">
                        <div class="reference-logo">
                            <div class="logo-placeholder">
                                <i class="fas fa-{{ ['building', 'gem', 'crown', 'star', 'trophy', 'shield-alt', 'rocket', 'globe'][$index] }}"></i>
                                <span>{{ $company }}</span>
                            </div>
                        </div>
                        <div class="reference-name">{{ $company }}</div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section section-padding bg-dark-alt">
        <div class="container">
            <div class="section-header text-center mb-5" data-aos="fade-up">
                <span class="section-subtitle">Müşteri Yorumları</span>
                <h2 class="section-title">
                    Müşterilerimiz <span class="accent-text">Ne Diyor?</span>
                </h2>
            </div>

            <div class="row g-4">
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="testimonial-card glass-effect h-100">
                        <div class="testimonial-content">
                            <i class="fas fa-quote-left"></i>
                            <p>DBS Software ile çalışmak harika bir deneyimdi. Profesyonel ekipleri ve kaliteli iş anlayışları ile projemizi başarıyla tamamladık.</p>
                        </div>
                        <div class="testimonial-author">
                            <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?w=100&q=80" alt="Müşteri" class="author-img">
                            <div class="author-info">
                                <h5>Ahmet Yıldırım</h5>
                                <span>CEO, Tech Company</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="testimonial-card glass-effect h-100">
                        <div class="testimonial-content">
                            <i class="fas fa-quote-left"></i>
                            <p>Mobil uygulamamızı geliştirdikleri süre boyunca sürekli iletişimde kaldılar ve beklentilerimizin ötesinde bir ürün sundular.</p>
                        </div>
                        <div class="testimonial-author">
                            <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=100&q=80" alt="Müşteri" class="author-img">
                            <div class="author-info">
                                <h5>Elif Öztürk</h5>
                                <span>Founder, Startup</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="testimonial-card glass-effect h-100">
                        <div class="testimonial-content">
                            <i class="fas fa-quote-left"></i>
                            <p>Dijital pazarlama kampanyalarımızı yönettikleri süre boyunca satışlarımız %200 arttı. Kesinlikle tavsiye ederim.</p>
                        </div>
                        <div class="testimonial-author">
                            <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=100&q=80" alt="Müşteri" class="author-img">
                            <div class="author-info">
                                <h5>Murat Demir</h5>
                                <span>CMO, E-Commerce</span>
                            </div>
                        </div>
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
                        Siz de <span class="accent-text">Referanslarımız</span> Arasına Katılın
                    </h2>
                    <p class="lead mb-0">
                        Başarılı projelerimizin bir parçası olun ve işletmenizi dijital dünyada zirveye taşıyın.
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end mt-4 mt-lg-0" data-aos="fade-left">
                    <a href="{{ route('site.contact') }}" class="btn btn-primary-custom btn-lg">
                        <span>İletişime Geçin</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
