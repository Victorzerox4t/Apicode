<?php

namespace App\Service;
use GuzzleHttp\Client;

class Api
{
    public $url;

    public function __construct()
    {
        $this->url = env('API_URL');
    }

    public function requestApi($method, $endpoint, $data = null){

        $header = ['Content-Type' => 'application/json'];
        $client = new Client(['base_uri' => $this->url]);

        $response = $client->request($method, $endpoint,[
            'headers' => $header,
            'json' => $data
        ])->getBody();

        return json_decode($response, true);
    }
}
