<?php
include_once(__DIR__ . '/../libs/pdo.php');
include_once(__DIR__ . '/../mesClasses/Arme.php');

function donneArmeByIdV1($id) {
    
    $pdo = PDO2::getInstance();
    
    $requete = $pdo->prepare("...");
    $bv1 = $requete->bindValue(...);
    $executionok = $requete->execute();
    $lArme = $requete->fetch();
    if (is_array($lArme)){
         return $lArme;
    }
    else {
             
          throw new Exception("aucune arme pour cet identifiant");
                    
    }

}

function ajouteArme($arme){
    $pdo = PDO2::getInstance();
    $stmt = $pdo->prepare("
        INSERT INTO Arme(name, image, description)
        VALUES(:name, :image, :description);
        ");

    $stmt->bindValue(':name', $arme->getName(), PDO::PARAM_STR);
    $stmt->bindValue(':image', $arme->getImage(), PDO::PARAM_STR);
    $stmt->bindValue(':description', $arme->getDescription(), PDO::PARAM_STR);

    if ($stmt->execute()) {
        return true;
    } else {
        return false;
    }
}

function getArmes() {
    
    $pdo = PDO2::getInstance();
    
    $requete = $pdo->prepare("SELECT * FROM Arme");
    $executionok = $requete->execute();
    $Armes = $requete->fetchAll();
    if (is_array($Armes)){
         return $Armes;
    }
    else {
          throw new Exception("aucune arme récupérées");
    }
}


function getArmesV2() {
    
    $pdo = PDO2::getInstance();
    
    $requete = $pdo->prepare("SELECT * FROM Arme");
    $executionok = $requete->execute();
    $Armes = $requete->fetchAll(PDO::FETCH_CLASS,"Arme");
    if (is_array($Armes)){
         return $Armes;
    }
    else {
          throw new Exception("aucune arme récupérées");
    }
}


function getUneArmeV1($id) {
    
    $pdo = PDO2::getInstance();
    
    $requete = $pdo->prepare("SELECT * FROM Arme WHERE id = :id");
    $requete->bindValue(':id', $id, PDO::PARAM_INT);
    $executionok = $requete->execute();
    $Arme = $requete->fetch();
    if (is_array($Arme)){
         return $Arme;
    }
    else {
          throw new Exception("aucune arme récupérées");
    }
}

function getUneArmeV2($id) {
    
    $pdo = PDO2::getInstance();
    
    $requete = $pdo->prepare("SELECT * FROM Arme WHERE id = :id");
    $requete->bindValue(':id', $id, PDO::PARAM_INT);
    $executionok = $requete->execute();
    $Arme = $requete->fetchObject("Arme");
    if ($Arme !== false){
         return $Arme;
    }
    else {
          throw new Exception("aucune arme récupérées pour cette id");
    }
}


function getArrayObjectsArmes(){
    $objectArmes = new ArrayObject();
    $armes = getArmes();
    foreach ($armes as $arme) {
        $armeObject = new Arme($arme['id'], $arme['name'], $arme['image'], $arme['description']);
        $objectArmes []= $armeObject;
    }

    return $objectArmes;
}

?>
