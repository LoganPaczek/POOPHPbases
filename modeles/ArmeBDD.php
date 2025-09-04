<?php
include '../libs/pdo.php';


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
        echo true;
    } else {
        echo false;
    }
}

?>
