<?php

namespace App\Service;
use Illuminate\Support\Facades\Http;


class Twitter implements ExternalApiInterface
{

    public function params()
    {
        $usernames = "2/users/by?usernames=pranayaryal,TwitterAPI,DrAtifShaikh,VPrasadMDMPH";
        $userfields = "&user.fields=description,created_at";
        $params = $usernames.$userfields;
        return $params;
    }

    public function baseUrl()
    {
        return "https://api.twitter.com/";
    }

    public function token()
    {
        return env('TWITTER_BEARER_TOKEN');
    }

    public function headers()
    {
        $headers = [
            'Authorization' => 'Bearer '.$this->token(),
            'Content-Type' => 'application/json'
        ];

        return $headers;
    }

    public function connect()
    {

        $client = new \GuzzleHttp\Client([ 'base_uri' => $this->baseUrl()]);
        $response = $client->request('GET', $this->params(), [ 'headers' => $this->headers() ]);
        return $response;

    }
}
