<?php

namespace SatproHub\Entity\Services;

//use SatproHub\Entity\Objects\Entity;
use SatproHub\Entity\Services\Contract\MakeContract;
use SatproHub\Entity\Services\Controller\MakeController;
use SatproHub\Entity\Services\Model\MakeModel;
use SatproHub\Entity\Services\Service\MakeService;
use SatproHub\Entity\Services\Repository\MakeRepository;

use SatproHub\Entity\Facades\EntityFacade as Entity;

class HandleService
{

    public static function handle(string $object)
    {
        //   $entity = new Entity($object);

        Entity::set($object);
        Entity::make('model');
        Entity::make('controller');
        Entity::make('service');
        Entity::make('contract');
        Entity::make('repository');
    }
}
