<div>
    <h1>{{ $record->title }}</h1>
   
    <p>Artista: {{ $record->artist }}</p>
    <p>Año de lanzamiento: {{ $record->release_year }}</p>
    <p>Estado: {{ $record->status }}</p>
    <p>Precio: {{ number_format($record->price, 2) }} €</p>
</div>
