<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ env('APP_NAME') }}</title>
        @livewireStyles
        @vite('resources/js/app.js')
        @vite('resources/css/app.css')
    </head>
    <body class="bg-gray-200">
        <livewire:todo /> 
        @livewireScripts
    </body>
</html>
