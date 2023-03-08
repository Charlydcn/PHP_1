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
    

    <h1>Exo 14</h1>
    <h2>Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).</h2>

    <?php

        $todaysDate = new DateTime("2018-05-21"); // NOUVEL OBJET DATE DU JOUR
        $birthDate = new DateTime("1985-01-17"); // NOUVEL OBJET DATE DE NAISSANCE
        $interval = $birthDate->diff($todaysDate); // DIFFERENCE ENTRE LES DEUX (!!- LA PLUS ANCIENNE EN PREMIER -!!) ->diff NE FONCTIONNE QU'AVEC LES DATETIME

        echo "Âge de la personne : $interval->y ans $interval->m mois $interval->d jours";

    ?>
</body>
</html>