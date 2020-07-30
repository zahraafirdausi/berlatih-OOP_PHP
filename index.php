<?php
require_once 'animal.php';
require_once 'Frog.php';
require_once 'Ape.php';

$sheep = new Animal("shaun");
echo $sheep->name . "<br>"; // "shaun"
echo $sheep->get_legs() . "<br>"; // 2
echo $sheep->get_cold_blooded() . "<br><br>"; // false

// index.php
$sungokong = new Ape("kera sakti");
$sungokong->yell(); // "Auooo"

$kodok = new Frog("buduk");
$kodok->jump(); // "hop hop"
//echo $kodok->name;
?>