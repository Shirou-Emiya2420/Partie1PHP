<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo7</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Exerice 7</h1>
    <p>Ecrire un algorithme permettant de renvoyer la catégorie d'un enfant en fonction de son âge : </p>
    <h2>Affichage :</h2>
    <p>L'enfant qui a <?php $age = 10; echo $age ?> ans appartient à la catégorie "
    <?php 
        if($age >= 6 && $age <= 7){
            echo "Poussin";
        }else if($age >= 8 && $age <= 9){
            echo "Pupille";
        }else if($age >= 10 && $age <= 11){
            echo "Minime";
        }else if($age >= 12){
            echo "Cadet";
        }
    ?> "
    </p>


</body>
</html>