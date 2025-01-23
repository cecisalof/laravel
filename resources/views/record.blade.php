<!-- Extiende el componente Breeze para layouts -->
<x-app-layout>
    <!-- Define la sección del encabezado -->
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <!-- Contenido principal -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div>
                        <h1 class="my-5">{{ $record->title }}</h1>
                        <p class="my-1"><strong>Artista:</strong> {{ $record->artist }}</p>
                        <p class="my-1"><strong>Género:</strong>
                        {{-- $record->genres: Devuelve una colección de géneros relacionados con el disco.--}}
                            @if($record->genres->isEmpty())
                                No tiene géneros asignados.
                            @else
                                @foreach($record->genres as $genre)
                                    {{-- Muestra el nombre del género. Añade una coma entre los géneros, excepto después del último género. --}}
                                    {{ $genre->name }}{{ !$loop->last ? ', ' : '' }}
                                @endforeach
                            @endif
                        </p>
                        <p class="my-1"><strong>Año de lanzamiento:</strong> {{ $record->release_year }}</p>
                        <p class="my-1"><strong>Estado:</strong> {{ $record->status }}</p>
                        <p class="my-1"><strong>Precio:</strong> {{ number_format($record->price, 2) }} €</p>
                        <img src="{{ asset('storage/records/' . $record->cover_image) }}" loading="lazy" alt="{{ $record->title }}" class="custom-image my-5">
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>