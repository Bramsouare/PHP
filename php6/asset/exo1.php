<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Génerer un lien</title>
</head>
<body>

    <?php

       function genererLien ($url, $texte) 
       {
        return "<a href='$url'>$texte</a>"; // lien en vertion texte
       }
        // Utilisation de la fonction pour générer un lien
       
        $url = "https://www.reddit.com"; // lien
        $texteAncre  = "reddit hug"; // lien en caractère
        $lien = genererLien ($url, $texteAncre);

        // Affichage du lien généré
        echo $lien; 

    ?>

</body>
</html>