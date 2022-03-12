<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Cache;
use Livewire\Component;
use Illuminate\Support\Facades\Http;

class UpcomingAnimeList extends Component
{


    public $upcomingAnime = [];

    public $winter = [];

    public $spring = [];

    public $summer = [];

    public $fall = [];

    public $chosenSeason = 'winter';

    public function loadUpcomingAnime()
    {

        $animes = Cache::rememberForever('key', function () {
            $animes = array();
            $page = 1;

            do {
                $response = Http::get('https://api.jikan.moe/v4/seasons/upcoming?page=' . $page)->json();
                $page++;
                array_push($animes, ...$response['data']);
                sleep(4);
            } while ($response['pagination']['has_next_page']);

            return $animes;
        });

        $this->winter = collect($animes)->filter(function ($item) {
            return $item['season'] == 'winter';
        })->all();

        $this->spring = collect($animes)->filter(function ($item) {
            return $item['season'] == 'spring';
        })->all();

        $this->fall = collect($animes)->filter(function ($item) {
            return $item['season'] == 'fall';
        })->all();

        $this->summer = collect($animes)->filter(function ($item) {
            return $item['season'] == 'summer';
        })->all();

        $this->upcomingAnime = $this->winter;
    }

    public function changeSeason($season)
    {
        $seasons = [
            'winter' => $this->winter,
            'spring' => $this->spring,
            'summer' => $this->summer,
            'fall' => $this->fall
        ];

        $this->upcomingAnime = $seasons[$season];

        $this->chosenSeason = $season;
    }

    public function render()
    {
        return view('livewire.upcoming-anime-list');
    }
}