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
                                    <div class="my-5 w-4/5">
                                        <a href="{{ asset('/record/' . $record->id) }}">
                                            <h1 class="my-2">{{ $record->title }}</h3>
                                        </a>
                                        <h2 class="my-2">{{ $record->artist }}</h2>
                                        <img src="{{ asset('storage/records/' . $record->cover_image) }}" loading="lazy" alt="{{ $record->title }}" class="custom-image">
                                        <p class="my-2">{{ $record->price }} €</p>
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