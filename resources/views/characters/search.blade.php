@extends('layouts.index')

@section('title')
    Rick and Morty | Busqueda
@endsection

@section('content')

    <h1>Resultados de búsqueda...</h1>
    <a href="{{ route('index') }}" class="btn-search btn-back">Regresar</a>
    <div class="container">
        <ul>
            @foreach ($characters as $character)
                <li>
                    <a href="{{ route('show', ['id' => $character['id']]) }}"><img src="{{ $character['image'] }}" alt="{{ $character['name'] }}"></a>
                    <h2>{{ $character['name'] }}</h2>
                    <hr>
                    <p>{{ $character['species'] }}</p>
                </li>
            @endforeach
        </ul>
    </div>
@endsection