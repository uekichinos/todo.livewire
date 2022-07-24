# Todo Livewire

A simple todo application with database.

Stacks:
1. laravel 9
2. lifewire
3. tailwinds
4. vite

To install make sure you have all the minimum requirement to run laravel 9 (and make sure you have the latest composer and nodejs). Once all good, just run **composer update**.

## Development
1. Run command **npm run dev**
2. Configure APP_ENV other than **production**

## Production
1. Configure APP_ENV to **production**
2. Run command **npm run build** and this should generate 3 files (and take note on last 2 files) - manifest.json, assets/app.xxxxx.css, assets/app/xxxxx.js
3. edit index.blade.php under resources/views/ and replace last 2 files under production @if

## Note
1. install laravel
2. livewire https://laravel-livewire.com/docs/2.x/quickstart
3. vite https://laravel-news.com/laravel-blade-hot-refresh-with-vite
4. tailwindcss + vite https://tailwindcss.com/docs/guides/laravel#vite

## Changes
24/07/2022 - support database, input validatation and error copywriting