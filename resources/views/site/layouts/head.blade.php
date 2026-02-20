{{-- Head Component - Meta tags, CSS links, fonts --}}
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description"
    content="@yield('meta_description', 'DBS Software - Premium Yazılım ve Dijital Çözümler. 10+ yıllık deneyim ile işletmenize değer katıyoruz.')">
<meta name="keywords"
    content="@yield('meta_keywords', 'yazılım, reklam, dijital pazarlama, web tasarım, mobil uygulama')">
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>@yield('title', 'DBS Software - Premium Yazılım & Dijital Çözümler')</title>

{{-- Favicon --}}
<link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

{{-- Bootstrap CSS --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

{{-- Google Fonts --}}
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

{{-- Font Awesome --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.0/css/all.min.css">

{{-- AOS Animation --}}
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

{{-- Custom CSS --}}
<link rel="stylesheet" href="{{ asset('site/assets/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('site/assets/css/pages.css') }}">

{{-- Page Specific Styles --}}
@stack('styles')
