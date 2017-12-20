<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css">
        <title>Page protégée par mot de passe</title>
    </head>
    <body>
       <h1>Login</h1>
        <p>Veuillez entrer le mot de passe pour obtenir les codes d'accès au serveur central de la NASA :</p>
        <form action="cible.php" method="post">
           <label for=""></label>
            <p>
            <input type="password" name="mdp" />
            <input type="submit" value="Valider" />
            </p>
            <p>indice: <span style="background:#333; color:#333;">lplp</span></p>
        </form>
        
        <p>Cette page est réservée au personnel de la NASA. Si vous ne travaillez pas à la NASA, inutile d'insister vous ne trouverez jamais le mot de passe ! ;-)</p>
    </body>
</html>

