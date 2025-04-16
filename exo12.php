<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo12</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Exerice 12</h1>
    <p>A partir d'une fonction personnalisée et à partir d'un tableau de prénoms et de langue associée(tableau contenant clé et valeur) dire bonjour aux différentes personnes dans leur langue respective <br> 
    (français --> "Salut", anglais --> "Hello", espagnol --> "Hola") en utilisant un switch. <br>
    <strong>Exemple </strong> : tableau --> Mickaël => FRA, Virgile => ESP, Marie-Claire => ENG <br>
    <?php $tab_lang = [
        "FRA" => "Salut",
        "ESP" => "Hola",
        "ENG" => "Hello"
    ];
    $tab_pers = [
        "Mickaël" => "FRA",
        "Virgile" => "ESP",
        "Marie-Claire" => "ENG"
    ];
    ?>
    </p>
    <h2>Affichage : </h2>
        <?php
            function saluer($val, $index){
                if($val == "FRA"){
                    echo "Salut " . $index . "<br>";
                    return;
                }
                if($val == "ENG"){
                    echo "Hello " . $index . "<br>";
                    return;
                }
                if($val == "ESP"){
                    echo "Hola " . $index . "<br>";
                    return;
                }
            }
            foreach ($tab_pers as $index => $val){
                saluer($val, $index);
            }
        ?> 
    <strong>Variante </strong> : trier d'abord le tableau par ordre alphabétique du prénom <br>
    <h2>Affichage : </h2>
        <?php
        ksort($tab_pers);
        foreach ($tab_pers as $index => $val){
            saluer($val, $index);
        }
        ?>
    </p>


</body>
</html>