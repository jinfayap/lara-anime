<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class RecommendAnime extends Component
{
    public $recommendAnime = [];

    public function loadRecommendAnime()
    {
        $this->recommendAnime = collect(Http::get('https://api.jikan.moe/v4/recommendations/anime')->json()['data'])
            ->random(4)
            ->flatMap(function ($item) {
                return $item['entry'];
            })
            ->all();
    }

    public function render()
    {
        return view('livewire.recommend-anime');
    }
}