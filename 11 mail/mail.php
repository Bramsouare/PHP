<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envoyer des mails avec PHPMailer</title>
</head>
<body>

    <?php

        $destinataire = 'contact@afpa.com'; //destinataires du mail

        
        $objet = 'Confirmation d\'inscription'; // objet du mail
        
        
        $entetes = ''; // entêtes supplémentaires

        // prénom et adresse expéditeur,saut de ligne 
        $entetes .= 'From: \'Souare Ibrahima\' <souarei404@gmail.com>\r\n';

        // -> message au format multipart (Multipurpose Internet Mail Extensions)utiliser pour interpréter les messages est conforme à la version 1.0     
        // $entetes .= 'MINE-Version: 1.0\r\n';
        // $entetes .= 'Content-Type: multipart/mixed; '; // type de contenu du corps du message, composé de plusieurs parties
        // $entetes .= 'boundary=\'ligne\'\r\n'; // utiliser comme délimiteur entre les différents parties du message par des lignes importantes pour le contenues mutipart

        // $message = ''; // (.= : concaténation avec ce qu'ils se trouvent dans la variable message)
        $message = 'coucou';
        // // ->  entêtes de la première partie du message (texte)
        // $message .= '--ligne\r\n'; // le début d'un délimiteur multipart courament utilisé pour les email avec pièce jointe
        // $message .= 'Content-Type: text/plain; '; // type de contenu texte brut
        // $message .= 'charset=iso-8859-1\r\n '; // interpréter correctement les messages par le client ou logiciels
        // $message .= 'Content-Transfer-Encoding: 8bit\r\n'; // C.T.E est le nom de l'entête,le message ne subira pas de transformation
        // $message .= '\r\n'; // délimite la fin du corps du message 

        // // -> données de la partie
        // $message .= 'Voir la pièce jointe.\r\n'; // la pièce jointe sera uniquement sur une ligne
        // $message .= '\r\n'; // délimiteur 

        // $message .= '--ligne\r\n'; // entête deuxième partie de la (pièce jointe) délimiteur par saut de ligne

        // //C.T nom entête, les données binaire doivent être interprétées comme une séquance d'octets utilisé pour audio,img,pdf etc...
        // $message .= 'Content-Type: application/octet-stream;';
        // $message .= 'name=\print.php\'\r\n'; // affiche le nom du fichier de la pièce jointe incluent les caractères spéciaux puis délimiteur
        // $message .= 'Content-Transfer-Encoding: base64\r\n'; // C.T.E est le nom de l'entête, base64 et frécament utiliser SMTP: simple mail transfert protocole
        // $message .= 'Content-Disposition: attachement; '; // indique que cette partie et une pièce jointe
        // $message .= 'filename=\'print.php\'\r\n'; // le nom du fichier de la pièce jointe
        // $message .= '\r\n'; // délimiteur
        
        // // $sFileAdd = file_get_contents ('print.php'); // lecture du fichier en pièce jointe
        // // $sFileAdd = chunk_split (base64_encode($sFileAdd)); // divise la chaine base64 en petit morceux et un retour a la ligne chaque 76 caractères
        // $message .= '$sFileAdd\r\n'; // mise en forme de message multipart avec pièce jointe inclue
        // $message .= '\r\n'; // ligne vide

        // $message .= '--ligne--\r\n'; // délimiteur de fin de message
        
        $bEnvoie  = mail($destinataire, $objet, $message, $entetes); // envoie du mail
        echo 'Email bien envoy&eacute; &agrave; ' . $destinataire; // Email bien envoyé à $destinataire

    ?>
    
</body>
</html>