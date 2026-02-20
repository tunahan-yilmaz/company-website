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
                        Dünya çapında tanınan markalar ve başarılı işbirlikleri
                    </p>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="index.html">Anasayfa</a></li>
                            <li class="breadcrumb-item active">Referanslar</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="portfolio-stats section-padding">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="stat-card glass-effect text-center">
                        <div class="stat-icon">
                            <i class="fas fa-building"></i>
                        </div>
                        <div class="stat-number accent-text" data-target="200">0</div>
                        <div class="stat-label">Mutlu Müşteri</div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="stat-card glass-effect text-center">
                        <div class="stat-icon">
                            <i class="fas fa-globe-europe"></i>
                        </div>
                        <div class="stat-number accent-text" data-target="15">0</div>
                        <div class="stat-label">Ülkede Hizmet</div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="stat-card glass-effect text-center">
                        <div class="stat-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <div class="stat-number accent-text" data-target="98">0</div>
                        <div class="stat-label">Müşteri Memnuniyeti</div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="stat-card glass-effect text-center">
                        <div class="stat-icon">
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="stat-number accent-text" data-target="4.9">0</div>
                        <div class="stat-label">Ortalama Puan</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- References Section -->
    <section class="references-section section-padding bg-dark-alt">
        <div class="container">
            <div class="section-header text-center mb-5" data-aos="fade-up">
                <span class="section-subtitle">Güven Veren İşbirlikleri</span>
                <h2 class="section-title">
                    Çalıştığımız <span class="accent-text">Firmalar</span>
                </h2>
                <p class="section-description">
                    Dünya çapında saygın firmalarla gurur duyarak çalışıyoruz
                </p>
            </div>

            <!-- Reference Logos Grid -->
            <div class="row g-4">
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

                <div class="col-lg-3 col-md-4 col-6" data-aos="fade-up" data-aos-delay="500">
                    <a href="https://www.example9.com" target="_blank" class="reference-card glass-effect">
                        <div class="reference-logo">
                            <div class="logo-placeholder">
                                <i class="fas fa-laptop-code"></i>
                                <span>TechCorp International</span>
                            </div>
                        </div>
                        <div class="reference-name">TechCorp International</div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-6" data-aos="fade-up" data-aos-delay="550">
                    <a href="https://www.example10.com" target="_blank" class="reference-card glass-effect">
                        <div class="reference-logo">
                            <div class="logo-placeholder">
                                <i class="fas fa-university"></i>
                                <span>FinanceHub Bank</span>
                            </div>
                        </div>
                        <div class="reference-name">FinanceHub Bank</div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-6" data-aos="fade-up" data-aos-delay="600">
                    <a href="https://www.example11.com" target="_blank" class="reference-card glass-effect">
                        <div class="reference-logo">
                            <div class="logo-placeholder">
                                <i class="fas fa-shopping-cart"></i>
                                <span>ShopMart Retail</span>
                            </div>
                        </div>
                        <div class="reference-name">ShopMart Retail</div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-6" data-aos="fade-up" data-aos-delay="650">
                    <a href="https://www.example12.com" target="_blank" class="reference-card glass-effect">
                        <div class="reference-logo">
                            <div class="logo-placeholder">
                                <i class="fas fa-heartbeat"></i>
                                <span>HealthPlus Clinic</span>
                            </div>
                        </div>
                        <div class="reference-name">HealthPlus Clinic</div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-6" data-aos="fade-up" data-aos-delay="700">
                    <a href="https://www.example13.com" target="_blank" class="reference-card glass-effect">
                        <div class="reference-logo">
                            <div class="logo-placeholder">
                                <i class="fas fa-cloud"></i>
                                <span>CloudTech Solutions</span>
                            </div>
                        </div>
                        <div class="reference-name">CloudTech Solutions</div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-6" data-aos="fade-up" data-aos-delay="750">
                    <a href="https://www.example14.com" target="_blank" class="reference-card glass-effect">
                        <div class="reference-logo">
                            <div class="logo-placeholder">
                                <i class="fas fa-chart-bar"></i>
                                <span>InvestPro Capital</span>
                            </div>
                        </div>
                        <div class="reference-name">InvestPro Capital</div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-6" data-aos="fade-up" data-aos-delay="800">
                    <a href="https://www.example15.com" target="_blank" class="reference-card glass-effect">
                        <div class="reference-logo">
                            <div class="logo-placeholder">
                                <i class="fas fa-utensils"></i>
                                <span>FoodHub Delivery</span>
                            </div>
                        </div>
                        <div class="reference-name">FoodHub Delivery</div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-6" data-aos="fade-up" data-aos-delay="850">
                    <a href="https://www.example16.com" target="_blank" class="reference-card glass-effect">
                        <div class="reference-logo">
                            <div class="logo-placeholder">
                                <i class="fas fa-stethoscope"></i>
                                <span>MediCare Network</span>
                            </div>
                        </div>
                        <div class="reference-name">MediCare Network</div>
                    </a>
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
                        Siz de Başarı <span class="accent-text">Hikayemize Katılın</span>
                    </h2>
                    <p class="lead mb-0">
                        Projenizi birlikte başarıya taşıyalım ve mutlu müşterilerimize katılın
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end mt-4 mt-lg-0" data-aos="fade-left">
                    <a href="contact.html" class="btn btn-primary-custom btn-lg">
                        <span>Hemen Başlayın</span>
                        <i class="fas fa-rocket"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
