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

    <h1>Exo 15</h1>
    <h2>Créer une classe Personne (nom, prénom et date de naissance).
        Instancier 2 personnes et afficher leurs informations : nom, prénom et âge.
        $p1 = new Personne("DUPONT", "Michel", "1980-02-19") ;
        $p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17") ;</h2>

    <?php

        require "Person.php";

        $p1 = new Person("DUPONT", "Michel", "1980-02-19");
        $p2 = new Person("DUCHEMIN", "Alice", "1985-01-17");

        echo $p1;
        echo $p2;

    ?>

</body>
</html>