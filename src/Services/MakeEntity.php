<?php

namespace SatproHub\Entity\Services;

use SatproHub\Entity\Objects\Entity;
use SatproHub\Entity\Traits\BuilderTrait;

class MakeEntity
{
    use BuilderTrait;

    protected Entity $entity;
    protected $directory;
    protected $postfix;

    public function __construct(Entity $entity)
    {
        $this->entity = $entity;
    }

    protected function createEntity(string $content)
    {
        $this->createDirectoryPath()->createFile($content);
    }

    private function createDirectoryPath()
    {
        if (!file_exists($this->getDirectoryPath())) {
            mkdir($this->getDirectoryPath(), 0777, true);
        }
        return $this;
    }

    private function createFile($content)
    {
        if (!file_exists($this->getFilePath())) {
            file_put_contents($this->getFilePath(), $content);
        }
    }

    private function getDirectoryPath()
    {
        return app_path() . DIRECTORY_SEPARATOR . $this->directory . DIRECTORY_SEPARATOR . $this->entity->path;
    }

    private function getFilePath()
    {
        return $this->getDirectoryPath() . DIRECTORY_SEPARATOR . $this->entity->name . $this->postfix . ".php";
    }


}
