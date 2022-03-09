<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AnimeController extends Controller
{
    public function index()
    {
        $topAnime = Http::get('https://api.jikan.moe/v4/top/anime')->json();

        return view('anime.index', compact('topAnime'));
    }
}