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

    <h1>Exo 2</h1>
    <h2>A partir de la phrase de l’exercice 1, écrire l’instruction permettant de compter le nombre de mots 
        contenus dans celle-ci.</h2>        
    <h3>« Notre formation DL commence aujourd’hui »</h3>

    <?php

        echo "Cette phrase contient ".str_word_count($str1)." mots."; // COMPTER NOMBRE DE MOTS

    ?>

</body>
</html>