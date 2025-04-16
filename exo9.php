<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo9</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Exerice 9</h1>
    <p>Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.
        <br> Si la personne est une femme dont l'âge est compris entre 18 et 35ans ou si c'est un homme de plus de 20ans, alors celle-ci est imposable (sinon ce n'est pas le cas, "non imposable")
    </p>
    <h2>Affichage : </h2>
    <p>Age : <?php $age = 32; echo $age;?> <br>
       Sexe : <?php $sex = 'F'; echo $sex;?> <br>
    Le personne est    
    <?php 
        if($sex === 'F'){
            if($age > 20){
                echo "imposable";
            }else{
                echo "non imposable";
            }
        }else if($sex === 'M'){
            if($age >= 18 && $age <= 35){
                echo "imposable";
            }else{
                echo "non imposable";
            }
        }
    ?>.
    </p>


</body>
</html>