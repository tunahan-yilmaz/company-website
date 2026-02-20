<!DOCTYPE html>
<html lang="tr">

<head>
    @include('site.layouts.head')
</head>

<body>
    {{-- Header Navigation --}}
    @include('site.layouts.header')

    {{-- Main Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('site.layouts.footer')

    {{-- Scripts --}}
    @include('site.layouts.scripts')
</body>

</html>