<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="flex flex-col h-screen justify-between bg-gray-100 pt-16">
    @if(Auth::check())
    @livewire('navigation-menu')
    @else
    <x-navigation-menu-guest />
    @endif
    <div class="mb-auto font-sans text-gray-900 antialiased">
        {{ $slot }}
    </div>
    <x-footer />

    @livewireScripts
</body>

</html>