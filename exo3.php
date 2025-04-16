<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Exerice 3</h1>
    <p>A partir de la phrase de l’exercice 1, écrire l’instruction permettant de remplacer le mot « aujourd’hui » par le mot « demain ». Afficher l’ancienne et la nouvelle phrase.</p>
    <h2>Affichage :</h2>
    <p> 
    Ancienne phrase « Notre formation DL commence aujourd’hui »
    </p>
    <p>Nouvelle phrase «
    <?php 
        $phrase = "Notre formation DL commence aujourd'hui";
        $i = str_replace("aujourd'hui", "demain", $phrase);
        echo $i;
    ?> »
    </p>


</body>
</html>