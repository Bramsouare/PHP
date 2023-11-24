<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bienvenue 2</title>
</head>
<body>
    <?php
 
        echo '<h1>Bienvenue 2</h1>';
        session_start();

        if ($_SESSION["auth"] !== "ok") { // vérification de la valeur dans variable

            header("Location: form.php"); // redirection apres soumission du formulaire
            exit(); // plus aucun code sera exécuté

        }
        

    ?>
    
</body>
</html>

