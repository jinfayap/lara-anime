<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class SearchDropdown extends Component
{
    public $search = "";

    public $searchResults = [];

    public function render()
    {
        if (strlen($this->search)) {
            $this->searchResults = Http::get("https://api.jikan.moe/v4/anime?q={$this->search}")->json()['data'];
        }

        return view('livewire.search-dropdown');
    }
}