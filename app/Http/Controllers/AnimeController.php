<?php

namespace App\Http\Controllers;

use Illuminate\Http\Client\Pool;
use Illuminate\Http\Request;
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
        // dd($id);
        $anime = Http::get('https://api.jikan.moe/v4/anime/2031')->json();
        // $anime = Http::get('https://api.jikan.moe/v4/anime/2031/characters')->json();
        // $anime = Http::get('https://api.jikan.moe/v4/anime/2031/recommendations')->json();

        dump($anime);

        return view('anime.show');
    }
}