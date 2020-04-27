<?php
include 'Car.php';
include 'Bike.php';
include 'Skateboard.php';



$peugeot205= new Car(true);
$ghostBike = new Bike(true);
$skate = new Skateboard(false);

echo "Voiture <br><hr><br>";
echo "La vitesse de la voiture est de ".$peugeot205->getCurrentSpeed()." Km/h <br>";
$peugeot205->setCurrentSpeed(20);
echo 'la voiture roule a '. $peugeot205->getCurrentSpeed(). ' Km/h <br>';
$peugeot205->switchOn();
echo $peugeot205->getLightsStatus();
$peugeot205->switchOff();
echo $peugeot205->getLightsStatus();

echo "<br><hr></br>Velo <br><hr><br>";
echo "La vitesse du velo est de ".$ghostBike->getCurrentSpeed(). " Km/h<br>";
echo $ghostBike->getLightsStatus();
$ghostBike->switchOn();
$ghostBike->setCurrentSpeed(5);
echo "La vitesse du velo est de ".$ghostBike->getCurrentSpeed(). " Km/h<br>";
echo $ghostBike->getLightsStatus();
$ghostBike->setCurrentSpeed(10);
echo "La vitesse du velo est de ".$ghostBike->getCurrentSpeed(). " Km/h<br>";
echo $ghostBike->getLightsStatus();
$ghostBike->setCurrentSpeed(9);
echo "La vitesse du velo est de ".$ghostBike->getCurrentSpeed(). " Km/h<br>";
echo $ghostBike->getLightsStatus();

echo "<br><hr></br>Skateboard <br><hr><br>";
echo "La vitesse du skateboard est de ".$skate->getCurrentSpeed(). " Km/h<br>";
$skate->setCurrentSpeed(5);
echo "La vitesse du skateboard est de ".$skate->getCurrentSpeed(). " Km/h<br>";
