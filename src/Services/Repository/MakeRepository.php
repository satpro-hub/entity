<?php

namespace SatproHub\Entity\Services\Repository;

use SatproHub\Entity\Contracts\MakeEntityContract;
use SatproHub\Entity\Services\MakeEntity;

class MakeRepository extends MakeEntity implements MakeEntityContract
{

    protected $directory = 'Repositories';
    protected $postfix = 'Repository';
    protected $type = 'class';

    public function handle()
    {
        $content = $this->build();
        $this->createEntity($content);
    }


}
