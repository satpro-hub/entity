<?php

namespace SatproHub\Entity\Services\Controller;

use Illuminate\Support\Facades\Artisan;

class MakeController
{
    public function handle(string $object)
    {
        Artisan::call('make:controller ' . $object);
    }
}
