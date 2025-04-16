<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo6</title>
</head>
<body>
    <h1>Exerice 6</h1>
    <p>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité d’articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2)</p>
    <h2>Affichage :</h2>
    <p>Prix unitaire de l’article : 9.99 €
    Quantité : 5
    Taux de TVA : 0.2
    Le montant de la facture à régler est de : 
    <?php 
        $prixunit = 9.99;
        $quant = 5;
        $tva = 0.2;
        echo round($prixunit*$quant*($tva+1), 2);
    ?> €
    </p>


</body>
</html>