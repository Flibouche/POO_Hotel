<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice de POO : Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>

<?php

echo "<h1>Exercice de POO : Hotel</h1>";

spl_autoload_register(function ($class_name) {
    require 'classes/'. $class_name . '.php';
});

//===================== Hotels =====================// 

$hotel1 = new Hotel(1, "Hilton **** Strasbourg", "10 route de la Gare 67000 STRASBOURG");
$hotel2 = new Hotel(2, "Regent **** Paris", "202 route de Colmar 75000 PARIS");

//===================== Clients =====================// 

$client1 = new Client(1, "MURMANN", "Mickaël");
$client2 = new Client(2, "GIBELLO", "Virgile");

//===================== Rooms =====================//
//============= Hilton =============//

$hiltonRoom1 = new Room($hotel1, 1, 17, 2, 120, false);
$hiltonRoom2 = new Room($hotel1, 2, 25, 3, 300);
$hiltonRoom3 = new Room($hotel1, 3, 05, 2, 300);
$hiltonRoom4 = new Room($hotel1, 3, 05, 3, 300);

//============= Regent =============//

$regentRoom1 = new Room($hotel2, 4, 24, 2, 120, false);
$regentRoom2 = new Room($hotel2, 5, 02, 3, 300);
$regentRoom3 = new Room($hotel2, 6, 15, 2, 300);

//===================== Booking =====================//

$booking1 = new Booking($hiltonRoom1, $client2, 1, "01-01-2021", "01-01-2021");
$booking2 = new Booking($hiltonRoom2, $client1, 2, "11-03-2021", "11-03-2021");
$booking3 = new Booking($hiltonRoom3, $client1, 3, "01-04-2021", "17-04-2021");

//===================== Actions =====================//

echo $hotel1->getInfos();
echo "<br>";
echo $hotel2->getInfos();
echo "<br>";

echo $client1->getInfos();
echo "<br>";
echo $client2->getInfos();
echo "<br>";

echo $hotel1->getInfosReservations();
echo "<br>";
echo $hotel2->getInfosReservations();
echo "<br>";

echo $hotel1->getRoomStatuts();
echo "<br>";
echo $hotel2->getRoomStatuts();

?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>