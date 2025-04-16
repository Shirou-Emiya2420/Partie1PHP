<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo10</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Exerice 10</h1>
    <p>A partir d'un montant à payer et d'une somme versée pour régler un achat, écrire l'algorithme qui affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et de 5 €, de pièce de 2 € et de 1 €.
    </p>
    <h2>Affichage : </h2>
    <p>Montant à payer : <?php $payer = 152; echo $payer;?>€ <br>
       Montant versé : <?php $verse = 200; echo $verse;?>€ <br>
       Reste à payé : <?php $a_payer = $verse-$payer; echo $a_payer;?>€ <br>
    ******************************************** <br>
       Rendue de monnaie : <br>    
    <?php 
        echo intdiv($a_payer, 10) . " billets de 10 € <br>";
        $a_payer %= 10;
        echo intdiv($a_payer, 5) . " billets de 15 € <br>";
        $a_payer %= 5;
        echo intdiv($a_payer, 2) . " pièce de 2 € <br>";
        $a_payer %= 2;
        echo intdiv($a_payer, 1) . " pièce de 1 € <br>";
        $a_payer %= 1;

    ?>.
    </p>


</body>
</html>