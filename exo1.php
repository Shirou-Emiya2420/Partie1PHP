<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo1</title>
</head>
<body>
    <h1>Exerice 1</h1>
    <p>Soit la phrase « Notre formation DL commence aujourd'hui ».
    Ecrire un algorithme permettant de compter le nombre de caractères contenus dans cette phrase (espaces inclus).</p>
    <h2>Affichage :</h2>
    <p> 
    La phrase « Notre formation DL commence aujourd’hui » contient
    <?php 
        $phrase = "Notre formation DL commence aujourd'hui";
        $i = strlen($phrase);
        echo $i;
    ?>
    caractères.
    </p>
</body>
</html>