{{-- Navigation Header Component --}}
<nav class="navbar navbar-expand-lg fixed-top" id="mainNav">
    <div class="container-fluid px-4">
        <a class="navbar-brand" href="{{ route('site.home') }}">
            <span class="brand-dbs">DBS</span>
            <span class="brand-software">Software</span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('site.home') ? 'active' : '' }}"
                        href="{{ route('site.home') }}">Anasayfa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('site.about') ? 'active' : '' }}"
                        href="{{ route('site.about') }}">Hakkımızda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('site.services') ? 'active' : '' }}"
                        href="{{ route('site.services') }}">Hizmetlerimiz</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('site.portfolio*') ? 'active' : '' }}"
                        href="{{ route('site.portfolio') }}">Portfolyo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('site.references') ? 'active' : '' }}"
                        href="{{ route('site.references') }}">Referanslar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('site.blog*') ? 'active' : '' }}"
                        href="{{ route('site.blog') }}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('site.contact') ? 'active' : '' }}"
                        href="{{ route('site.contact') }}">İletişim</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="langDropdown" role="button"
                        data-bs-toggle="dropdown">
                        <i class="fas fa-globe"></i> <span id="currentLang">TR</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#" data-lang="tr"><img src="https://flagcdn.com/w20/tr.png"
                                    alt="TR"> Türkçe</a></li>
                        <li><a class="dropdown-item" href="#" data-lang="en"><img src="https://flagcdn.com/w20/gb.png"
                                    alt="EN"> English</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
