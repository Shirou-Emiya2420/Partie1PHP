<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo5</title>
</head>
<body>
    <h1>Exerice 5</h1>
    <p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros.
    Attention, la valeur générée devra être arrondie à 2 décimales.</p>
    <h2>Affichage :</h2>
    <p>Montant en francs : 100
    <br>100 francs = 
    <?php 
        $franc = 100;
        $euro = $franc/6.55957;
        echo round($euro, 2);
    ?> €
    </p>


</body>
</html>