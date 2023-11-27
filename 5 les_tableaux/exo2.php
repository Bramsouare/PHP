<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau 2</title>
</head>
<body>

    <?php

    
        $capitales_pays = array(

            "Bucarest" => "Roumanie",

            "Bruxelles" => "Belgique",

            "Oslo" => "Norvège",

            "Ottawa" => "Canada",

            "Paris" => "France",

            "Port-au-Prince" => "Haïti",

            "Port-d'Espagne" => "Trinité-et-Tobago",

            "Prague" => "République tchèque",

            "Rabat" => "Maroc",

            "Riga" => "Lettonie",

            "Rome" => "Italie",

            "San José" => "Costa Rica",

            "Santiago" => "Chili",

            "Sofia" => "Bulgarie",

            "Alger" => "Algérie",

            "Amsterdam" => "Pays-Bas",

            "Andorre-la-Vieille" => "Andorre",

            "Asuncion" => "Paraguay",

            "Athènes" => "Grèce",

            "Bagdad" => "Irak",

            "Bamako" => "Mali",

            "Berlin" => "Allemagne",

            "Bogota" => "Colombie",

            "Brasilia" => "Brésil",

            "Bratislava" => "Slovaquie",

            "Varsovie" => "Pologne",

            "Budapest" => "Hongrie",

            "Le Caire" => "Egypte",

            "Canberra" => "Australie",

            "Caracas" => "Venezuela",

            "Jakarta" => "Indonésie",

            "Kiev" => "Ukraine",

            "Kigali" => "Rwanda",

            "Kingston" => "Jamaïque",

            "Lima" => "Pérou",

            "Londres" => "Royaume-Uni",

            "Madrid" => "Espagne",

            "Malé" => "Maldives",

            "Mexico" => "Mexique",

            "Minsk" => "Biélorussie",

            "Moscou" => "Russie",

            "Nairobi" => "Kenya",

            "New Delhi" => "Inde",

            "Stockholm" => "Suède",

            "Téhéran" => "Iran",

            "Tokyo" => "Japon",

            "Tunis" => "Tunisie",

            "Copenhague" => "Danemark",

            "Dakar" => "Sénégal",

            "Damas" => "Syrie",

            "Dublin" => "Irlande",

            "Erevan" => "Arménie",

            "La Havane" => "Cuba",

            "Helsinki" => "Finlande",

            "Islamabad" => "Pakistan",

            "Vienne" => "Autriche",

            "Vilnius" => "Lituanie",

            "Zagreb" => "Croatie"

        );

        
        asort($capitales_pays); // Triez le tableau par les capitales (ordre alphabétique)

        // Affichez la liste triée    
        echo "<h2>Liste des Pays (par ordre alphabétique) suivie des Capitales:</h2>"; // affiche le titre
        echo "<table border='1'><tr><th>Pays</th><th>Capitales</th></tr>";

            foreach ($capitales_pays as $capitales => $pays) { // parcourir le tableau

                echo "<tr><td>$pays</td><td>$capitales</td></tr>"; // afficher un tableau avec les pays et capitals
            }
            echo "</table>"; // afficher la fin du tableau

            ksort($capitales_pays); // trie le tableau en ordre croissant en gardant la corespondance avec les pays
            echo "<h2>Liste  des capitales (par ordre alphabétique) suivie des Pays :</h2>
            <table border='1'><tr><th>Capitales</th><th>Pays</th></tr>";
            foreach ($capitales_pays as $capitales => $pays){ // tableau a parcourir

                echo "<tr><td>$capitales</td><td>$pays</td></tr>"; // affichage des capital et pays
            }
            echo "</table>"; // afficher la fin du tableau

            $nombre_de_pays = count($capitales_pays); // afficher le nombre de pays
            echo "Le nombre de pays dans le tableau est : " . $nombre_de_pays; // afficher le message plus le contenant de la variable

            foreach ($capitales_pays as $capitales => $pays){ // tableau a parcourir

                // La fonction substr() est utilisée pour extraire une partie d'une chaîne de caractères. 
                // Dans ce cas, nous extrayons le premier caractère (la lettre initiale) de la capitale stockée dans la variable $capitale.
                if (substr($capitales, 0, 1) !== 'B'){

                    unset($capitales_pays[$capitales]); // est exécutée pour supprimer l'élément du tableau 
                }
            }
            // Affichez le contenu du tableau après la suppression
            echo "<h2>Liste des Pays (par ordre alphabétique) suivie des Capitales après la suppression :</h2>";
            echo "<table border='1'><tr><th>Pays</th><th>Capitales</th></tr>";

            foreach ($capitales_pays as $capitale => $pays) { // tableau a parcourir

                echo "<tr><td>$pays</td><td>$capitale</td></tr>";
            }
            echo "</table>";

    ?>
   
</body>
</html>