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
        $anime = Http::get("https://api.jikan.moe/v4/anime/{$id}");

        abort_if($anime->failed(), 404);

        $anime = $anime->json()['data'];

        return view('anime.show', compact('anime', 'id'));
    }

    public function current()
    {
        return view('anime.current');
    }
}