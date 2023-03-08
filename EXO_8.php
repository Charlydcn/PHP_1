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

    <h1>Exo 8</h1>
    <h2>Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la 
        forme :</h2>
    <h3>Affichage (pour la table de 8) :<br>
        Table de 8 :<br>
        1 x 8 = 8<br>
        2 x 8 = 16<br>
        3 x 8 = 24 …</h3>

    <?php

        echo "BOUCLE WHILE <br>";
        echo "<br>";

        $number = 5;
        $multiplier = 1;

        echo "Table de $number <br>" ;

        while ($multiplier <= 10) { // TANT QUE $multiplier EST INFERIEUR OU EGAL A 10, EXECUTER LES INSTRUCTIONS BELOW
            echo "$multiplier x $number = ", $number * $multiplier ;
            echo "<br>";
            $multiplier++ ;
        }

        echo "<br>";
        echo "BOUCLE FOR <br>";
        echo "<br>";

        $number2 = 5;

        for ($multiplier2 = 1; $multiplier2 <= 10; $multiplier2++) { // $multiplier2 = 1, TANT QU'IL EST INFERIEUR OU EGAL A 10, $multiplier2 +1 || A CHAQUE LECTURE, IL EXECUTE LES INSTRUCTIONS BELOW
            echo "$multiplier2 x $number2 = ", $number2 * $multiplier2 ;
            echo "<br>";
        }

    ?>

</body>
</html>