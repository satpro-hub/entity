<?php

namespace SatproHub\Entity;

use Illuminate\Support\ServiceProvider;
use SatproHub\Entity\Console\Commands\EntityCommand;

class EntityServiceProvider extends ServiceProvider
{
    public function boot()
    {

    }

    public function register()
    {
        $this->commands([
            EntityCommand::class,
        ]);
    }
}