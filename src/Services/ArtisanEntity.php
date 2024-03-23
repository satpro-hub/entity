<?php

namespace SatproHub\Entity\Services;

class ArtisanEntity
{
    protected string $entity_string;

    public function __construct(string $entity_string)
    {
        $this->entity_string = $entity_string;
    }

}
