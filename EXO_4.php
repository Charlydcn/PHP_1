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

    <h1>Exo 4</h1>
    <h2>Ecrire un algorithme permettant de savoir si une phrase est palindrome.</h2>

    <?php

        $phrase = "Engage le jeu que je le gagne";
        $phraseNoCasse = strtoupper($phrase); // METS LA PHRASE EN MAJ
        $phraseNoSpaceMaj = str_replace(' ', '', $phraseNoCasse); // REMPLACE ' ' PAR '' DONC SUPPRIME LES ESPACES
        $newPhrase = strrev($phraseNoSpaceMaj); // REVERSE LA PHRASE (CHARLY -> YRLRACH)

        if ($phraseNoSpaceMaj == $newPhrase) {
            echo "$phrase est un palindrome !";
        } else {
            echo "$phrase n'est pas un palindrome !";
        }

    ?>

</body>
</html>