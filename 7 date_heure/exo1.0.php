<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        //      Trouvez le numéro de semaine de la date suivante : 14/07/2019.

        $datePre = "14-07-2019";
        // Remplacez les barres obliques par des tirets pour éviter des problèmes de formatage
        $timestamp = strtotime(str_replace('/', '-', $datePre)); 

        //Le format "W" est utilisé pour obtenir le numéro de semaine ISO-8601 de l'année. Il renvoie un numéro de semaine, de 01 à 53.
        $numSem = date("W", $timestamp);
        echo "Le numéro de la semaine pour la date $datePre est : " . $numSem ."<br>";
        
        //_____________________________________________________________________________________________________________________________________________

        //       Combien reste-t-il de jours avant la fin de votre formation.

        $datenow = date ("d/m/y"); // Obtenez la date actuelle au format YYYY-MM-DD

        $dateFut = "02-12-2023"; // La date future que vous souhaitez

        $timestampNow = strtotime ($datenow);// Convertir les dates en timestamps
        $timestampFut = strtotime ($dateFut);

        // Calculer la différence en secondes
        $diffSe = $timestampFut - $timestampNow;
        // Convertir la différence en jours en divisant par le nombre de secondes dans une j
        $jourRest = floor($diffSe / (60 * 60 * 24));
        echo "Il reste $jourRest jours jusqu'au $dateFut."."<br>";

        //_______________________________________________________________________________________________________________________________________________

        //       Comment déterminer si une année est bissextile ?
        function biss ($annee){

            //Si l'année est divisible par 4 mais n'est pas divisible par 100 (sauf si elle est également divisible par 400)
            return ((($annee % 4 == 0) && ($annee % 100 != 0)) || ($annee % 400 == 0));
        
        }
        $annee = 2023; // L'année que veut vérifier
        if (biss ($annee)) {
            echo "$annee est une année bissextile."."<br>";
        }
        else
        {
            echo "$annee n'est pas une année bissexxtile."."<br>";
        }
        
        //_________________________________________________________________________________________________________________________________________________

        //      Montrez que la date du 32/17/2019 est erronée.
        
        $odate = DateTime::createFromFormat ("d/m/Y", "32/17/2019");

        // Récupère les erreurs et avertissements associés à la dernière opération DateTime
        $errors = DateTime::getLastErrors();

        // Vérifie s'il y a des erreurs ou des avertissements
        if ($errors["error_count"] > 0 || $errors ["warning_count"] > 0) {
            echo "Date non valide."."<br>";
        }
        else 
        {
            echo "Date valide."."<br>";
        }

        //_____________________________________________________________________________________________________________________________________________________

        //      Affichez l'heure courante sous cette forme : 11h25.

        $heure = date ("H\hi"); // Obtenez l'heure actuelle 
        echo "Il est actuellement $heure."."<br>";

        //_______________________________________________________________________________________________________________________________________________________

        //     Ajoutez 1 mois à la date courante.

        $datenow = new DateTime(); // new DateTime() crée un objet DateTime représentant la date et l'heure actuelles.

        // $datenow->add(new DateInterval('P1M')) ajoute une période d'un mois à la date actuelle. P1M signifie une période d'un mois.
        $datenow -> add (new DateInterval ('P1M')); 

        // echo $datenow -> format('d/m/Y') affiche la nouvelle date au format jour/mois/année.
        echo 'Date courante +1 mois : ' . $datenow -> format ("d/m/y")."<br>";

        //__________________________________________________________________________________________________________________________________________________________


        //     Que s'est-il passé le 1000200000

        /* Convertit le timestamp en date d représente le jour, m représente le mois, Y représente l'année,
        H représente l'heure au format 24 heures,i représente les minutes,s représente les secondes*/                                                           
        $date = date("d/m/Y H:i:s", 1000200000); //Le deuxième argument de la fonction date est le timestamp, dans ce cas, 1000200000

        // Affiche la date convertie
        echo "le world trade center a étais victime d'un attentat le : $date";


    ?>

</body>

</html>