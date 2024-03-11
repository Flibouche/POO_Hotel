<?php

echo "<h1>Exercice de POO : Hotel</h1>";

spl_autoload_register(function ($class_name) {
    require 'classes/'. $class_name . '.php';
});

//===================== Hotels =====================// 

$hotel1 = new Hotel("Hilton **** Strasbourg", "10 route de la Gare 67000 STRASBOURG", 30);
$hotel2 = new Hotel("Regent **** Paris", "202 route de Colmar 75000 PARIS", 40);

//===================== Clients =====================// 
$client1 = new Client("MURMANN", "Mickaël");
$client2 = new Client("GIBELLO", "Virgile");















?>