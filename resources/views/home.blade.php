@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Listado de Discos de Vinilo</h1>

        @if($records->isEmpty())
            <p>No se encontraron discos de vinilo.</p>
        @else
            <ul class="list-group">
            @foreach ($records as $record)
                <div>
                    <a href="{{ asset('/record/' . $record->id) }}">
                        <h3>{{ $record->title }}</h3>
                    </a>
                    <img src="{{ asset('storage/records/' . $record->cover_image) }}" alt="{{ $record->title }}">

                    <p>{{ $record->price }} €</p>
                </div>
            @endforeach
            </ul>
        @endif
    </div>
@endsection
