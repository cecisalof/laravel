<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú de Vinilos</title>
</head>
<body>
    <!-- Menú de navegación -->
    <nav>
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ url('/api/records/1') }}" target="_blank">API_records</a></li>
            <li><a href="{{ url('/api/record/1') }}" target="_blank">API_record</a></li>
            <li><a href="{{ url('/api/genre/1/1') }}" target="_blank">API_genre</a></li>
            <!-- Rutas generadas por Breeze para autenticación -->
            @if (Route::has('login'))
                @auth
                    <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li><a href="{{ route('profile.edit') }}">Profile</a></li>
                    <li><a href="{{ route('logout') }}" 
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @else
                    <li><a href="{{ route('login') }}">Login</a></li>
                    @if (Route::has('register'))
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @endif
                @endauth
            @endif
        </ul>
    </nav>

    <!-- Contenido de la página -->
    @yield('content')
</body>
</html>

