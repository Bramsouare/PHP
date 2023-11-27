<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <?php

        session_start (); // ouverture d'une session

        if (isset($_POST['push'])) { // isset verifie si les champs sont vide ou remplie l'ors de la connection

            $nom = $_POST['nom']; // élément envoyer par la methode post
            $prenom = $_POST['prenom'];
            $email = $_POST['email'];
            $hash = "$2y$10$8nk1IxO99AvFSU6zSlyZcO4RxB9Q7hxC3MlBvOslaL5UoGstbwLke";

            // var_dump("mon hash  : ".$hash); // affiche mon mdp haché 
            // var_dump("<br><br>le mot de passe que je viens de hash : ".password_hash($mdp,PASSWORD_DEFAULT));
            // var_dump("<br><br>boleen (password_verify):".password_verify($_POST["mdp"], $hash)) ; // mdp form correspond au $hash et affiche resultat en booléen

            function nom($nom) { 

                $valid = "/^[a-zA-Z]+$/"; // expression régulière condition de validation

                if (preg_match ($valid, $nom)) { // si nom rentre dans la condition valid alors...
                    return true; // applique vrais
                }
                else {  // sinon              
               
                 echo "Entrée un nom valide !"; // message d'alerte
                    return false; // puis applique faux 
                };
            };

            function prenom($prenom) {

                $valid = "/^[a-zA-Z]+$/"; // expression regulière condition de validation

                if (preg_match($valid, $prenom)) {  // si prénom rentre dans la condition valid alors...
                    return true; // applique vrais
                }               
                else { // sinon
                    echo "veuilliez entrée un prénom valide !"; // message d'alert !
                    return false; // puis applique faux
                };
            };
            
            function email($email) {

                $valid = "/^[a-zA-Z0-9]+@[a-zA-Z0-9]+\\.[a-zA-Z]{3,}$/"; // expression regulière condition de validation

                if (preg_match($valid, $email)) {  // si mon email rentre dans la condition valid alors...
                    return true; // applique vrais
                }
                else {  // sinon
                    echo "veuillez entrée un email valide !"; // message d'alert !
                    return false; // puis applique faux
                };
            };
          
           
            // si toutes les conditions applique vrais alors...
            if (nom($nom) == true & prenom($prenom) == true & email($email) == true & password_verify($_POST['mdp'],$hash) & password_verify($_POST['mdp2'],$hash)){

                $_SESSION['auth'] = "ok"; // crée une session avec les élément ci-dessous
                $_SESSION['nom'] = $nom;
                $_SESSION['prenom'] = $prenom;
                $_SESSION['email'] = $email;

                header('Location: valide2.php'); // redirection sur la page bienvenue 2
                exit();
            }
            else { // sinon
                 
                unset($_SESSION['auth']); // la session sera supprimer
                session_destroy (); // pour supprimer la session proprement 
                echo "<br>veuillez remplire le formulaire correctement"; // puis message d'alert !
            };
        };
        

    ?>
</body>
</html>