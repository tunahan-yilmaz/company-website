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
                            Projeniz hakkında konuşalım ve size en uygun çözümü sunalım.
                        </p>

                        <!-- Contact Cards -->
                        <div class="contact-cards">
                            <div class="contact-info-card glass-effect" data-aos="fade-up" data-aos-delay="100">
                                <div class="contact-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="contact-details">
                                    <h4>Adresimiz</h4>
                                    <p>{{ $settings?->address ?? 'Maslak, Büyükdere Cad. No:255, Sarıyer, İstanbul, Türkiye' }}</p>
                                </div>
                            </div>

                            <div class="contact-info-card glass-effect" data-aos="fade-up" data-aos-delay="200">
                                <div class="contact-icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="contact-details">
                                    <h4>Telefonlarımız</h4>
                                    <p>
                                        @if($settings?->phone)
                                            <a href="tel:{{ preg_replace('/\s+/', '', $settings->phone) }}">{{ $settings->phone }}</a>
                                        @else
                                            +90 212 123 45 67
                                        @endif
                                        @if($settings?->whatsapp)
                                            <br><a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $settings->whatsapp) }}" target="_blank"><i class="fab fa-whatsapp"></i> WhatsApp</a>
                                        @endif
                                    </p>
                                </div>
                            </div>

                            <div class="contact-info-card glass-effect" data-aos="fade-up" data-aos-delay="300">
                                <div class="contact-icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="contact-details">
                                    <h4>E-posta</h4>
                                    <p>
                                        @if($settings?->email)
                                            <a href="mailto:{{ $settings->email }}">{{ $settings->email }}</a>
                                        @else
                                            info@dbssoftware.com
                                        @endif
                                    </p>
                                </div>
                            </div>

                            <div class="contact-info-card glass-effect" data-aos="fade-up" data-aos-delay="400">
                                <div class="contact-icon">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div class="contact-details">
                                    <h4>Çalışma Saatleri</h4>
                                    <p>
                                        Pazartesi - Cuma: 09:00 - 18:00<br>
                                        Cumartesi: 10:00 - 16:00<br>
                                        Pazar: Kapalı
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Social Links -->
                        <div class="contact-social mt-5" data-aos="fade-up" data-aos-delay="500">
                            <h4 class="mb-3">Sosyal Medya</h4>
                            <div class="social-links">
                                @if($settings?->linkedin)<a href="{{ $settings->linkedin }}" target="_blank" class="social-link"><i class="fab fa-linkedin"></i></a>@endif
                                @if($settings?->twitter)<a href="{{ $settings->twitter }}" target="_blank" class="social-link"><i class="fab fa-twitter"></i></a>@endif
                                @if($settings?->instagram)<a href="{{ $settings->instagram }}" target="_blank" class="social-link"><i class="fab fa-instagram"></i></a>@endif
                                @if($settings?->facebook)<a href="{{ $settings->facebook }}" target="_blank" class="social-link"><i class="fab fa-facebook"></i></a>@endif
                                @if($settings?->youtube)<a href="{{ $settings->youtube }}" target="_blank" class="social-link"><i class="fab fa-youtube"></i></a>@endif
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="col-lg-7" data-aos="fade-left">
                    <div class="contact-form-wrapper glass-effect p-5">
                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        <h3 class="mb-4">Mesaj Gönderin</h3>
                        <form id="contactForm" class="contact-form" action="{{ route('site.contact.store') }}" method="POST">
                            @csrf
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Adınız *</label>
                                        <input type="text" class="form-control" name="name" value="{{ old('name') }}" required>
                                        <i class="fas fa-user form-icon"></i>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Soyadınız</label>
                                        <input type="text" class="form-control" name="surname" value="{{ old('surname') }}">
                                        <i class="fas fa-user form-icon"></i>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">E-posta *</label>
                                        <input type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                        <i class="fas fa-envelope form-icon"></i>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Telefon</label>
                                        <input type="tel" class="form-control" name="phone" value="{{ old('phone') }}">
                                        <i class="fas fa-phone form-icon"></i>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Şirket</label>
                                        <input type="text" class="form-control" name="company" value="{{ old('company') }}">
                                        <i class="fas fa-building form-icon"></i>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Hizmet Türü</label>
                                        <select class="form-control" name="service">
                                            <option value="">Seçiniz</option>
                                            <option value="Yazılım Geliştirme" {{ old('service') == 'Yazılım Geliştirme' ? 'selected' : '' }}>Yazılım Geliştirme</option>
                                            <option value="Dijital Reklam" {{ old('service') == 'Dijital Reklam' ? 'selected' : '' }}>Dijital Reklam</option>
                                            <option value="Mobil Uygulama" {{ old('service') == 'Mobil Uygulama' ? 'selected' : '' }}>Mobil Uygulama</option>
                                            <option value="UI/UX Tasarım" {{ old('service') == 'UI/UX Tasarım' ? 'selected' : '' }}>UI/UX Tasarım</option>
                                            <option value="Cloud & DevOps" {{ old('service') == 'Cloud & DevOps' ? 'selected' : '' }}>Cloud & DevOps</option>
                                            <option value="Dijital Danışmanlık" {{ old('service') == 'Dijital Danışmanlık' ? 'selected' : '' }}>Dijital Danışmanlık</option>
                                        </select>
                                        <i class="fas fa-briefcase form-icon"></i>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="form-label">Mesajınız *</label>
                                        <textarea class="form-control" name="message" rows="6" required>{{ old('message') }}</textarea>
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
                    src="{{ $settings?->map_frame ?: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3007.875707778473!2d29.012623315397935!3d41.08572302542889!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab5f7e19e2b9b%3A0x2c0c8c7c6c0c8c7c!2sMaslak!5e0!3m2!1str!2str' }}"
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
                        @forelse($faqs as $i => $faq)
                        <div class="accordion-item glass-effect mb-3" data-aos="fade-up" data-aos-delay="{{ ($i + 1) * 100 }}">
                            <h2 class="accordion-header">
                                <button class="accordion-button {{ $i !== 0 ? 'collapsed' : '' }}" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq{{ $faq->id }}">
                                    {{ $faq->question }}
                                </button>
                            </h2>
                            <div id="faq{{ $faq->id }}" class="accordion-collapse collapse {{ $i === 0 ? 'show' : '' }}"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    {{ $faq->answer }}
                                </div>
                            </div>
                        </div>
                        @empty
                            <p class="text-center text-muted">Henüz soru eklenmemiş.</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
