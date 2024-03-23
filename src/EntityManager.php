<?php

namespace SatproHub\Entity;

use SatproHub\Entity\Objects\Entity;
use SatproHub\Entity\Services\Contract\MakeContract;
use SatproHub\Entity\Services\Controller\MakeController;
use SatproHub\Entity\Services\Model\MakeModel;
use SatproHub\Entity\Services\Repository\MakeRepository;
use SatproHub\Entity\Services\Service\MakeService;

class EntityManager
{
    private static $entity;
    private static $entity_string;
    private $app;

    public function __construct($app)
    {
        $this->app = $app;
    }

    public static function set(string $string)
    {
        self::$entity_string = $string;
        self::$entity = new Entity($string);
    }

    public static function make(string $type)
    {
        switch ($type) {
            case 'model':
                $obj = new MakeModel(self::$entity_string);
                break;
            case 'controller':
                $obj = new MakeController(self::$entity_string);
                break;
            case 'service':
                $obj = new MakeService(self::$entity);
                break;
            case 'contract':
                $obj = new MakeContract(self::$entity);
                break;
            case 'repository':
                $obj = new MakeRepository(self::$entity);
                break;
        }
        return $obj->handle();
    }

    public static function getName()
    {
        return self::$entity->name;
    }

    public static function getPath()
    {
        return self::$entity->name->path;
    }

}
