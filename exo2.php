<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Exerice 2</h1>
    <p>A partir de la phrase de l’exercice 1, écrire l’instruction permettant de compter le nombre de mots contenus dans celle-ci.</p>
    <h2>Affichage :</h2>
    <p> 
    La phrase « Notre formation DL commence aujourd’hui » contient
    <?php 
        $phrase = "Notre formation DL commence aujourd'hui";
        $i = str_word_count($phrase);
        echo $i;
    ?>
    mots.
    </p>
</body>
</html>