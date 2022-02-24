<?php

session_start();

if (array_key_exists('username', $_SESSION')) {
    echo    'Tai ADMIN panele';
    echo    '<br><a href=logout.php>Atsijungti</a>;
}

include '..src/Entities/Car.php';

$Car = new Car('green', '0 kmph', 10);

echo 'We are driving' . $car->getColour() . ' car<br>';
echo 'Current speed is: ' . $car->getCurrentSpeed() . '<br>';
echo 'Current mileage is: ' . $car->getMileage() . '<br>';
$amount = 10;
echo  "Let's fill " . $amount . "litres of petrol<br>";
$car->fillGasoline($amount);
$newSpeed = "50 kmph";
$car->changeColour('red')

else {
    header('location: login.html');
    }
