<?php

namespace App\Entity\Animals;
use App\Entity\Products\Milk;

class Cow extends AbstractAnimal implements MakeProductInterface
{
    public function makeProduct()
    {
        $this->product = new Milk();
    }
    
    public function getProduct()
    {
        return $this->product;
    }

    public function __toString()
    {
        return 'Корова';
    }
}
