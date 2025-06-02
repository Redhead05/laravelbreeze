<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>BAN PDM | JAWA TIMUR</title>
    <!-- Styles -->
    @include('partials.styles')
    @stack('styles')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="boxed-size">
{{--@include('partials.preloader')--}}
@include('partials.sidebar')

<div class="container-fluid">
    <div class="main-content d-flex flex-column">
        <!-- Start Header Area -->
        @include('partials.header')
        <!-- End Header Area -->

        <div class="main-content-container overflow-hidden">
                @yield('content')
        </div>

        <div class="flex-grow-1"></div>

        <!-- Start Footer Area -->
        @include('partials.footer')
        <!-- End Footer Area -->
    </div>
</div>


@include('partials.theme_settings')
@include('partials.scripts')
@stack('scripts')
</body>
</html>
