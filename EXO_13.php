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

    <h1>Exo 13</h1>
    <h2>Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de
        coefficient). Elle devra être affichée avec 2 décimales.</h2>

    <?php

        $notes = [10, 12, 8, 19, 3, 16, 11, 13, 9];
        $moyenne = (array_sum($notes)/count($notes)); // SOMME DU TABLEAU DIVISE PAR NOMBRE DE VALUE PRESENTES DANS LE TABLEAU

        echo "Les notes obtenues par l'élève sont : ";

        foreach ($notes as $note) { // POUR CHAQUE NOTE DANS LE TABLEAU NOTES, ECHO NOTE
            echo "$note ";
        }

        echo "<br>";

        echo "Sa moyenne générale est donc de : ";
        echo round($moyenne, 2); // ARRONDI A DEUX DECIMALES

    ?>

</body>
</html>