<?php

namespace App\Http\Controllers;

use Illuminate\Http\Client\Pool;
use Illuminate\Support\Facades\Http;

class AnimeController extends Controller
{
    public function index()
    {
        return view('anime.index');
    }

    public function show($id)
    {
        $anime = Http::get("https://api.jikan.moe/v4/anime/{$id}")->json()['data'];
        $characters = Http::get("https://api.jikan.moe/v4/anime/{$id}/characters")->json()['data'];
        // $recommendations = Http::get("https://api.jikan.moe/v4/anime/{$id}/recommendations")->json()['data'];

        $animeRecommendations = collect(Http::get("https://api.jikan.moe/v4/anime/{$id}/recommendations")->json()['data'])
            ->flatMap(function ($anime) {
                return array($anime['entry']);
            })
            ->all();

        return view('anime.show', compact('anime', 'characters', 'animeRecommendations'));
    }
}