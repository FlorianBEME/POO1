<?php
require_once 'Car.php';

$car = new Car('blue', 4, 'gasol');
var_dump($car);

$car->forward();
