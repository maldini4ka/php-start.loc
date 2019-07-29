<?php

require_once 'Classes/MyFirstClass.php';
require_once 'Classes/Car.php';

new MyFirstClass();

$car1 = new Car();
$car2 = new Car();

var_dump($car1);
echo '<br>';
var_dump($car2);

function printCar($data) {
    echo '<pre>';
    echo print_r($data,1);
    echo '<pre>';

}



$car1->color = 'blue';
$car1->age = 2000;
$car1->doors = 5;
$car1->brand = 'audi';
$car2->doors = 5;


printCar ($car1);
printCar($car2);

echo "<h3> Авто: </h3>
Марка: {$car1->brand}
Цвет: {$car1->color}
Дверей: {$car1->doors}
Год выпуска: {$car1->age} 
";