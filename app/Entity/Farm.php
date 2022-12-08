<?php

namespace App\Entity;
use App\Entity\Animals\AbstractAnimal;
use App\Entity\Animals\MakeProductInterface;
use App\Entity\Products\AbstractProduct;

class Farm
{
    private array $animals = [];
    private array $products = [];

    public function addAnimal($object) {
        if ($object instanceof AbstractAnimal) {
            $this->animals[] = $object;
        }

        return $this;
    }

    public function getAnimals()
    {
        return $this->animals;
    }

    public function addProduct($object) {        
        if ($object instanceof AbstractProduct) {
            $this->products[] = $object;
        }

        return $this;
    }

    public function getProducts()
    {
        return $this->products;
    }

    public function collectProducts()
    {
        echo "Собираем продукты \n";
        /** @var MakeProductInterface $animal */
        foreach ($this->getAnimals() as $animal) {
            if (!($animal instanceof MakeProductInterface)) {
                continue;
            }
            $animal->makeProduct();
            $this->addProduct($animal->getProduct());
        }
    }

    public function showAnimals()
    {
        $animals = [];
        /** @var AbstractAnimal $animal */
        foreach ($this->animals as $animal) {
            $key = strval($animal);
            if (!array_key_exists($key, $animals)) {
                $animals[$key] = 0;
            }
            $animals[$key]++;
        }
        echo "Животные на ферме: \n";
        foreach ($animals as $name => $count) {
            echo " - {$name}: $count \n";
        }
    }

    public function showProducts()
    {
        $products = [];
        /** @var AbstractProduct $product */
        foreach ($this->products as $product) {
            $key = strval($product);
            if (!array_key_exists($key, $products)) {
                $products[$key]['count'] = 0;
                $products[$key]['postfix'] = $product->getPostfix();
            }
            $products[$key]['count'] += $product->getCount();
        }
        echo "Продукты на ферме: \n";
        foreach ($products as $name => $data) {
            echo " - {$name}: {$data['count']} {$data['postfix']} \n";
        }
    }
}
