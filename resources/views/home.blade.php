@extends('layouts.app')  <!-- Extiende del layout principal -->

@section('content')
    <div class="container">
        <h1>Listado de Discos de Vinilo</h1>

        <!-- Verifica si hay discos y los muestra -->
        @if($records->isEmpty())
            <p>No se encontraron discos de vinilo.</p>
        @else
            <ul class="list-group">
                @foreach ($records as $record)
                    <li class="list-group-item">
                        <strong>{{ $record->title }}</strong> <!-- Aquí se muestra el título del disco -->
                        <p>{{ $record->artist }}</p> <!-- Aquí se muestra el nombre del artista -->
                        <p>{{ $record->genre }}</p> <!-- Aquí se muestra el género musical -->
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
@endsection
