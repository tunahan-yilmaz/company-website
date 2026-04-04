{{-- Footer Component --}}
<footer class="footer">
    <div class="container">
        <div class="row g-4">
            <!-- Company Info -->
            <div class="col-lg-4 col-md-6">
                <div class="footer-widget">
                    <div class="footer-logo mb-4">
                        @if($settings?->logo)
                            <img src="{{ asset('storage/'.$settings->logo) }}" alt="{{ $settings->site_name }}" style="max-height:40px;">
                        @else
                            <span class="brand-dbs">DBS</span>
                            <span class="brand-software">Software</span>
                        @endif
                    </div>
                    <p class="footer-text mb-4">
                        {{ $settings?->mini_about ?? '10+ yıllık deneyim ile premium dijital çözümler ve yazılım geliştirme konusunda lider. Markanızı geleceğe taşıyoruz.' }}
                    </p>
                    <div class="social-links">
                        @if($settings?->linkedin)
                            <a href="{{ $settings->linkedin }}" target="_blank" class="social-link"><i class="fab fa-linkedin"></i></a>
                        @endif
                        @if($settings?->twitter)
                            <a href="{{ $settings->twitter }}" target="_blank" class="social-link"><i class="fab fa-twitter"></i></a>
                        @endif
                        @if($settings?->instagram)
                            <a href="{{ $settings->instagram }}" target="_blank" class="social-link"><i class="fab fa-instagram"></i></a>
                        @endif
                        @if($settings?->facebook)
                            <a href="{{ $settings->facebook }}" target="_blank" class="social-link"><i class="fab fa-facebook"></i></a>
                        @endif
                        @if($settings?->youtube)
                            <a href="{{ $settings->youtube }}" target="_blank" class="social-link"><i class="fab fa-youtube"></i></a>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-lg-2 col-md-6">
                <div class="footer-widget">
                    <h4 class="footer-title">Hızlı Linkler</h4>
                    <ul class="footer-links">
                        <li><a href="{{ route('site.home') }}">Anasayfa</a></li>
                        <li><a href="{{ route('site.about') }}">Hakkımızda</a></li>
                        <li><a href="{{ route('site.services') }}">Hizmetlerimiz</a></li>
                        <li><a href="{{ route('site.portfolio') }}">Portfolyo</a></li>
                        <li><a href="{{ route('site.blog') }}">Blog</a></li>
                        <li><a href="{{ route('site.contact') }}">İletişim</a></li>
                    </ul>
                </div>
            </div>

            <!-- Services -->
            <div class="col-lg-3 col-md-6">
                <div class="footer-widget">
                    <h4 class="footer-title">Hizmetlerimiz</h4>
                    <ul class="footer-links">
                        <li><a href="{{ route('site.service.detail', 'yazilim-gelistirme') }}">Yazılım Geliştirme</a></li>
                        <li><a href="{{ route('site.service.detail', 'dijital-reklam') }}">Dijital Reklam</a></li>
                        <li><a href="{{ route('site.service.detail', 'mobil-uygulamalar') }}">Mobil Uygulamalar</a></li>
                        <li><a href="{{ route('site.service.detail', 'ui-ux-tasarim') }}">UI/UX Tasarım</a></li>
                        <li><a href="{{ route('site.service.detail', 'cloud-devops') }}">Cloud & DevOps</a></li>
                    </ul>
                </div>
            </div>

            <!-- Contact Info -->
            <div class="col-lg-3 col-md-6">
                <div class="footer-widget">
                    <h4 class="footer-title">İletişim Bilgileri</h4>
                    <ul class="footer-contact">
                        @if($settings?->address)
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <span>{{ $settings->address }}</span>
                        </li>
                        @endif
                        @if($settings?->phone)
                        <li>
                            <i class="fas fa-phone"></i>
                            <span><a href="tel:{{ preg_replace('/\s+/', '', $settings->phone) }}">{{ $settings->phone }}</a></span>
                        </li>
                        @endif
                        @if($settings?->whatsapp)
                        <li>
                            <i class="fab fa-whatsapp"></i>
                            <span><a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $settings->whatsapp) }}" target="_blank">WhatsApp</a></span>
                        </li>
                        @endif
                        @if($settings?->email)
                        <li>
                            <i class="fas fa-envelope"></i>
                            <span><a href="mailto:{{ $settings->email }}">{{ $settings->email }}</a></span>
                        </li>
                        @endif
                        <li>
                            <i class="fas fa-clock"></i>
                            <span>Pzt - Cum: 09:00 - 18:00</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0">&copy; {{ date('Y') }} {{ $settings?->site_name ?? 'DBS Software' }}. Tüm hakları saklıdır.</p>
                </div>
                <div class="col-md-6 text-center text-md-end mt-3 mt-md-0">
                    <ul class="footer-legal">
                        <li><a href="#">Gizlilik Politikası</a></li>
                        <li><a href="#">Kullanım Koşulları</a></li>
                        <li><a href="#">KVKK</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

{{-- Back to Top Button --}}
<button class="back-to-top" id="backToTop">
    <i class="fas fa-chevron-up"></i>
</button>
