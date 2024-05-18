<?php
require_once 'animal.php';
require_once 'Frog.php';
require_once 'Ape.php';

// Release 0
$sheep = new Animal("shaun");
echo "Name: " . $sheep->name . "<br>"; // "shaun"
echo "Legs: " . $sheep->legs . "<br>"; // 4
echo "Cold blooded: " . $sheep->cold_blooded . "<br><br>"; // "no"

// Release 1
$kodok = new Frog("buduk");
echo "Name: " . $kodok->name . "<br>"; // "buduk"
echo "Legs: " . $kodok->legs . "<br>"; // 4
echo "Cold blooded: " . $kodok->cold_blooded . "<br>"; // "no"
echo "Jump:";
$kodok->jump(); // "hop hop"
echo "<br><br>";

$sungokong = new Ape("kera sakti");
echo "Name: " . $sungokong->name . "<br>"; // "kera sakti"
echo "Legs: " . $sungokong->legs . "<br>"; // 2
echo "Cold blooded: " . $sungokong->cold_blooded . "<br>"; // "no"
echo "Yell:";
$sungokong->yell(); // "Auooo"
?>