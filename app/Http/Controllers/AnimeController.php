<?php

namespace App\Http\Controllers;

use Illuminate\Http\Client\Pool;
use Illuminate\Support\Facades\Http;

class AnimeController extends Controller
{
    public function index()
    {
        $currentAnime = collect(Http::get('https://api.jikan.moe/v4/seasons/now')->json()['data'])
            ->take(12)
            ->all();

        $topAnime = collect(Http::get('https://api.jikan.moe/v4/top/anime')->json()['data'])
            ->take(12)
            ->all();


        $recommendAnime = collect(Http::get('https://api.jikan.moe/v4/recommendations/anime')->json()['data'])
            ->random(4)
            ->flatMap(function ($item) {
                return $item['entry'];
            })
            ->all();

        $randomAnime =  collect(Http::pool(fn (Pool $pool)  =>  [
            $pool->get('https://api.jikan.moe/v4/random/anime'),
            $pool->get('https://api.jikan.moe/v4/random/anime'),
            $pool->get('https://api.jikan.moe/v4/random/anime')
        ]))->flatMap(function ($item) {

            return array($item->json()['data']);
        })->all();

        return view('anime.index', compact('topAnime', 'currentAnime', 'recommendAnime', 'randomAnime'));
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