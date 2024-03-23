<?php

namespace SatproHub\Entity\Services\Model;

use Illuminate\Support\Facades\Artisan;
use SatproHub\Entity\Contracts\MakeEntityContract;
use SatproHub\Entity\Services\ArtisanEntity;

class MakeModel extends ArtisanEntity implements MakeEntityContract
{

    public function handle()
    {
        Artisan::call('make:model ' . $this->entity_string);
    }

}
