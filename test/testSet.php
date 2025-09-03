<?php
include_once(__DIR__ . '/../mesClasses/Arme.php');
$epee = new Arme("Épée", "epee.png", "Cette épée mesure 2,5m de long");


// Test setName
$epee->setName("Excalibur");
echo $epee->getName() . " ";


// Test setImage
$epee->setImage("excalibur.jpeg");
echo $epee->getImage() . " ";


// Test setDescription
$epee->setDescription("Cette épée est légendaire");
echo $epee->getDescription();
?>