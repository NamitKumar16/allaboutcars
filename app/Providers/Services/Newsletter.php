<?php

namespace App\Providers\Services;

interface Newsletter
{
    public function subscribe(
        string $email,
        string $list = null
    );
}
