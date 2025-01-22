<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú de Vinilos</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 font-sans antialiased">
    <!-- Menú de navegación -->
    <nav class="bg-white border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <!-- Logo -->
                    <div class="shrink-0 flex items-center">
                        <a href="{{ route('home') }}" class="text-lg font-semibold text-gray-900">Home</a>
                    </div>
                    <!-- Navegación principal -->
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        <x-nav-link href="{{ asset('/api/records/1') }}" target="_blank">
                            API_records
                        </x-nav-link>
                        <x-nav-link href="{{ asset('/api/record/1') }}" target="_blank">
                            API_record
                        </x-nav-link>
                        <x-nav-link href="{{ asset('/api/genre/1/1') }}" target="_blank">
                            API_genre
                        </x-nav-link>
                    </div>
                </div>

                <!-- Opciones de usuario -->
                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    @if (Route::has('login'))
                        @auth
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 focus:outline-none focus:text-gray-700 transition duration-150 ease-in-out">
                                        <div>{{ Auth::user()->name }}</div>
                                        <div class="ml-1">
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                <path d="M5.5 7l4.5 4.5L14.5 7z" />
                                            </svg>
                                        </div>
                                    </button>
                                </x-slot>

                                <x-slot name="content">
                                    <x-dropdown-link href="{{ route('dashboard') }}">
                                        Dashboard
                                    </x-dropdown-link>
                                    <x-dropdown-link href="{{ route('profile.edit') }}">
                                        Profile
                                    </x-dropdown-link>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <x-dropdown-link href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                                            Logout
                                        </x-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-dropdown>
                        @else
                            <x-nav-link href="{{ route('login') }}">
                                Login
                            </x-nav-link>
                            @if (Route::has('register'))
                                <x-nav-link href="{{ route('register') }}">
                                    Register
                                </x-nav-link>
                            @endif
                        @endauth
                    @endif
                </div>
            </div>
        </div>
    </nav>

    <!-- Contenido de la página -->
    <main>
        {{ $slot }}
    </main>
</body>
</html>

