<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100&display=swap" rel="stylesheet">
    <title>PHP 1</title>
    <style>
        * {
            font-family:poppins;
        }

        h1 {
            color:#006699;
        }

        h2 {
            font-size:1.25em;
        }

        h3 {
            font-size:1em;
        }
    </style>
</head>
<body>

    <h1>Exo 7</h1>
    <h2>Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge :</h2>
    <h3>Poussin : entre 6 et 7 ans<br>
        Pupille : entre 8 et 9 ans<br>
        Minime : entre 10 et 11 ans<br>
        Cadet : à partir de 12 ans<br>
        Si la catégorie n’est pas gérée, merci de le préciser</h3>

    <?php

        $childsAge = 13;

        if ($childsAge >=12) {
            echo "L'enfant qui a $childsAge ans appartient à la catégorie « Cadet »";
        } elseif ($childsAge >=10 && $childsAge <= 11) {
            echo "L'enfant qui a $childsAge ans appartient à la catégorie « Minime »";
        } elseif ($childsAge >=8 && $childsAge <= 9) {
            echo "L'enfant qui a $childsAge ans appartient à la catégorie « Pupille »";
        } elseif ($childsAge >=6 && $childsAge <= 7) {
            echo "L'enfant qui a $childsAge ans appartient à la catégorie « Poussin »";
        } else {
            echo "Cette catégorie n'est pas gérée.";
        }

    ?>

</body>
</html>