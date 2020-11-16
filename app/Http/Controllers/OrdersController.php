<?php

namespace App\Http\Controllers;

use App\Mail\OrdersShipped;
use Illuminate\Http\Request;
use App\Mail\PressedButton;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class OrdersController extends Controller
{

    public function ship()
    {
        $request = new Request();
        $request->name = 'Pranay';

        Mail::to('drpranayaryal@gmail.com')->send(new OrdersShipped());
        return 'Your order was shipped';
    }
}
