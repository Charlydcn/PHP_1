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

    <h1>Exo 6</h1>
    <h2>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité 
        d’articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -- 0.2)</h2>

    <?php

        $prixUnit = 9.99;
        $quantity = 5;
        $tvaRate = 0.2;
        $sellingPrice = ($prixUnit * $quantity)*(1+"$tvaRate"); //(PU x QU)*1.20

        echo "Prix unitaire de l'article : $prixUnit € <br>";
        echo "Quantité : $quantity <br>";
        echo "Taux de TVA : $tvaRate <br>";
        echo "Le montant de la facture à régler est de : $sellingPrice €";

    ?>

</body>
</html>