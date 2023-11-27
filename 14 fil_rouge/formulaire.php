<?php 

    session_start(); // ouverture de la session

    if (isset($_POST["envoyer"])) { // vérification si le formulaire a été soumis avec un champ vide ou pas via la méthode post 

        // les éléments du formulaire
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $telephone = $_POST['telephone'];
        $message = $_POST['message'];

        function nom($nom) { // ma fonction nom

            $verif = "/^[a-zA-Z0-9]+$/"; // vérification avec expression régulière 

            if (preg_match($verif, $nom)) { // si le nom respecte la condition imposée alors...
                return true; // applique vrai
            } 
            else { // sinon
                echo "<p>Le nom est invalide</p>"; // message d'alerte 
                return false; // et faux sera appliqué
            }
        }

        function prenom($prenom) { // ma fonction prénom

            $verif = "/^[a-zA-Z0-9]+$/"; // vérification avec expression régulière

            if (preg_match($verif, $prenom)) { // si prénom respecte la condition imposée alors...
                return true; // applique vrai
            } 
            else { // sinon 
                echo "<p>Le prénom est invalide</p>"; // message d'alerte
                return false; // et faux sera appliqué
            }
        }

        function email($email) { // ma fonction email

            $verif = "/^[a-zA-Z0-9]+@[a-zA-Z0-9]+\.[a-zA-Z]+$/"; // vérification avec expression régulière

            if (preg_match($verif, $email)) { // si email respecte la condition alors...
                return true; // applique vrai
            } 
            else { // sinon
                echo "<p>L'email est invalide</p>"; // message d'alerte
                return false; // et faux sera appliqué
            }
        }

        function telephone($telephone) { // ma fonction téléphone

            $verif = "/^[0-9]{10,}$/"; // vérification par expression régulière

            if (preg_match($verif, $telephone)) { // si téléphone respecte la condition alors...
                return true; // applique vrai
            } 
            else { // sinon
                echo "<p>Le numéro est invalide</p>"; // message d'alerte
                return false; // et faux sera appliqué
            }
        }

        function message($message) { // ma fonction message

            $verif = "/^[a-zA-Z0-9\s\S]+$/"; // vérification avec expression régulière

            if (preg_match($verif, $message)) { // si message respecte la condition alors...
                return true; // applique vrai
            } 
            else { // sinon
                echo "<p>Le message est invalide</p>"; // message d'alerte
                return false; // et faux sera appliqué
            }
        }

        // si toutes les conditions appliquent vrai alors...
        if (nom($nom) == true && prenom($prenom) == true && email($email) == true && telephone($telephone) == true && message($message) == true) {

            // une session se crée avec les données récupérées
            $_SESSION['nom'] = $nom;
            $_SESSION['prenom'] = $prenom;
            $_SESSION['email'] = $email;
            $_SESSION['telephone'] = $telephone;
            $_SESSION['message'] = $message;

            // un fichier sera généré basé sur la date et l'heure 
            $nomfichier =  date("Y-m-d-H-i-s") . ".txt";

            // le contenu sera intégré
            $contenue = "nom : " . $_SESSION['nom'] . " \r\n
                        prenom : " . $_SESSION["prenom"] . "\r\n
                        email : " . $_SESSION["email"] . "\r\n 
                        telephone : " . $_SESSION["telephone"] . "\r\n 
                        message : " . $_SESSION["message"];

            // les données seront écrites dans le fichier
            file_put_contents($nomfichier, $contenue);

            // message d'alerte
            echo "Formulaire soumis avec succès. Les informations ont bien été enregistrées dans le fichier $nomfichier.";

            // redirection sur la page 
            header("Location: finaliser.php");
            exit();

        } 
        else { // sinon
                
            unset($_SESSION['nom']); // la session sera détruite
            unset($_SESSION['prenom']);
            unset($_SESSION['email']);
            unset($_SESSION['telephone']);
            unset($_SESSION['message']);
            session_destroy(); // la destruction sera faite proprement

            // puis message d'alerte
            echo "Veuillez remplir correctement le formulaire S.V.P !";

        }
    }

?>
