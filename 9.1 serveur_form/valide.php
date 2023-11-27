<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bienvenue</title>
</head>
<body>

    <?php
 
        echo '<h1>Bienvenue</h1>';
        session_start();

        if($_SESSION["auth"]!=="ok"); // vérification de valeur dans variable 
        header("Location form.php"); // redirection apres soumission formulaire
        exit(); // plus aucun code sera exécuté
   ?>
    
</body>
</html>