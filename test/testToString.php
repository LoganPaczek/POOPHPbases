<?php
include_once(__DIR__ . '/../mesClasses/Arme.php');
$epee = new Arme("Épée", "epee.png", "Cette épée mesure 2,5m de long");


// Test toString
$epee->toString();
?>