<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class AnimeCharacters extends Component
{
    public $characters = [];

    public $animeId = null;

    public function loadCharacters()
    {
        $this->characters = Http::get("https://api.jikan.moe/v4/anime/{$this->animeId}/characters")->json()['data'];
    }
    public function render()
    {
        return view('livewire.anime-characters');
    }
}