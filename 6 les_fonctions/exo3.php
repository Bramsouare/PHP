<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vérification d'un mots de passe</title>
</head>
<body>

    <?php

        /*Créer une fonction qui vérifie le niveau de complexité d'un mot de passe
        Elle doit prendra un paramètre de type chaîne de caractères. Elle retournera une valeur booléenne
        qui vaut true si le paramètre (le mot de passe) respecte les règles suivantes :
        Faire au moins 8 caractères de long
        Avoir au moins 1 chiffre
        Avoir au moins une majuscule et une minuscule*/
       
        function motDePasse ($mdp) {

            // Vérifie la longueur minimale
            if (strlen($mdp) < 8) {
                return false; 
            }

             // Vérifie la présence de chiffres
            if (!preg_match('/[0-9]/', $mdp)) {
                return false;
            }

            // Vérifie la présence de lettres majuscules
            if (!preg_match('/[A-Z]/', $mdp)) {
                return false;
            }

            // Vérifie la présence de lettres minuscules
            if (!preg_match('/[a-z]/', $mdp)) {
                return false;
            }

            // Si toutes les conditions sont remplies, le mot de passe est complexe et valide 
            return true;
        }

            $motDePasse = "MonMotDePasse123"; // vérification du mots de passe
            if (motDePasse($motDePasse)) // si mon mots de passe remplie les condition alors

            {
            echo "Mot de passe valide."; // affiche message d'alert
            }

            else // sinon 
            {
            echo "Mot de passe invalide."; // affiche ce message d'alert
        };

    ?>
    
</body>
</html>