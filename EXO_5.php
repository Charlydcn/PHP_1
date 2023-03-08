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

    <h1>Exo 5</h1>
    <h2>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros. 
        Attention, la valeur générée devra être arrondie à 2 décimales</h2>

    <?php

        $franc = 100;
        $euros = $franc * 0.1524;

        echo "Montant en francs: $franc";
        echo "<br>";
        echo "Montant en euros: $euros €";

    ?>

</body>
</html>