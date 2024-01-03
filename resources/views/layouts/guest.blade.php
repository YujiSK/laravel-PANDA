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
</head>

<body class="font-sans text-gray-900 antialiased">
    <div class="h-svh flex min-h-screen flex-col items-center dark:bg-gray-900 sm:justify-center sm:bg-cyan-600">
        <div class="grid max-h-full grid-rows-3 bg-white p-6 dark:bg-gray-900 md:h-3/4 md:w-3/4 md:grid-cols-9 md:grid-rows-none md:gap-2 md:rounded-lg md:shadow-md">
            <div class="flex flex-col items-center justify-center p-6 max-md:row-span-1 md:col-span-4">
                <x-application-logo class="aspect-square max-md:h-full md:w-full" />
            </div>
            <div class="grid max-md:row-span-2 content-center md:col-span-5">{{ $slot }}</div>
        </div>
    </div>
</body>

</html>
