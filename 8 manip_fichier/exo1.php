<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulation sur les fichiers</title>
</head>
<body>
    <?php

        /*FILE_IGNORE_NEW_LINES : pas inclure les caractères de nouvelle ligne à la fin de chaque élément 
        FILE_SKIP_EMPTY_LINES : sauter les lignes vides du fichier, ne les incluant pas dans le tableau résultant.*/
        $contenuf = file ("/home/souare/Bureau/php 7/asset/lien.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        // Vérifie si le fichier a été lu avec succès 
        if ($contenuf !== false) {

            echo "<h1>Liste de site</h1>"; // affiche la liste des sites
            echo "<ul>";
        
            foreach ($contenuf as $site) { // Parcourt chaque ligne du fichier et crée un lien hypertexte pour chaque site

                /*génère une liste HTML avec des liens hypertextes, chacun pointant vers un site spécifié. target='_blank'
                permet d'ouvrir chaque lien dans une nouvelle fenêtre ou un nouvel onglet.*/
                echo "<li><a href='$site' target='_blank'>$site</a></li>";
            }

            echo "</ul>"; // affiche les sites
        } 
        else { // sinon
        
           echo "Erreur lors de la lecture du fichier."; // message d'alerte

        }


    ?>
</body>
</html>