<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau 3</title>
</head>
<body>
    <?php
        $departements = array(

            "Hauts-de-france" => array("Aisne", "Nord", "Oise", "Pas-de-Calais", "Somme"),
        
            "Bretagne" => array("Côtes d'Armor", "Finistère", "Ille-et-Vilaine", "Morbihan"),
        
            "Grand-Est" => array("Ardennes", "Aube", "Marne", "Haute-Marne", "Meurthe-et-Moselle", "Meuse", "Moselle", "Bas-Rhin", "Haut-Rhin", "Vosges"),
        
            "Normandie" => array("Calvados", "Eure", "Manche", "Orne", "Seine-Maritime")
        
        );
        ksort($departements); // Trier le tableau des régions par ordre alphabétique

        // Afficher la première table : Régions et leurs départements
        echo "<h2>La liste des régions (par ordre alphabétique) suivie du nom des départements</h2>";
        echo "<table border='1'><tr><th>Régions</th><th>Départements</th></tr>";

        foreach ($departements as $region => $liste_departements) { // tableau a parcourir
            // Utilisez la fonction implode pour joindre les noms des départements avec des virgules
            echo "<tr><td>$region</td><td>" . implode(", ", $liste_departements) . "</td></tr>"; // affiche un tableau region concaténer avec les departement
        }
        echo "</table>"; // affiche fin de tableau
        
        // Trier à nouveau le tableau (qui est déjà trié) pour la deuxième table
        ksort($departements);

        echo "<h2>Affichez la liste des régions suivie du nombre de départements</h2>";
        echo "<table border='1'><tr><th>Régions</th><th>Nombre de départements</th></tr>";

        foreach ($departements as $region => $liste_departements) { // tableau a parcourir
            $nombre_de_departements = count($liste_departements); // Calcules le nombre de departement
            echo "<tr><td>$region</td><td>$nombre_de_departements</td></tr>"; // affiche un tableau region suivie du nombres des departement
        }

        echo "</table>"; // affiche la fin du tableau

    ?>
</body>
</html>