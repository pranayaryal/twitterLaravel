<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Service\Nexmo;

class NexmoTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testNexmo()
    {
        $nexmo = new Nexmo();
        $message = [ 'to' => '15024168034', 'text' => 'This is testing'];
        $response = $nexmo->sendMessage($message);
        dd($response);
    }

    public function test_sending_sms_without_number_gives_exception()
    {
        $nexmo = new Nexmo();
        $message = [ 'to' => null, 'text' => 'This is testing'];
        $response = $nexmo->sendMessage($message);
        dd($response);

    }
}
