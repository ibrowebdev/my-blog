<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- <!-- Quill CSS -->
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

<!-- Quill JS -->
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script> --}}

</head>

<body x-data="{ show: false }" x-on:open-menu.window="show=true" x-on:close-menu.window="show=false">
    <!--
  This example requires updating your template:

  ```
  <html class="h-full bg-gray-100">
  <body class="h-full">
  ```
-->
    {{-- <div x-text="show"></div> --}}
    <div class="min-h-full">
        <nav class="bg-gray-800">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                    <div class="flex items-center">
                        <a href="/" class="shrink-0 mr-10 pr-20 flex space-x-1 items-center">
                            <img src="{{ Vite::asset('resources/images/logo.png') }}" alt="">
                            <span class="text-xl text-white font-bold">Dardaa Blog</span>
                        </a>
                        <div class="hidden md:block ml-10 pl-10">
                            <div class="ml-10 flex items-baseline space-x-6">
                                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                                @auth

                                    <x-nav-link wire:navigate href="/" :page="request()->is('/')">Home</x-nav-link>
                                    <x-nav-link wire:navigate href="/author/dashboard"
                                        :page="request()->is('author/dashboard')">Dashboard</x-nav-link>
                                    <x-nav-link wire:navigate href="/author/all-post" :page="request()->is('author/all-post')">My
                                        Posts</x-nav-link>
                                @endauth
                            </div>
                        </div>
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-4 flex items-center md:ml-6">
                            @auth
                                <x-nav-link wire:navigate href="/author/create" :page="request()->is('author/create')">Create Post</x-nav-link>
                                <x-nav-link>
                                    <form action="/logout" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">Logout</button>
                                    </form>
                                </x-nav-link>
                            @endauth
                            @guest
                                <button type="button"
                                    class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                                    <span class="absolute -inset-1.5"></span>
                                    <span class="sr-only">View notifications</span>
                                    <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                        stroke="currentColor" aria-hidden="true" data-slot="icon">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                                    </svg>
                                </button>
                            @endguest

                            <!-- Profile dropdown -->
                            <div class="relative ml-3">
                                <div>
                                    <button type="button"
                                        class="relative flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                                        id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                        <span class="absolute -inset-1.5"></span>
                                        <span class="sr-only">Open user menu</span>

                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="-mr-2 flex md:hidden">
                        <!-- Mobile menu button -->
                        <button type="button" x-on:click="show = !show"
                            class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                            aria-controls="mobile-menu" aria-expanded="false" id="menu-btn">
                            <span class="absolute -inset-0.5"></span>
                            <span class="sr-only">Open main menu</span>
                            <!-- Menu open: "hidden", Menu closed: "block" -->
                            <svg class="block size-8 menu-open-icon" id="menu-open-icon" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                                data-slot="icon">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                            <!-- Menu open: "block", Menu closed: "hidden" -->
                            <svg class="hidden size-8 menu-close-icon" id="menu-close-icon" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                                data-slot="icon">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Mobile menu, show/hide based on menu state. -->

            <div x-show="show" class="md:hidden mobile-menu" id="mobile-menu">
                <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                    @auth
                        <a wire:navigate href="/author/create"
                            class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Create
                            Posts</a>
                        <a wire:navigate href="/author/dashboard"
                            class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Dashboard</a>

                        <a wire:navigate href="/author/all-post"
                            class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white"
                            aria-current="page">All Posts</a>
                        <a wire:navigate href="#"
                            class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Recent
                            Posts</a>
                        <a wire:navigate href="/about"
                            class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">About
                            Us</a>
                        <a wire:navigate href="/contact"
                            class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Contact
                            Us</a>
                        <div
                            class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">
                            <form action="/logout" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Logout</button>
                            </form>
                        </div>
                    @endauth
                    @guest
                        <a wire:navigate href="#"
                            class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white"
                            aria-current="page">Home</a>
                        <a wire:navigate href="#"
                            class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Recent
                            Posts</a>
                        <a wire:navigate href="/about"
                            class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">About
                            Us</a>
                        <a wire:navigate href="/contact"
                            class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Contact
                            Us</a>
                    @endguest

                </div>
                {{-- <div x-show="show" x-on:click="$dispatch('close-menu')"
                    class="fixed top-20 bottom-0 right-0 left-0 bg-gray-100"></div> --}}
            </div>

        </nav>

        <header class="bg-white shadow">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <x-page-heading>{{ $heading }}</x-page-heading>
            </div>
        </header>
        <main class="pt-4 mx-auto max-w-7xl px-4 py-4 sm:px-6 lg:px-8">
            {{ $slot }}
        </main>
        <footer
            class="mx-auto flex flex-col space-y-6 bg-gray-800 px-8 md:px-[70px] mt-[225px] pb-5 pt-5 admin-footer">
            <div class="flex justify-between">
                <ul class="space-y-3">
                    <li class="text-gray-400 font-bold">Our Mission</li>
                </ul>
                <ul class="flex flex-col space-y-3">
                    <li class="text-gray-400 font-bold">Terms of services</li>
                </ul>
                <ul class="flex flex-col space-y-3">
                    <li class="text-gray-400 font-bold">About Us</li>
                </ul>
                <ul class="flex flex-col space-y-3">
                    <li class="text-gray-400 font-bold">Privacy Policy</li>
                </ul>
            </div>
            <div class="self-center font-normal text-center text-xl text-indigo-600">
                &copy; 2025 <a href="https://wa.me/2347057621982" target="_blank"
                    class="text-gray-400">Ibrowebdev</a>. All Rights Reserved.
            </div>
        </footer>
    </div>

</body>

</html>
