<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afficher adresse ip</title>
</head>
<body>

    <?php
    
        echo "Adresse IP du serveur : ".$_SERVER['SERVER_ADDR']. // affiche adresse ip serveur
        "<br> Adresse IP du client : ".$_SERVER['REMOTE_ADDR']; // affiche adresse ip client

    ?>

</body>
</html>