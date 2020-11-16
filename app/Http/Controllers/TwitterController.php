<?php

namespace App\Http\Controllers;

use App\Providers\TwitterServiceProvider;
use Illuminate\Http\Request;
use App\Service\ExternalApiInterface;
use App\Service\SocialMediaApiInterface;

class TwitterController extends Controller
{
    public function __construct(SocialMediaApiInterface $apiService)
    {
        $this->apiService = $apiService;
    }

    public function display()
    {
        $response = $this->apiService->connect();
        $response = $response->getBody();
        $res = json_decode($response, true);
        return view('twitter', ['data' => $res]);

    }
}
