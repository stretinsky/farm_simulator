<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Entity\Animals\Chiken;
use App\Entity\Animals\Cow;
use App\Entity\Farm;

$farm = new Farm();

// добавляем животных
for ($i=0; $i < 20; $i++) {
    $farm->addAnimal(new Chiken());
    
    if ($i < 10) {
        $farm->addAnimal(new Cow());
    }
}

$farm->showAnimals();

for ($i=1; $i < 8; $i++) {
    echo "День {$i}: ";
    $farm->collectProducts();
}

$farm->showProducts();

echo 'Едем на рынок' . PHP_EOL;
echo 'Купили 5 кур и одну корову' . PHP_EOL;

for ($i=0; $i < 5; $i++) {
    $farm->addAnimal(new Chiken());
}
$farm->addAnimal(new Cow());

$farm->showAnimals();

for ($i=1; $i < 8; $i++) {
    echo "День {$i}: ";
    $farm->collectProducts();
}

$farm->showProducts();