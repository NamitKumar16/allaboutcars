<?php

namespace App\Providers\Services;

class ConvertKitNewsletter implements Newsletter
{
    public function subscribe(string $email, string $list = null)
    {
        // Subscribe the user with ConvertKit-specific API requests
    }
}
