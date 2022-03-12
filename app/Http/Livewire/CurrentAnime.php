<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class CurrentAnime extends Component
{

    public $currentAnime = [];

    public $limit = null;

    public function loadCurrentAnime()
    {
        $animes = Cache::rememberForever('current-anime', function () {
            $animes = array();
            $page = 1;

            do {
                $response = Http::get('https://api.jikan.moe/v4/seasons/now?page=' . $page)->json();
                $page++;
                array_push($animes, ...$response['data']);
                sleep(4);
            } while ($response['pagination']['has_next_page']);

            return $animes;
        });


        if (!$this->limit) {
            $this->currentAnime = $animes;
        }

        $this->currentAnime = array_slice($animes, 0, $this->limit);
    }

    public function render()
    {
        return view('livewire.current-anime');
    }
}