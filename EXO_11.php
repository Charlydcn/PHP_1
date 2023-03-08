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

    <h1>Exo 11</h1>
    <h2>Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce
        tableau et d’en afficher le contenu (une marque de voiture par ligne). Il est également demandé
        d’afficher le nombre de marques de voitures présentes dans le tableau.
        Exemple : tableau ➔ « Peugeot », « Renault », « BMW », « Mercedes »</h2>

    <?php

        $cars = ["Peugeot","Renault","BMW","Mercedes"];

        echo "Il y a ".count($cars)." marques de voiture dans ce tableau.";
        foreach($cars as $car) { // POUR CHAQUE CAR DANS LE TABLEAU CARS, EXECUTER LES INSTRUCTIONS BELOW
            echo "<li>$car</li>";
        }

    ?>

</body>
</html>