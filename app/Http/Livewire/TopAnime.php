<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class TopAnime extends Component
{
    public $topAnime = [];

    public function loadTopAnime()
    {
        $this->topAnime = collect(Http::get('https://api.jikan.moe/v4/top/anime')->json()['data'])
            ->take(12)
            ->all();
    }

    public function render()
    {
        return view('livewire.top-anime');
    }
}