<?php

namespace App\Entity\Animals;

use App\Entity\Products\AbstractProduct;
use App\Entity\Products\Egg;

class Chiken extends AbstractAnimal implements MakeProductInterface
{
    public function makeProduct()
    {
        $this->product = new Egg();
    }

    public function getProduct()
    {
        return $this->product;
    }

    public function __toString()
    {
        return 'Курица';
    }
}
