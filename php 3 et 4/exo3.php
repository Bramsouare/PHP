<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afficher les tables </title>
</head>
<body> 
<?php

    echo "<table border='5'><tr>"; // style des bordure du tableau des tables

    for ($i = 0; $i < 10; $i++) { // i vaut 0 i et inferieux a 10 i et incrémenté a chaque tour

        echo "<th>$i</th>"; // En-tête de colonne crée la ligne d'en-tête contenant les multiplicateurs de 0 à 9.
    }
    echo "</tr>"; // affiche entête de colone de 0 a 9

    // imbriquée génère les lignes de la table de multiplication pour les multiplicandes de 1 à 9.

    for ($a = 1; $a < 10; $a++) { // a vaut 1 a et inferieur a 10 a et incrémenter a chaque tour

        echo "<tr><th>$a</th>"; // afficher ligne et entête de tableau et $a fournie le contenu des cellules

        // Dans la deuxième boucle, chaque cellule de la table contenant le résultat de la multiplication est affichée.

         for ($i = 1; $i < 10; $i++) { // i vaut 1 i et inferieur a 10 i et incrémenter a chaque tours

            $resultat = $a * $i; // la valeur de a mutiplier a i devient la valeur affecter a la variable

            echo "<td>$resultat</td>"; // Les résultats de la multiplication sont placés dans les cellules correspondantes.
        }

        echo "</tr>"; // afficher la fin de ligne de tableau
    }

    echo "</table>"; // afficher les tables 
?>


</body>
</html>