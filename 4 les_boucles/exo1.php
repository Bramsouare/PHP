<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boucle 1 instruction conditionnelles</title>
</head>
<body>

    <?php

        // Ecrire un script PHP qui affiche tous les nombres impairs entre 0 et 150, par ordre croissant : 1 3 5 7...

        $a = 1; // Commencez à 1 pour inclure les nombres impairs

        while ($a <= 150) { // 1 et inferieur ou égal a 150

            echo $a . " "; // Affiche le nombre impair suivi d'un espace

            $a += 2; // Passe au nombre impair suivant en ajoutant 2
        }

    ?>
    
</body>
</html>