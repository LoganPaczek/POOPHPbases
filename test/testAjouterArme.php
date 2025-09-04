<?php
include_once(__DIR__ . '/../mesClasses/Arme.php');
include_once(__DIR__ . '/../modeles/ArmeBDD.php');

$fusil = new Arme("AR15", "ar15.avif", "C'est un fusil d'assault");

var_dump(ajouteArme($fusil));
?>