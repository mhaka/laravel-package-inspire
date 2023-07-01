<?php

namespace Mhaka\Inspire;

use Illuminate\Support\Facades\Http;

class Inspire
{
    public function justDoIt()
    {
        $apiKey = 'xRsLUgzeWvI+DojgYEzPRg==tUQh1Klm51vRjAUS';
        $response = Http::withHeaders([
            'X-Api-Key' => $apiKey,
        ])->get('https://api.api-ninjas.com/v1/quotes?category=happiness');
        $data = $response->json();

        return $data[0]['quote'] . ' -' . $data[0]['author'];
    }
}
