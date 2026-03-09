<!--  BEGIN SIDEBAR  -->
<div class="sidebar-wrapper sidebar-theme">
    <nav id="sidebar">
        <div class="shadow-bottom"></div>
        <ul class="list-unstyled menu-categories" id="accordionExample">

            {{-- Kurumsal --}}
            <li class="menu">
                <a href="#about" data-active="false" data-toggle="collapse" aria-expanded="false"
                    class="dropdown-toggle">
                    <div class="">
                        <span class="material-icons">business</span>
                        <span>Kurumsal</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="about" data-parent="#accordionExample">
                    <li>
                        <a href="{{ route('about.index') }}">Hakkımızda</a>
                    </li>
                </ul>
            </li>

            {{-- Slider --}}
            <li class="menu">
                <a href="#slider" data-active="false" data-toggle="collapse" aria-expanded="false"
                    class="dropdown-toggle">
                    <div class="">
                        <span class="material-icons">slideshow</span>
                        <span>Slider Yönetimi</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="slider" data-parent="#accordionExample">
                    <li>
                        <a href="{{ route('sliders.index') }}">Sliderlar</a>
                    </li>
                    <li>
                        <a href="{{ route('sliders.create') }}">Slider Ekle</a>
                    </li>
                </ul>
            </li>

            {{-- Hizmetler --}}
            <li class="menu">
                <a href="#services" data-active="false" data-toggle="collapse" aria-expanded="false"
                    class="dropdown-toggle">
                    <div class="">
                        <span class="material-icons">miscellaneous_services</span>
                        <span>Hizmet Yönetimi</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="services" data-parent="#accordionExample">
                    <li>
                        <a href="{{ route('services.index') }}">Hizmetler</a>
                    </li>
                    <li>
                        <a href="{{ route('services.create') }}">Hizmet Ekle</a>
                    </li>
                </ul>
            </li>

            {{-- Portfolyo --}}
            <li class="menu">
                <a href="#portfolio" data-active="false" data-toggle="collapse" aria-expanded="false"
                    class="dropdown-toggle">
                    <div class="">
                        <span class="material-icons">inventory</span>
                        <span>Portfolyo Yönetimi</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="portfolio" data-parent="#accordionExample">
                    <li>
                        <a href="{{ route('portfolio-categories.index') }}">Kategoriler</a>
                    </li>
                    <li>
                        <a href="{{ route('portfolio-categories.create') }}">Kategori Ekle</a>
                    </li>
                    <li>
                        <a href="{{ route('portfolios.index') }}">Portfolyolar</a>
                    </li>
                    <li>
                        <a href="{{ route('portfolios.create') }}">Portfolyo Ekle</a>
                    </li>
                </ul>
            </li>

            {{-- Blog --}}
            <li class="menu">
                <a href="#blogs" data-active="false" data-toggle="collapse" aria-expanded="false"
                    class="dropdown-toggle">
                    <div class="">
                        <span class="material-icons">edit</span>
                        <span>Blog Yönetimi</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="blogs" data-parent="#accordionExample">
                    <li>
                        <a href="{{ route('blogs.index') }}">Bloglar</a>
                    </li>
                    <li>
                        <a href="{{ route('blogs.create') }}">Blog Ekle</a>
                    </li>
                </ul>
            </li>

            {{-- Referanslar --}}
            <li class="menu">
                <a href="#references" data-active="false" data-toggle="collapse" aria-expanded="false"
                    class="dropdown-toggle">
                    <div class="">
                        <span class="material-icons">star</span>
                        <span>Referans Yönetimi</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="references" data-parent="#accordionExample">
                    <li>
                        <a href="{{ route('references.index') }}">Referanslar</a>
                    </li>
                    <li>
                        <a href="{{ route('references.create') }}">Referans Ekle</a>
                    </li>
                </ul>
            </li>

            {{-- Ekip --}}
            <li class="menu">
                <a href="#team" data-active="false" data-toggle="collapse" aria-expanded="false"
                    class="dropdown-toggle">
                    <div class="">
                        <span class="material-icons">group</span>
                        <span>Ekip Yönetimi</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="team" data-parent="#accordionExample">
                    <li>
                        <a href="{{ route('team.index') }}">Ekip Üyeleri</a>
                    </li>
                    <li>
                        <a href="{{ route('team.create') }}">Ekip Üyesi Ekle</a>
                    </li>
                </ul>
            </li>

            {{-- Timeline --}}
            <li class="menu">
                <a href="#timeline" data-active="false" data-toggle="collapse" aria-expanded="false"
                    class="dropdown-toggle">
                    <div class="">
                        <span class="material-icons">history</span>
                        <span>Timeline Yönetimi</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="timeline" data-parent="#accordionExample">
                    <li>
                        <a href="{{ route('timeline.index') }}">Timeline Olayları</a>
                    </li>
                    <li>
                        <a href="{{ route('timeline.create') }}">Olay Ekle</a>
                    </li>
                </ul>
            </li>

            {{-- Mesajlar --}}
            <li class="menu">
                <a href="{{ route('contactMessages.index') }}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <span class="material-icons">mail</span>
                        <span>İletişim Mesajları</span>
                    </div>
                </a>
            </li>

            {{-- Ayarlar --}}
            <li class="menu">
                <a href="{{ route('settings.index') }}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <span class="material-icons">settings</span>
                        <span>Genel Ayarlar</span>
                    </div>
                </a>
            </li>

            {{-- Çıkış --}}
            <li class="menu">
                <a href="{{ route('admin.logout') }}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <span class="material-icons">logout</span>
                        <span>Çıkış Yap</span>
                    </div>
                </a>
            </li>

        </ul>
    </nav>
</div>
<!--  END SIDEBAR  -->