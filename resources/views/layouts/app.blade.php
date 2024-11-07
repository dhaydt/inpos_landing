<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layouts.partials.head')

    @stack('css')
</head>

<body onload="hideLoader()">
    <!-- Loader Section -->
    <div id="loader">
        <img src="assets/images/loader.svg" alt="loader" />
    </div>

    <button class="btn-wa">
        <img src="assets/images/wa.png" alt="Whatsapp">
        <span>Hubungi Kami</span>
    </button>

    <div id="content">
        @include('layouts.partials.header')

        @yield('content')

        @include('layouts.partials.footer')

    </div>

    @include('layouts.partials.foot')

    @stack('js')
</body>

</html>