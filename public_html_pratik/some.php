<?php
class Car
{
    public $color;
    public $type;
}

$myCar = new Car();
$myCar->color = 'red';
$myCar->type = 'sedan';

$yourCar = new Car();
$yourCar->color = 'blue';
$yourCar->type = 'suv';

$cars = array($myCar, $yourCar);

foreach ($cars as $car) {
    echo '1.This car is a ' . $car->color . ' ' . $car->type . "\n";
}
 echo '2. This car is a ' . $cars[0]->color . ' ' . $cars[1]->type . "\n";
?>