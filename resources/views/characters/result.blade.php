@extends('layouts.index')

@section('title')
    Rick and Morty | Personaje
@endsection

@section('content')
    <h1>Resultados de búsqueda</h1>
    <ul>
        @foreach ($characters as $character)
            <li><a href="{{ route('character.show', ['id' => $character['id']]) }}">{{ $character['name'] }}</a></li>
        @endforeach
    </ul>
@endsection