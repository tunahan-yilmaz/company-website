{{-- Contact Page --}}
@extends('site.layouts.app')

@section('title', 'İletişim - DBS Software')
@section('meta_description', 'DBS Software - İletişim. Bize ulaşın ve projenizi konuşalım.')

@section('content')
    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center" data-aos="fade-up">
                    <h1 class="page-title">
                        <span class="accent-text glow-text">İletişim</span>
                    </h1>
                    <p class="page-description">
                        Projenizi konuşalım ve hayalinizdeki dijital çözümü birlikte oluşturalım
                    </p>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('site.home') }}">Anasayfa</a></li>
                            <li class="breadcrumb-item active">İletişim</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-page section-padding">
        <div class="container">
            <div class="row g-5">
                <!-- Contact Info -->
                <div class="col-lg-5" data-aos="fade-right">
                    <div class="contact-info-wrapper">
                        <h2 class="section-title mb-4">
                            Bizimle <span class="accent-text">İletişime Geçin</span>
                        </h2>
                        <p class="lead mb-5">
                            10+ yıllık deneyimimizle işletmenizin dijital dönüşümünde yanınızdayız.
                        </p>

                        <div class="contact-cards">
                            <div class="contact-info-card glass-effect" data-aos="fade-up" data-aos-delay="100">
                                <div class="contact-icon"><i class="fas fa-map-marker-alt"></i></div>
                                <div class="contact-details">
                                    <h4>Adresimiz</h4>
                                    <p>Maslak, Büyükdere Cad. No:255<br>Sarıyer, İstanbul, Türkiye</p>
                                </div>
                            </div>

                            <div class="contact-info-card glass-effect" data-aos="fade-up" data-aos-delay="200">
                                <div class="contact-icon"><i class="fas fa-phone"></i></div>
                                <div class="contact-details">
                                    <h4>Telefonlarımız</h4>
                                    <p>
                                        <a href="tel:+902121234567">+90 212 123 45 67</a><br>
                                        <a href="tel:+905321234567">+90 532 123 45 67</a>
                                    </p>
                                </div>
                            </div>

                            <div class="contact-info-card glass-effect" data-aos="fade-up" data-aos-delay="300">
                                <div class="contact-icon"><i class="fas fa-envelope"></i></div>
                                <div class="contact-details">
                                    <h4>E-posta</h4>
                                    <p>
                                        <a href="mailto:info@dbssoftware.com">info@dbssoftware.com</a><br>
                                        <a href="mailto:support@dbssoftware.com">support@dbssoftware.com</a>
                                    </p>
                                </div>
                            </div>

                            <div class="contact-info-card glass-effect" data-aos="fade-up" data-aos-delay="400">
                                <div class="contact-icon"><i class="fas fa-clock"></i></div>
                                <div class="contact-details">
                                    <h4>Çalışma Saatleri</h4>
                                    <p>Pazartesi - Cuma: 09:00 - 18:00<br>Cumartesi: 10:00 - 16:00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="col-lg-7" data-aos="fade-left">
                    <div class="contact-form-wrapper glass-effect p-5">
                        <h3 class="mb-4">Mesaj Gönderin</h3>
                        <form id="contactForm" class="contact-form" method="POST" action="#">
                            @csrf
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Adınız *</label>
                                        <input type="text" class="form-control" name="name" required>
                                        <i class="fas fa-user form-icon"></i>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Soyadınız *</label>
                                        <input type="text" class="form-control" name="surname" required>
                                        <i class="fas fa-user form-icon"></i>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">E-posta *</label>
                                        <input type="email" class="form-control" name="email" required>
                                        <i class="fas fa-envelope form-icon"></i>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Telefon</label>
                                        <input type="tel" class="form-control" name="phone">
                                        <i class="fas fa-phone form-icon"></i>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Şirket</label>
                                        <input type="text" class="form-control" name="company">
                                        <i class="fas fa-building form-icon"></i>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Hizmet Türü *</label>
                                        <select class="form-control" name="service" required>
                                            <option value="">Seçiniz</option>
                                            <option value="software">Yazılım Geliştirme</option>
                                            <option value="advertising">Dijital Reklam</option>
                                            <option value="mobile">Mobil Uygulama</option>
                                            <option value="design">UI/UX Tasarım</option>
                                            <option value="cloud">Cloud & DevOps</option>
                                            <option value="consulting">Dijital Danışmanlık</option>
                                        </select>
                                        <i class="fas fa-briefcase form-icon"></i>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="form-label">Mesajınız *</label>
                                        <textarea class="form-control" name="message" rows="6" required></textarea>
                                        <i class="fas fa-comment form-icon"></i>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-check mb-4">
                                        <input class="form-check-input" type="checkbox" id="privacyCheck" required>
                                        <label class="form-check-label" for="privacyCheck">
                                            <a href="#">Gizlilik politikasını</a> ve <a href="#">KVKK metnini</a> okudum, kabul ediyorum.
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary-custom btn-lg w-100">
                                        <span>Mesajı Gönder</span>
                                        <i class="fas fa-paper-plane"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section" data-aos="fade-up">
        <div class="container-fluid p-0">
            <div class="map-wrapper glass-effect">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3007.875707778473!2d29.012623315397935!3d41.08572302542889!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab5f7e19e2b9b%3A0x2c0c8c7c6c0c8c7c!2sMaslak%2C%20B%C3%BCy%C3%BCkdere%20Cd.%2C%2034485%20Sar%C4%B1yer%2F%C4%B0stanbul!5e0!3m2!1str!2str!4v1620000000000!5m2!1str!2str" 
                    width="100%" 
                    height="500" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy">
                </iframe>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section section-padding bg-dark-alt">
        <div class="container">
            <div class="section-header text-center mb-5" data-aos="fade-up">
                <span class="section-subtitle">Sık Sorulan Sorular</span>
                <h2 class="section-title">
                    Merak <span class="accent-text">Edilenler</span>
                </h2>
            </div>

            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item glass-effect mb-3" data-aos="fade-up" data-aos-delay="100">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                    Proje süresi ne kadar?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Proje süresi, projenin kapsamına ve karmaşıklığına göre değişir. Basit bir web sitesi 2-4 hafta, 
                                    karmaşık bir yazılım projesi ise 3-6 ay sürebilir.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item glass-effect mb-3" data-aos="fade-up" data-aos-delay="200">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                    Fiyatlandırma nasıl yapılıyor?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Fiyatlandırma, projenin kapsamı, kullanılacak teknolojiler ve süreye göre belirlenir. 
                                    Her proje için özel teklif hazırlıyoruz.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item glass-effect mb-3" data-aos="fade-up" data-aos-delay="300">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                    Proje sonrası destek veriyor musunuz?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Evet, tüm projelerimiz için 1 yıl ücretsiz teknik destek ve bakım hizmeti sunuyoruz.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
