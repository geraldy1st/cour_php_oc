<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Transmettre des données avec form</title>
</head>
<body>
   <h1>Login</h1>
   
   <form action="cible.php" method="POST">
       <p><label>identifiant : <input type="text" name="identifiant"/></label></p>
       <p><label>mot de passe : <input type="password" name="mdp"/></label></p>
       <p><input type="submit"/></p>
   </form>
</body>
</html>-->




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
           <p><label>identifiant: <input type="text" name="identifiant" /></label><br>
               <label>password: </label><input type="password" name="mdp" /><br>
            <input type="submit" value="Valider" />
            </p>
            
        </form>
        
        <p>Cette page est réservée au personnel de la NASA. Si vous ne travaillez pas à la NASA, inutile d'insister vous ne trouverez jamais le mot de passe ! ;-)</p>
    </body>
</html>