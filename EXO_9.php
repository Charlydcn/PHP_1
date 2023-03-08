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

    <h1>Exo 9</h1>
    <h2>Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.
        Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de 
        plus de 20 ans, alors celle-ci est imposable (sinon ce n’est pas le cas, « non imposable »).</h2>

    <?php

        $gender = 1; // 0 = FEMME || 1 = HOMME
        $age = 19;

        if ($gender == 1) {
            $sexe = "Homme";
        } elseif ($gender == 0) {
            $sexe = "Femme";
        } else {
            $sexe = "Non renseigné";
        }

        echo "Âge : $age ans <br>";
        echo "Sexe : $sexe <br>";

        $condition1 = $gender == 0 && ($age >= 18 && $age <= 35); // FEMME ENTRE 18 ET 35 ANS
        $condition2 = $gender == 1 && $age > 20; // HOMME DE PLUS DE 20 ANS

        if ($condition1 || $condition2) { // SI LA CONDITION 1 OU 2 EST RESPECTEE, INSTRUCTIONS BELOW, SINON ELSE
            echo "Cette personne est imposable.";
        } else {
            echo "Cette personne n'est pas imposable.";
        }

    ?>

</body>
</html>