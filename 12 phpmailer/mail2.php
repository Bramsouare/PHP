<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email avec pièce jointe</title>
</head>
<body>
    
    <?php

        use PHPMailer\PHPMailer\PHPMailer; // importation de bibliothèque
        use PHPMailer\PHPMailer\Exception; 

        require_once 'vendor/autoload.php'; // inclue et exécuter un fichier PHP
        $mail = new PHPMailer (true); // new objet de la classe, true active la gestion des erreur l'hors de l'envoie
        $mail->isSMTP (); // envoie du mail Simple Mail Transfère Protocoles
        $mail->Host = 'localhost'; //phpmailer doit se connecter et exécuter le script sur la même machine
        $mail->SMTPAuth = false;  // désactive SMTP l'hors de l'envoie
        $mail->Port = 1025; // le port ou phpmail doit se connecter
        $mail->setFrom('from@thedistrict.com', 'The District Compagny'); // adresse et nom d'expéditeur l'hors de l'envoie

        $mail->addAddress("client1@example.com", "Mr client 1"); // le nom associé à l'adresse du destinataire
        $mail->addAddress("client1@example.com"); 
        $mail->addReplyTo("reply@thedistrict.com", "Reply"); // adresse pour repondre directement a mon mail

        $mail->addCC("cc@example.com"); // les destinataires recevront une copie du message
        $mail->addBCC("bcc@example.com"); // les destinataires recevront une copie du message sans informer les autre destinataire
        $mail->isHTML(true); // si on veut envoyer en format html
        // $mail->addAttachment('/path/to/file.pdf'); // ajouter une ou plusieur pièce jointe dans le mail
        $mail->Subject = 'test PHPMailer'; // definir le sujet 
        $mail->Body = "On teste l'envoi de mails avec PHPMailer"; // contenue du mail que je veut envoyer

        // on envoie le mail dans un block try et catch pour capturer les ereurs
        if ($mail) {

            try { // une exeption peut etre déclancher l'hors de l'envoi 
                $mail->send (); // envoie du mail avec la method send de l'objet $mail
                echo 'Email envoyé avec succès'; // le mail sans générer d'exeption ce message s'envoie
            } 

            catch (Exception $e) { //si  une exeption est générer catch et exécuter, capture les détail des erreurs

                // affiche message d'érreur + info détailler des erreurs 
                echo "L'envoi de mail a échoué. L'érreur suivante s'est produite : ", $mail->ErrorInfo;
                
            }
        }


    ?>

</body>
</html>