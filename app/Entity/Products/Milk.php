<?php

namespace App\Entity\Products;

class Milk extends AbstractProduct
{   
    protected string $postfix = 'л.';

    public function __construct()
    {
        $this->count = rand(8, 12);
    }

    public function __toString()
    {
        return "Молоко";
    }
}
