@extends('layouts.index')

@section('title')
    Rick and Morty | Inicio
@endsection

@section('content')
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