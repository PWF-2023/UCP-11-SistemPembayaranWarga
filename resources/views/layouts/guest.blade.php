<!DOCTYPE html>
<html
    lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    x-data="{isDarkMode: localStorage.getItem('isDarkMode')|| localStorage.setItem('isDarkMode', 'system')}"
    x-init="$watch('isDarkMode', val => localStorage.setItem('isDarkMode', val))"
    x-bind:class="{'dark': isDarkMode === 'dark' || (isDarkMode === 'system' && window.matchMedia('(prefers-color-scheme: dark)').matches)}">

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
    </head>
    <body class="font-sans text-gray-900 antialiased  bg-gray-100 dark:bg-gray-900">
        @include('layouts.guest-navigation')
        <div class="sm:px-0 sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
            {{ $slot }}
        </div>
    </body>
</html>
