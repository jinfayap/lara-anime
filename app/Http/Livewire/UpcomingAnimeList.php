<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class UpcomingAnimeList extends Component
{

    public $upcomingAnime = [];

    public $page = 1;

    public $maxPage = 0;

    public $hasNextPage = false;

    protected $queryString = ['page' => ['except' => 1],];


    public function loadUpcomingAnime()
    {
        $response = Http::get('https://api.jikan.moe/v4/seasons/upcoming?page=' . $this->page)->json();
        $this->hasNextPage = $response['pagination']['has_next_page'];
        $this->maxPage = $response['pagination']['last_visible_page'];

        $this->upcomingAnime = $response['data'];
    }

    public function nextPage()
    {
        $this->page += 1;
        $this->loadUpcomingAnime();
    }

    public function previousPage()
    {
        $this->page -= 1;
        $this->loadUpcomingAnime();
    }

    public function render()
    {
        return view('livewire.upcoming-anime-list');
    }

    public function hasPrevPage()
    {
        return $this->page !== 1;
    }
}