<?php

namespace App\Service;


interface SocialMediaApiInterface
{
    public function token();

    public function baseUrl();

    public function params();

    public function connect();
}
