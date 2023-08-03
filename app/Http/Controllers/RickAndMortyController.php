<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class RickAndMortyController extends Controller
{
    public function index(Request $request){
        $request = new Client();
        $response = $request->get('https://rickandmortyapi.com/api/character');
        $characters = json_decode($response->getBody(), true);

        return view('layouts.dashboard', ['characters' => $characters['results']]);
    }

    public function search(Request $request)
    {
        $client = new Client();
        $response = $client->get('https://rickandmortyapi.com/api/character', [
            'query' => ['name' => $request->input('q')]
        ]);

        $characters = json_decode($response->getBody(), true)['results'];

        return view('layouts.dashboard', ['characters' => $characters]);
    }

    public function show($id)
    {
        $client = new Client();
        $response = $client->get('https://rickandmortyapi.com/api/character/' . $id);

        $character = json_decode($response->getBody(), true);

        return view('result', ['character' => $character]);
    }
}
