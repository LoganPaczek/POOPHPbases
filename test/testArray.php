<?php
include_once(__DIR__ . '/../mesClasses/Arme.php');

$armeArray = new ArrayObject();
$armeArray []= new Arme("AR15", "ar15.avif", "C'est un fusil d'assault");
$armeArray []= new Arme("Famas", "famas.png", "C'est un fusil à rafale");
$armeArray []= new Arme("Dague", "dague.png", "C'est un petit poignard");
$armeArray []= new Arme("Grenade", "grenade.avif", "C'est un explosif");

var_dump($armeArray);
?>