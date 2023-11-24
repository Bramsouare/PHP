<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>

    <h2>Authentification</h2>

    <form action="login2.php" method="post"> 

        <label for="nom">Nom</label>
        <input type="text" name="nom"><br>

        <label for="prenom">Prenom</label>
        <input type="text" name="prenom"><br>
            
        <label for="email">Email</label>
        <input type="text"  name="email"><br>
                    
        <label for="mdp">Mots de passe</label>
        <input type="password" name="mdp_confirm"><br>

        <label for="mdp">Confirmer le mot de passe</label>
        <input type="password" name="mdp_confirm2"><br>


        <button type="submit" name="push">Se connecter</button>

    </form>

</body>
</html>