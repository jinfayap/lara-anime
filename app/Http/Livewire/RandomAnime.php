<?php

namespace App\Http\Livewire;

use Illuminate\Http\Client\Pool;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class RandomAnime extends Component
{

    public $randomAnime = [];

    public function loadRandomAnime()
    {
        $this->randomAnime =  collect(Http::pool(fn (Pool $pool)  =>  [
            $pool->get('https://api.jikan.moe/v4/random/anime'),
            $pool->get('https://api.jikan.moe/v4/random/anime'),
            $pool->get('https://api.jikan.moe/v4/random/anime')
        ]))->flatMap(function ($item) {

            return array($item->json()['data']);
        })->all();
    }

    public function render()
    {
        return view('livewire.random-anime');
    }
}