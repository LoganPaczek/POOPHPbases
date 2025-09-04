<?php
include_once(__DIR__ . '/../mesClasses/Arme.php');
include_once(__DIR__ . '/../modeles/ArmeBDD.php');

$fusil = new Arme("Excalibur", "Excalibur.png", "C'est une épée légendaire");

var_dump(ajouteArme($fusil));
?>