<?php
include_once(__DIR__ . '/../mesClasses/Arme.php');

$epee = new Arme("Épée", "epee.png", "Cette épée mesure 2,5m de long");
$famas = new Arme(1, "Famas", "famas.png", "C'est un fusil d'assault");
$dague = new Arme();
var_dump($epee);
var_dump($famas);
var_dump($dague);
?>