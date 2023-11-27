<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Récupérer les données d'un formulaire</title>
</head>
<body>

    <?php

        // Vérifie si la méthode de requête est POST, POST contient toutes les données envoyées au script par la méthode POST du formulaire HTML
        if ($_SERVER["REQUEST_METHOD"] == "POST"){ 

            // les données envoyer par post
            $nom = $_POST["nom"];
            $prenom = $_POST["prenom"];
            $email = $_POST["email"];
            $telephone = $_POST["telephone"];
            $message = $_POST["message"]; 

            // affichage des données post
            echo "<p>Nom: $nom</p>";
            echo "<p>Prénom: $prenom</p>";
            echo "<p>Email: $email</p>";
            echo "<p>Téléphone: $telephone</p>";
            echo "<p>Message: $message</p>";

        } 
        else { // sinon 

            echo "Aucune donnée transmise."; // message d'alerte
        }
        
    ?>

</body>
</html>
