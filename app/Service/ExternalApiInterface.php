<?php

namespace App\Service;


interface ExternalApiInterface
{
    public function token();

    public function baseUrl();

    public function params();

    public function connect();
}
