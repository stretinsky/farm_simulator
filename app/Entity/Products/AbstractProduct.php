<?php

namespace App\Entity\Products;

class AbstractProduct
{
    protected int $count = 0;
    protected string $postfix = 'единиц';

    public function getCount()
    {
        return $this->count;
    }

    public function getPostfix()
    {
        return $this->postfix;
    }

    public function __toString()
    {
        return "Неизвестный продукт";
    }
}
