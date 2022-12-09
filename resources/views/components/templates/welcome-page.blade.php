<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @hasSection('title')
            <title>@yield('title') - {{ config('app.name') }}</title>
        @else
            <title>{{ __('Bem vindo ao meu site') }}</title>
        @endif

        <!-- Favicons -->
        <link rel="shortcut icon" href="{{ url(asset('favicon.ico')) }}">

        <!-- CSS's -->
        @vite(
            [
                'assets/css/welcome-loader.css',
            ])

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>

    <body>

        <x-layouts.animations.preloader.hexagon />

            @isset($slot)
                {{ $slot }}
            @endisset

        <!-- JS's -->
        @vite(
            [
                'assets/js/welcome.js'
            ])

    </body>
</html>
