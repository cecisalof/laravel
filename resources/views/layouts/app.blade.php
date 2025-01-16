<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú de Vinilos</title>
    <!-- Agrega otros enlaces a estilos si es necesario -->
</head>
<body>
    <!-- Menú de navegación -->
    <nav>
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ url('/api/records/1') }}" target="_blank">API_records</a></li>
            <li><a href="{{ url('/api/record/1') }}" target="_blank">API_record</a></li>
            <li><a href="{{ url('/api/genre/1/1') }}" target="_blank">API_genre</a></li>
        </ul>
    </nav>

    <!-- Contenido de la página -->
    @yield('content')

</body>
</html>
