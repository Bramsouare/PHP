<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boucle 2 instruction conditionnelles</title>
</head>
<body>

    <?php

        // Écrire un programme qui écrit 500 fois la phrase Je dois faire des sauvegardes régulières de mes fichiers

        $programme = 0; // On initialise la variable $programme à zéro.

        while ($programme < 500) { // On démarre une boucle "while" qui s'exécutera tant que $programme est inférieur à 500.

            echo "je dois faire des sauvegardes régulières de mes fichiers. <br>"; // On affiche la phrase à l'intérieur de la boucle.

            $programme++; // On incrémente la variable $programme de 1 à chaque tours.
        }
        
        // La boucle continue de s'exécuter tant que $programme est inférieur à 500.
        // À chaque tours, la phrase est affichée, et $programme est augmenté de 1.
        // Une fois que $programme atteint 500, la condition de la boucle devient fausse, et la boucle s'arrête.

    ?>
    
</body>
</html>