<?php

namespace SatproHub\Entity\Services;

use SatproHub\Entity\Services\Contract\MakeContract;
use SatproHub\Entity\Services\Controller\MakeController;
use SatproHub\Entity\Services\Model\MakeModel;
use SatproHub\Entity\Services\Service\MakeService;
use SatproHub\Entity\Services\Repository\MakeRepository;

class HandleService
{
    public function handle(string $object)
    {
        (new MakeController())->handle($object);
        (new MakeModel())->handle($object);
        (new MakeService())->handle($object);
        (new MakeContract())->handle($object);
        (new MakeRepository())->handle($object);
    }
}
