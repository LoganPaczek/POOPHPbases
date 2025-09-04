<?php
include_once(__DIR__ . '/modeles/ArmeBDD.php');
$armes = getArmes();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        h1{
            text-align: center;
        }

        .weapons-container{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
            width: 100%;
            gap: 16px;
        }

        .weapons-container .weapon{
            width: 200px;
            height: 300px;
            background: grey;
            border-radius: 15px;
            flex-direction: column;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 16px 8px;
        }

        .weapons-container .weapon .image{
            width: 150px;
            height: 150px;
            background: #000;
        }

        .weapons-container .weapon .image img{
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body>
    <h1>Listes d'armes</h1>
    <div class="weapons-container">
        <?php foreach($armes as $arme): ?>
            <div class="weapon">
                <div class="image">
                    <img 
                    src="./img/<?php echo htmlspecialchars($arme['image']) ?>" 
                    alt="<?php echo htmlspecialchars($arme["name"]) ?>"
                    >
                </div>
                <p>
                    <?php
                        echo htmlspecialchars($arme['name']);
                    ?>
                </p>
                <p style="text-align: center;">
                    <?php
                        echo htmlspecialchars($arme['description']);
                    ?>
                </p>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>