<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }} - Admin</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div x-data="{ sidebarOpen: true }" class="min-h-screen bg-gray-100">
            <div class="flex">
                <!-- Sidebar -->
                <div :class="{'w-64': sidebarOpen, 'w-20': !sidebarOpen}" class="bg-white shadow-md min-h-screen transition-all duration-300">
                    <div class="flex items-center justify-center p-4">
                        <a href="/" x-show="sidebarOpen" class="transition-opacity duration-300">
                            <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                        </a>
                    </div>
                    <nav class="mt-5">
                        <a href="{{ route('admin.blog-video.index') }}" class="flex items-center py-2.5 px-4 rounded transition duration-200 hover:bg-amber-200 {{ request()->routeIs('admin.blog-video.*') ? 'bg-amber-200' : '' }}" :class="{'justify-center': !sidebarOpen}">
                            <img src="{{ asset('assets/img/icon/crypto_icon01.svg') }}" class="h-6 w-6" alt="Blog Video">
                            <span x-show="sidebarOpen" class="ml-2 transition-opacity duration-300">Manage Blog Video</span>
                        </a>
                        <a href="{{ route('admin.manage-page.index') }}" class="flex items-center py-2.5 px-4 rounded transition duration-200 hover:bg-amber-200 {{ request()->routeIs('admin.manage-page.*') ? 'bg-amber-200' : '' }}" :class="{'justify-center': !sidebarOpen}">
                            <img src="{{ asset('assets/img/icon/crypto_icon02.svg') }}" class="h-6 w-6" alt="Page">
                            <span x-show="sidebarOpen" class="ml-2 transition-opacity duration-300">Manage Page</span>
                        </a>
                        <a href="{{ route('admin.blog-article.index') }}" class="flex items-center py-2.5 px-4 rounded transition duration-200 hover:bg-amber-200 {{ request()->routeIs('admin.blog-article.*') ? 'bg-amber-200' : '' }}" :class="{'justify-center': !sidebarOpen}">
                            <img src="{{ asset('assets/img/icon/crypto_icon03.svg') }}" class="h-6 w-6" alt="Blog Article">
                            <span x-show="sidebarOpen" class="ml-2 transition-opacity duration-300">Manage Blog Article</span>
                        </a>
                        <a href="{{ route('admin.broadcast-telegram.index') }}" class="flex items-center py-2.5 px-4 rounded transition duration-200 hover:bg-amber-200 {{ request()->routeIs('admin.broadcast-telegram.*') ? 'bg-amber-200' : '' }}" :class="{'justify-center': !sidebarOpen}">
                            <img src="{{ asset('assets/img/icon/telegram.svg') }}" class="h-6 w-6" alt="Broadcast Telegram">
                            <span x-show="sidebarOpen" class="ml-2 transition-opacity duration-300">Broadcast Telegram</span>
                        </a>
                        <a href="{{ route('admin.faq.index') }}" class="flex items-center py-2.5 px-4 rounded transition duration-200 hover:bg-amber-200 {{ request()->routeIs('admin.faq.*') ? 'bg-amber-200' : '' }}" :class="{'justify-center': !sidebarOpen}">
                            <img src="{{ asset('assets/img/icon/crypto_icon01.svg') }}" class="h-6 w-6" alt="FAQ">
                            <span x-show="sidebarOpen" class="ml-2 transition-opacity duration-300">Manage FAQ</span>
                        </a>
                    </nav>
                </div>

                <!-- Main content -->
                <div class="flex-1 flex flex-col">
                    @include('layouts.navigation')

                    <!-- Page Heading -->
                    @isset($header)
                        <header class="bg-white shadow">
                            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                                {{ $header }}
                            </div>
                        </header>
                    @endisset

                    <!-- Page Content -->
                    <main>
                        {{ $slot }}
                    </main>
                </div>
            </div>
        </div>
    @stack('scripts')
    </body>
</html>