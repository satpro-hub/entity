<?php

namespace SatproHub\Entity\Services\Model;

use Illuminate\Support\Facades\Artisan;
use SatproHub\Entity\Contracts\MakeEntityContract;

class MakeModel implements MakeEntityContract
{
    public function handle(string $object)
    {
        Artisan::call('make:model ' . $object);
    }
}
