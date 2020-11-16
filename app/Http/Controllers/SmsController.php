<?php

namespace App\Http\Controllers;

use App\Mail\OrdersShipped;
use App\Service\Nexmo;
use Illuminate\Http\Request;
use App\Mail\PressedButton;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class SmsController extends Controller
{

    public function send(Request $request)
    {
        $nexmo = new Nexmo();
        $message['to'] = $request->toMessage;

    }
}
