<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'authentification</title>
</head>
<body>
   
    <?php

        session_start(); // Demarrer la session

            // var_dump($_SESSION); // Débogage : affiche le contenu de la sessions, contient les variables de session.
            // var_dump($_REQUEST); // Débogage : affiche le contenu de la requête, contient des donnÃ©es provenant Ã  la fois de la requÃªte HTTP GET et POST.

            if(isset($_POST["push"])){ // Vérifie si le formulaire a été soumis en recherchant la présence d'une variable POST appelée "push".

                $email=$_POST["login"]; // récupère la valeur du champ de formulaire avec l'attribut login


                function email($email){

                    $verif="/^[a-zA-Z0-9]+@[a-zA-Z0-9]+\\.[a-zA-Z]+$/"; // utilise une expression régulière pour valider l'adresse e-mail.
                    if( preg_match($verif,$email)){ // si $email rentre dans la condition $verif alors...

                    return true; // applique vrais
                    }else{ // sinon 

                    return false; // applique faux
                };
            };
        
            if( email($email)==true){ // Si l'e-mail est valide, 

                // on créée une session (avec des données sous forme de tableau) avec pour item "auth" ->on met comme valeur "ok" :
                $_SESSION["auth"]="ok";

                var_dump($_SESSION); // affiche la session

                header("Location: valide.php"); // Redirection vers la page "valide.php" 
                exit(); // plus aucun code ne sera exécuté
    
            }
                
            else{ // sinon

                echo "adresse mail invalide"; // Si l'e-mail n'est pas valide, message d'alerte
                unset($_SESSION["auth"]); // puis la session est supprimer
                session_destroy(); // et proprement détruite

                // header ("Location : form.php"); // Redirection vers la page en cas d'erreur
                
            };
        };
        
    ?>
</body>
</html>