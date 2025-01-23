<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Listado de Discos de Vinilo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{-- Depurar los datos --}}
                    <!--@dump($records)-->

                    @if($records->isEmpty())
                        <p>No se encontraron discos de vinilo.</p>
                    @else
                        <ul class="list-group">
                            @foreach ($records as $record)
                                <li class="list-group-item">
                                    <div class="my-5">
                                        <a href="{{ asset('/record/' . $record->id) }}">
                                            <h1>{{ $record->title }}</h3>
                                        </a>
                                        <img src="{{ asset('storage/records/' . $record->cover_image) }}" alt="{{ $record->title }}" class="custom-image">

                                        <p>{{ $record->price }} €</p>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>