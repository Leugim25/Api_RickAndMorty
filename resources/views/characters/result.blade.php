@extends('layouts.index')

@section('title')
    Rick and Morty | Personaje
@endsection

@section('content')
    <a href="{{ route('index') }}" class="btn-search btn-back">Regresar</a>
    <div class="container-search">
        <img src="{{ $character['image'] }}" alt="{{ $character['name'] }}">
        <h1>{{ $character['name'] }}</h1>
        <p>Estado: {{ $character['status'] }}</p>
        <p>Especie: {{ $character['species'] }}</p>
        <p>Genero: {{ $character['gender'] }}</p>
        <p>Origen: {{ $character['origin']['name'] }}</p>
        <p>Locacion: {{ $character['location']['name'] }}</p>
    </div>
@endsection