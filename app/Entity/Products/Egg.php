<?php

namespace App\Entity\Products;

class Egg extends AbstractProduct
{
    protected string $postfix = 'шт.'; 

    public function __construct()
    {
        $this->count = rand(0, 1);
    }

    public function __toString()
    {
        return "Яйцо";
    }
}
