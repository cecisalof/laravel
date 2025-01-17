@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Listado de Discos de Vinilo</h1>

        @if($records->isEmpty())
            <p>No se encontraron discos de vinilo.</p>
        @else
            <ul class="list-group">
                @foreach ($records as $record)
                    <li class="list-group-item">
                        <strong>{{ $record->title }}</strong>
                        <p>{{ $record->artist }}</p>
                        <p>{{ $record->genre }}</p>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
@endsection
