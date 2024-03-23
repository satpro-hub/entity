<?php

namespace SatproHub\Entity\Services\Contract;

use SatproHub\Entity\Contracts\MakeEntityContract;
use SatproHub\Entity\Services\MakeEntity;

class MakeContract extends MakeEntity implements MakeEntityContract
{

    protected $directory = 'Contracts';
    protected $postfix = 'RepositoryContract';
    protected $type = 'interface';

    public function handle()
    {
        $content = $this->build();
        $this->createEntity($content);
    }


}
