<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="api,aeronaves,aeroportos,aplicativos">
    <meta name="description" content="API.AERO é uma ferramenta destinada a facilitar a vida de quem está desenvolvendo aplicações
    para o setor aéreo">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <x-favicons></x-favicons>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Styles -->
    @livewireStyles
</head>

{{-- <body class="font-sans antialiased"> --}}
    <body class="antialiased relative h-screen bg-gray-400
    text-white bg-cover"
        style="background-image: url({{ url('storage/logos/error-background-20-white.png') }});">
    <div class="h-screen  dark:bg-gray-900">
        {{-- @livewire('navigation-menu') --}}
        <!-- Page Content -->
        <main class="h-screen dark:bg-gray-800">
            <div class="h-screen ">
            <header class="z-30 flex items-center w-full h-24 sm:h-24">
                <div class="container flex items-center justify-between px-6 mx-auto">
                    <div class="text-3xl font-black text-gray-800 uppercase ">
                        {{ env('APP_NAME') }}
                    </div>
                    <div class="flex items-center">
                        <nav
                            class="items-center hidden text-lg  uppercase font-sen  lg:flex">
                            {{-- <a href="#" class="flex px-6 py-2">
                                Sobre
                            </a> --}}
                            <a href="#documentation" class="flex px-6 py-2">
                                Documentação
                            </a>
                        </nav>
                        <button class="flex flex-col ml-4 lg:hidden">
                            <span class="w-6 h-1 mb-1 bg-gray-800 ">
                            </span>
                            <span class="w-6 h-1 mb-1 bg-gray-800 ">
                            </span>
                            <span class="w-6 h-1 mb-1 bg-gray-800 ">
                            </span>
                        </button>
                    </div>
                </div>
            </header>
            <div class="z-20 flex items-center  dark:bg-gray-800">
                <div class="container relative flex px-6 pt-10 pb-16 mx-auto">
                    <div class="relative z-20 flex flex-col sm:w-2/3 lg:w-2/5">
                        <span class="w-20 h-2 mb-12 bg-blue-800 ">
                        </span>
                        <h1
                            class="flex flex-col text-7xl font-black leading-none text-gray-800 uppercase font-bebas-neue sm:text-8xl ">
                            API
                            <span class="text-6xl sm:text-7xl text-blue-800">
                                Aero
                            </span>
                        </h1>
                        <p class="text-lg text-black sm:text-base ">
                            Ferramenta destinada a facilitar a vida de quem está desenvolvendo aplicações
                            para o setor aéreo.
                        </p>
                        <div class="flex mt-8">
                            <a href="{{ route('login') }}"
                                class="px-4 py-2 mr-4 text-white uppercase bg-blue-800 border-2 border-transparent rounded-lg text-md hover:bg-blue-400">
                                Entre
                            </a>
                            <a href="{{ route('register') }}"
                                class="px-4 py-2 text-blue-800 uppercase bg-transparent border-2 border-blue-800 rounded-lg  hover:bg-blue-800 hover:text-white text-md">
                                Registre-se
                            </a>
                        </div>
                    </div>
                    <div class="relative hidden sm:block sm:w-1/3 lg:w-3/5">
                        <img src="{{ url('storage/logos/logo-apiaero.png') }}" class="max-w-xs m-auto md:max-w-sm" />
                    </div>
                </div>
            </div>
        </div>
                @livewire('page.documentation')
        </main>
    </div>


    @stack('modals')

    @livewireScripts
</body>

</html>
