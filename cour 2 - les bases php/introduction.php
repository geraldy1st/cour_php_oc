<!DOCTYPE html>
<html>
    <head>
        <title>Ceci est une page de test avec des balises PHP</title>
        <meta charset="utf-8" />
    </head>
    <style>
        body{
            font-family: sans-serif;
        }   
        .logo1{
            margin: 0 auto;
            width: 40px;
        }
    </style>
    <body>
       <span><img src="https://seeklogo.com/images/P/php-logo-ADE513E748-seeklogo.com.png" alt="img" class="logo1"></span>
        <h2>Cour php avec OC</h2>
        
        
        <p>
            Cette page contient du code HTML avec des balises PHP.<br />
            <?php /* Insérer du code PHP ici */ ?>
            Voici quelques petits tests :
        </p>
        <h4>Peut-on placer une balise PHP n'importe où dans le code ?</h4>
        <p>Oui ! Vraiment n'importe où. Pas seulement dans le corps de la page d'ailleurs : vous pouvez placer une balise PHP dans l'en-tête de la page (regardez la ligne 4 de l'exemple ci-dessous).</p>
        <p><a href="https://openclassrooms.com/courses/concevez-votre-site-web-avec-php-et-mysql/ecrire-son-premier-script">lien vers la video</a></p>
        <h2><?php echo"this a line writing with php! "?></h2>
        
        <ul>
        <li style="color: blue;">Texte en bleu</li>
        <li style="color: red;">Texte en rouge</li>
        <li style="color: green;">Texte en vert</li>
        </ul>
        <p><?php echo "<strong>Comment faire pour afficher un guillemet ?</strong>"; ?></p>
        <p>Bonne question. Si vous mettez un guillemet, ça veut dire pour l'ordinateur que le texte à afficher s'arrête là. Vous risquez au mieux de faire planter votre beau code et d'avoir une terrible « Parse error ».

La solution consiste à faire précéder le guillemet d'un antislash\:</p>
       <h2 style="color:#f45f45">Configurer PHP pour afficher les erreurs</h2>
       <p>Et oui, PHP est configurable !</p>
       <p style="background-color:rgba(200,50,50,.5); padding:50px 5px; border-radius:4px;">Si les erreurs s'affichent déjà bien dans votre navigateur, inutile de faire les manipulations qui vont suivre !</p>
        
        <?php
        /* Encore du PHP
        Toujours du PHP */
        ?>
        
        
    </body>
</html>