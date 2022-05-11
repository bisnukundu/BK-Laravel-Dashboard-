<!DOCTYPE html>
<html :class="{ 'dark': dark }" x-data="data()" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? config('app.name', 'Laravel') }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/init-alpine.js') }}"></script>
    <style>
        [x-cloak] {
            display: none !important;
        }

    </style>
</head>

<body>
    <div x-cloak class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
        {{-- Desktop sidebar --}}
        @include('layout_files.desktop_sidebar')
        {{-- Mobile sidebar --}}
        @include('layout_files.mobile_sidebar')
        <div class="flex flex-col flex-1 w-full">
            {{-- Header --}}
            @include('layout_files.header')
            <main class="h-full overflow-y-auto">
                <div class="container px-6 mx-auto grid">
                    {{$slot}}
                </div>
            </main>
        </div>
    </div>
    @livewireScripts
    <x-livewire-alert::scripts />
    @livewire('livewire-ui-modal')
</body>

</html>
