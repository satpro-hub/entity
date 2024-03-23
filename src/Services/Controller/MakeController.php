<?php

namespace SatproHub\Entity\Services\Controller;

use Illuminate\Support\Facades\Artisan;
use SatproHub\Entity\Contracts\MakeEntityContract;
use SatproHub\Entity\Services\ArtisanEntity;

class MakeController extends ArtisanEntity implements MakeEntityContract
{
    
    public function handle()
    {
        Artisan::call('make:controller ' . $this->entity_string);
    }
}
