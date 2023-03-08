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

    <h1>Exo 12</h1>
    <h2>A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée
        (tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue
        respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola »)
        Exemple : tableau ➔ Mickaël -> FRA, Virgile -> ESP, Marie-Claire -> ENG</h2>

    <?php

        $names = ["Mickaël"=>"FRA", "Virgile"=>"ESP", "Marie-Claire"=>"ENG"];
        ksort($names); // TRIER PAR RAPPORT AU PRENOM (LA KEY)

        foreach ($names as $prenom => $langue) { // POUR TOUTE VARIABLE $langue APPARTENANT A $prenom DANS LE TABLEAU $names, INSTRUCTIONS BELOW
            if ($langue == "FRA") {
                echo "Bonjour $prenom <br>";
            } elseif ($langue == "ESP") {
                echo "Hola $prenom <br>";
            } else {
                $hello = "Hello";
                echo "$hello $prenom <br>";
            }
        }

    ?>

</body>
</html>