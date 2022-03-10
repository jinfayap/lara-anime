<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AnimeController extends Controller
{
    public function index()
    {
        $topAnime = Http::get('https://api.jikan.moe/v4/seasons/now')->json();
        // dd($topAnime);

        return view('anime.index', compact('topAnime'));
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