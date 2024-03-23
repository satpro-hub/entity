<?php

namespace SatproHub\Entity;

use Illuminate\Support\ServiceProvider;
use SatproHub\Entity\Console\Commands\EntityCommand;
use SatproHub\Entity\Entity;
use SatproHub\Entity\Services\Contract\MakeContract;

class EntityServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->app->bind('Entity', function ($app) {
            return new EntityManager($app);
        });
    }

    public function register()
    {
        $this->commands([
            EntityCommand::class,
        ]);
    }
}
