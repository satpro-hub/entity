<?php

namespace SatproHub\Entity\Objects;

class Entity
{
    public string $path;
    public string $name;

    public function __construct(string $string)
    {
        $separator = "/";
        $string = str_replace("\\", $separator, $string);
        $arr = explode($separator, $string);
        $this->name = ucfirst(array_pop($arr));
        foreach ($arr as &$item) {
            $item = ucfirst(strtolower($item));
        }
        $this->path = implode($separator, $arr);
    }

}
