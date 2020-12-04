<?php

require 'Bicycle.php';
require 'Car.php';

$bike = new Bicycle();

$car = new Car('noir','essence',2);
echo '<br> La couleur de la voiture est '.$car->getColor() . '<br>';
echo '<br> Le carburant utilise est : '. $car->getEnergy(). '<br>';
echo $car->start();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->forward();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo '<br>'.$car->brake();

$car->setColor('bleue');
echo '<br> Finalement la voiture serait plus belle en '.$car->getColor() . '<br>';
