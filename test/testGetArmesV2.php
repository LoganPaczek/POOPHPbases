<?php
include_once(__DIR__ . '/../modeles/ArmeBDD.php');
$armes = getArrayObjectsArmes();
var_dump($armes);

foreach ($armes as $arme) {
    echo $arme->toString();
    echo "\n";
    echo "\n";
    echo "\n";
}


var_dump(getArmesV2());
?>