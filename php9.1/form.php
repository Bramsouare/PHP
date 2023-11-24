<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Formulaire d'authentification</h2>

    <form action="login_script.php" method="post">
            
        <label for="login">Email</label>
        <input type="text"  name="login"><br>
                    
        <label for="mdp">Mots de passe</label>
        <input type="text" name="mdp"><br>

        <button type="submit" name="push">Se connecter</button>

    </form>

</body>
</html>