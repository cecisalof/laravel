<!-- Extiende el layout principal app.blade.php -->
@extends('layouts.app')

<!-- Define la sección del encabezado que contiene el título del Dashboard -->
@section('header')
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Dashboard') }}
    </h2>
@endsection

<!-- Define el contenido principal de la página -->
@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Nos alegramos de volver a verte, :name!", ['name' => auth()->user()->name]) }}
                </div>
            </div>
        </div>
    </div>
@endsection

