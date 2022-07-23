<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ env('APP_NAME') }}</title>
        @livewireStyles
        @vite('resources/js/app.js')

        @if(env('APP_ENV') == 'production') 
            <link rel="stylesheet" href="{{ asset('build/assets/app.67e1564a.css') }}">
            <script src="{{ asset('build/assets/app.334e7359.js') }}"></script>
        @else
            @vite('resources/css/app.css')
        @endif
    
    </head>
    <body class="bg-gray-200">
        <livewire:todo /> 
        @livewireScripts
    </body>
</html>
