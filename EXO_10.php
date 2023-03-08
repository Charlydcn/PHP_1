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

    <h1>Exo 10</h1>
    <h2>A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui 
         affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et 
         1 €.</h2>

    <?php

        $amountDue = 152;
        $amountPaid = 200;
        $change = $amountPaid - $amountDue; // CHANGE = 48

        echo "Montant à payer : $amountDue € <br>";
        echo "Montant versé : $amountPaid € <br>";
        echo "Reste a payer : $change € <br>";
        echo "*********************** <br>";


        $nb10 = intdiv($change, 10); // BILLETS DE 10 // DIVISE PAR 10 LA MONNAIE, PUIS SOUSTRAIE LE RESULTAT*10 AU TOTAL DE MONNAIE A RENDRE POUR FAIRE LES AUTRES CALCULS
        $change = $change - $nb10 * 10;

        $nb5 = intdiv($change, 5); // BILLETS DE 5 // /\
        $change = $change - $nb5 * 5;

        $nb2 = intdiv($change, 2); // PIECES DE 2 // /\
        $change = $change - $nb2 * 2;

        echo "Rendue de monnaie : <br> $nb10 billets de 10 € - $nb5 billet de 5 € - $nb2 pièce de 2 € - $nb2 pièce de 1 €"

    ?>

</body>
</html>