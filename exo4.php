<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo4</title>
</head>
<body>
    <h1>Exerice 4</h1>
    <p>Ecrire un algorithme permettant de savoir si une phrase est palindrome.</p>
    <h2>Affichage :</h2>
    <p>La phrase « Engage le jeu que je le gagne »
    <?php 
        $phrase = "Engage le jeu que je le gagne";
        $revphrase = strrev(str_replace(" ", "", strtolower($phrase)));
        if(str_replace(" ", "", strtolower($phrase)) === $revphrase){
            echo " est un palyndrome";
        }else{
            echo "n'est pas un palyndrome";
        }
    ?>
    </p>


</body>
</html>