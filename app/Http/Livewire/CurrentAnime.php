<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class CurrentAnime extends Component
{

    public $currentAnime = [];

    public function loadCurrentAnime()
    {
        $this->currentAnime = collect(Http::get('https://api.jikan.moe/v4/seasons/now')->json()['data'])
            ->take(12)
            ->all();
    }

    public function render()
    {
        return view('livewire.current-anime');
    }
}