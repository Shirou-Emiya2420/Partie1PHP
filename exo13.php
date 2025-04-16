<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo13</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Exerice 13</h1>
    <p>Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de coefficient). Elle devra être affichée avec 2 décimales.
    <?php
    $moyenne = [10, 12, 8, 19, 3, 16, 11, 13, 9];
    ?>
    </p>
    <h2>Affichage : </h2>
    Les notes obtenues par l'élève sont : 
        <?php
            foreach($moyenne as $note){
                echo $note . " ";
            }
        ?>
        <br> Sa moyenne générale est donc de : <?php echo round(array_sum($moyenne) / (count($moyenne)), 2)?> 
    </p>


</body>
</html>