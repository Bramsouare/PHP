<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableux 1</title>
</head>
<body>

    <?php

        /*Créez un tableau associant à chaque mois de l’année le nombre de jours du mois.
        Utilisez le nom des mois comme clés de votre tableau associatif.
        Affichez votre tableau (dans un tableau HTML) pour faire apparaitre sur chaque ligne le nom du mois et le nombre de jours du mois.
        Triez ensuite votre tableau en utilisant comme critère le nombre de jours, puis affichez le résultat.*/


        // tableau associatif appelé $mois_jours où les noms des mois sont utilisés comme clés et le nombre de jours dans chaque mois est défini comme valeur.
        $mois_jours = array(
            "janvier" => 31,
            "février" => 28, 
            "mars" => 31,
            "avril" => 30,
            "mai" => 31,
            "juin" => 30,
            "juillet" => 31,
            "août" => 31,
            "septembre" => 30,
            "octobre" => 31,
            "novembre" => 30,
            "décembre" => 31
        );

        // Affichez le tableau dans un tableau HTML
        echo "<h2>Tableau non trié</h2>"; // affiche le titre 
        echo "<table border='1'><tr><th>Mois</th><th>Nombre de jours</th></tr>"; // affiche un tableau avec les mois et le nombre de jour et le style
        
        foreach ($mois_jours as $mois => $jours) { // tableau a parcourir

            echo "<tr><td>$mois</td><td>$jours</td></tr>"; 

        }
        echo "</table>"; // afficher tableau

        
        asort($mois_jours); // Triez le tableau en fonction du nombre de jours (ordre croissant)

        // Affichez le tableau trié dans un tableau HTML
        echo "<h2>Tableau trié par nombre de jours (ordre croissant)</h2>"; // afficher le tableau par ordre croisant 
        echo "<table border='1'><tr><th>Mois</th><th>Nombre de jours</th></tr>"; // style de tableau

        foreach ($mois_jours as $mois => $jours) { // tableau a parcourir

            echo "<tr><td>$mois</td><td>$jours</td></tr>"; // afficher ligne cellule et contenant
        }
        echo "</table>"; // affiche la fin du tableau

    ?>
    
</body>
</html>