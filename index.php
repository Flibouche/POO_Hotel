<?php

echo "<h1>Exercice de POO : Hotel</h1>";

spl_autoload_register(function ($class_name) {
    require 'classes/'. $class_name . '.php';
});

//===================== Hotels =====================// 

$hotel1 = new Hotel(1, "Hilton **** Strasbourg", "10 route de la Gare 67000 STRASBOURG", 30);
$hotel2 = new Hotel(2, "Regent **** Paris", "202 route de Colmar 75000 PARIS", 40);

//===================== Clients =====================// 

$client1 = new Client(1, "MURMANN", "Mickaël");
$client2 = new Client(2, "GIBELLO", "Virgile");

//===================== Rooms =====================//
//============= Hilton =============//

$hiltonRoom1 = new Room($hotel1, 1, 17, 2, 120);
$hiltonRoom2 = new Room($hotel1, 2, 25, 3, 200);
$hiltonRoom3 = new Room($hotel1, 3, 05, 2, 300);

//============= Regent =============//

$regentRoom1 = new Room($hotel2, 4, 24, 2, 120);
$regentRoom2 = new Room($hotel2, 5, 02, 3, 200);
$regentRoom3 = new Room($hotel2, 6, 15, 2, 300);


echo $hotel1->getInfos();

echo $client1->getInfos();
echo "<br>";
echo $hiltonRoom1->getInfos();


?>