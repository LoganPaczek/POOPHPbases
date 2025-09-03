<?php
include_once(__DIR__ . '/../mesClasses/Arme.php');
$epee = new Arme("Épée", "epee.png", "Cette épée mesure 2,5m de long");

// Test getName
echo $epee->getName() . " ";

// Test getImage
echo $epee->getImage() . " ";

// Test getDescription
echo $epee->getDescription();
?>