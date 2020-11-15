<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Service\Twitter;

class TwitterTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testTwitter()
    {

        $twitter = new Twitter();

        $res = $twitter->connect();

        $this->assertTrue($res->getStatusCode() == "200");

    }
}
