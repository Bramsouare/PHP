<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afficher le resultat d'une somme d'un tableau</title>
</head>
<body>

    <?php

        function somme ($table) { // fonction somme 

            $somme = 0;

            foreach ($table as $valeur) // boucle pour parcourir les valeur du tableux
            {
                $somme += $valeur; // $somme + $somme + $valeur
            };
            return $somme; // stocker le resultat dans somme est affiche le resultat quans la fonction sera appeler
       };

        $table = array (4, 3, 8, 2); // valeur du tableau a calculer
        $result = somme ($table);
        echo $result // affichage du resultat
        
        
    ?>

</body>
</html>

