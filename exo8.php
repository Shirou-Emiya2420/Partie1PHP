<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo8</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Exerice 8</h1>
    <p>Ecrire un algorithme qui renvoie la table de multiplication d'un nombre passé en paramètre sous la forme : </p>
    <h2>Affichage : (pour table de 8)</h2>
    <p>Table de <?php $table = 8; echo $table;?> :
    <?php 
        $i = 1;
        while($i<= 10){
            echo "<br>";
            echo $i . " x " . $table . " = " . $i*$table;
            $i++;
        }
    ?> ...
    </p>


</body>
</html>