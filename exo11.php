<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo11</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Exerice 11</h1>
    <p>Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce tableau et d'en afficher le contenu (une marque de voiture par ligne). <br>
    Il est également demandé d'afficher le nombre de marques de voitures présentes dans le tableau. <br>
    <strong>Exemple </strong> : Tableau --> "Peugeot", "Renault", "BMW", "Mercedes"
    </p>
    <h2>Affichage : (attention à utiliser une liste à puces)</h2>
    <p>Il y a <?php $tab = ["Peugeot", "Renault", "BMW", "Mercedes"]; echo count($tab);?> marques de voitures dans le tableau : <br>
    <?php 
        $i = 0;
        while(isset($tab[$i])){
            echo $tab[$i] . "<br>";
            $i++;
        }

    ?>
    </p>


</body>
</html>