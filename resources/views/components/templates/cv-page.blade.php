<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @hasSection('title')
            <title>@yield('title') - {{ config('app.name') }}</title>
        @else
            <title>{{ config('app.name') }}</title>
        @endif

        <!-- Favicons -->
        <link rel="shortcut icon" href="{{ url(asset('favicon.ico')) }}">
        <link rel="stylesheet" href="{{ url('assets/css/cklfp-loader.css') }}">

        <!-- SCSS's -->
        {{-- @vite(
            [
                'resources/sass/cklfp-loader.scss',
            ]) --}}

        @livewireStyles

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>

    <body>

        <x-layouts.animations.preloader.hexagon />

            @isset($slot)
                {{ $slot }}
            @endisset

        @livewireScripts
        <!-- JS's -->
        <script src="{{ url('assets/js/cklfp.js') }}"></script>
        {{-- @vite(
            [
                'resources/js/cklfp.js'
            ]) --}}

    </body>
</html>
