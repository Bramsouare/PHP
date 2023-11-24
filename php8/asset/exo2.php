<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulation sur les fichiers</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>

    <div class="container">

        <h1>Liste des Utilisateurs</h1>

        <?php

            // Cette fonction lit le contenu d'un fichier et le renvoie sous forme de tableau, où chaque élément du tableau correspond à une ligne du fichier.
            $csv = file("https://ncode.amorce.org/customers.csv");

            // Vérifier si le fichier a été récupéré avec succès si c'est le cas il affichera le tableau
            if ($csv !== false) {

                // Afficher le tableau Bootstrap et boddered affiche des ligne autour de chaque cellule du tableau
                echo 
                '<table class="table table-bordered"> 
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Email</th>
                            <th>Téléphone</th>
                            <th>Ville</th>
                            <th>État</th>
                        </tr>
                    </thead>
                <tbody>';

                foreach ($csv as $ligne) { // La boucle `foreach` parcourt chaque ligne du tableau `$csv`

                    // Utiliser str_getcsv pour analyser chaque ligne en tant que tableau CSV
                    $utilisateur = str_getcsv($ligne);

                    // Extraire les différents champs
                    $surname = $utilisateur[0];
                    $firstname = $utilisateur[1];
                    $email = $utilisateur[2];
                    $phone = $utilisateur[3];
                    $city = $utilisateur[4];
                    $state = $utilisateur[5];

                    // Afficher une ligne du tableau Bootstrap
                    echo 
                    "<tr>
                        <td>$surname</td>
                        <td>$firstname</td>
                        <td>$email</td>
                        <td>$phone</td>
                        <td>$city</td>
                        <td>$state</td>
                    </tr>";
                }

                echo '</tbody></table>';// Fermer le tableau Bootstrap
               
            } 
            else { // sinon

                echo "Erreur lors de la récupération du fichier CSV."; // message d'alerte
            }

        ?>

    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</body>
</html>
