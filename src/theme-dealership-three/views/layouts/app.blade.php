<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="{{ $website->general->favicon ?? '' }}">
    <meta name="description" content="{{ $website->general->tagline ?? config('app.name') }}">
    <meta name="keywords" content="{{ $website->general->keywords ?? config('app.name') }}">
    <title>
        @hasSection('title')
            @yield('title') {{ $website->general?->site_title ? '| ' . $website->general?->site_title : ''}}
        @else
            {{ $website->general->site_title ?? config('app.name') }} {{ $website->general?->tagline ? '| ' . $website->general?->tagline : '' }}
        @endif
    </title>

    {{-- swiper js css --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>



    {{-- including vite resources --}}
    @php($theme_name = \Theme::current()->name)
    @vite(["resources/themes/{$theme_name}/css/app.css", "resources/themes/{$theme_name}/js/app.js"])

    {{-- including theme style --}}
    <link rel="stylesheet" href="{{ theme_url('css/theme.css') }}">

    {{-- include custom style --}}
    @yield('custom_style')
</head>
<body>
    {{-- including header --}}
    @include('views.includes.header')

    {{-- including main content --}}
    @yield('content')

    {{-- including footer --}}
    @include('views.includes.footer')

    {{-- extra js libraries --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.1/dist/cdn.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

    @yield('custom_script')
</body>
</html>
