<?php

namespace FarhadNstu\Spirit;

use Illuminate\Support\Facades\Http;

class Spirit {
    public function justDoIt() {
        $response = Http::get('https://inspiration.goprogram.ai/');

        return $response['quote'] . ' -' . $response['author'];
    }
}
