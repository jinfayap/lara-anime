<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class AnimeRecommendations extends Component
{

    public $animeRecommendations = [];

    public $animeId = null;

    public function loadAnimeRecommendations()
    {
        $this->animeRecommendations = collect(Http::get("https://api.jikan.moe/v4/anime/{$this->animeId}/recommendations")->json()['data'])
            ->flatMap(function ($anime) {
                return array($anime['entry']);
            })
            ->all();
    }
    public function render()
    {
        return view('livewire.anime-recommendations');
    }
}