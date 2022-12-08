<?php

namespace App\Entity\Animals;

use App\Entity\Products\AbstractProduct;

abstract class AbstractAnimal
{
    private static $currentId = 1;
    private int $id;
    private ?AbstractProduct $product = null;

    public function __construct()
    {
        $this->id = AbstractAnimal::$currentId;
        AbstractAnimal::$currentId++;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function __toString()
    {
        return "Неизвестное животное";
    }
}
