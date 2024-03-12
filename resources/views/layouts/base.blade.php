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
            <!-- CSRF Token -->
            <meta name="csrf-token" content="{{ csrf_token() }}">
		<link rel="shortcut icon" href="{{ url(asset('favicon.ico')) }}">

        <tallstackui:script /> 
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        @livewireStyles      

    <body>
@include('layouts.nav')
        @yield('body')
        @livewireScripts
    </body>
</html>
