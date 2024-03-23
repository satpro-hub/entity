<?php

namespace SatproHub\Entity\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static  getName()
 * @method static  getPath()
 * @method static string|null set()
 * @method static string|null make()
 */
class EntityFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Entity';
    }
}
