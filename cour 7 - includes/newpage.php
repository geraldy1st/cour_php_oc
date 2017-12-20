<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css">
        <title>Open Classroom copycat</title>
    </head>
   
 
    <body>
 
    <!-- L'en-tête -->
    
   <?php include("header.php");?>
    
    <!-- Le menu -->
    
    <?php include("menu.php");?>
    
    <!-- Le corps -->
    
    <div id="corps">
        <h1>Mise en page php</h1>
        
        <p>
            Bienvenue sur mon super site !<br />
            Vous allez adorer ici, c'est un site génial qui va parler de... euh... Je cherche encore un peu le thème de mon site. :-D
        </p>
    </div>
    <div>
       <p>Le schéma suivant vous aidera à comprendre comment les pages sont incluses.</p>
        <img src="https://user.oc-static.com/files/421001_422000/421892.png" alt="" style="width: 90%;">
        <h3>Les includes en pratique
</h3>
        <p>La page finale que reçoit le visiteur est identique à celle que je vous ai montrée au début du chapitre… mais vous, vous avez énormément gagné en flexibilité puisque votre code n'est plus recopié 150 fois inutilement.</p>

<p>Le nombre d'include par page n'est pas limité, par conséquent vous pouvez découper votre code en autant de sous-parties que vous le souhaitez !</p>
   
    </div>
    
    <!-- Le pied de page -->
   
    <?php include("footer.php"); ?>
    </body>
</html>