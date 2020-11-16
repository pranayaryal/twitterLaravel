<?php

namespace App\Service;

use App\Models\Message;;

class Nexmo
{

    public function sendMessage($message)
    {
        try {

            $basic  = new \Nexmo\Client\Credentials\Basic(env('NEXMO_API_KEY'), env('NEXMO_API_SECRET'));
            $client = new \Nexmo\Client($basic);

            $message = $client->message()->send([
                'to' => $message['to'],
                'from' => env('NEXMO_FROM'),
                'text' => $message['text']
            ]);

            return $message;
        }


    }

}
