<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>page secrete</title>
</head>
<body>
<button><a href="index.php">Home sweet home</a></button>
 
 <div>
     <?php
     if (isset($_POST['mdp']) AND $_POST['mdp'] == 'lplp'){ 
          echo '<p>Good login. esta bien</p><h2>Mission success!</h2><img style="width:90%;" src="https://sdz-upload.s3.amazonaws.com/prod/upload/0153.png" alt="">';
     }
     
     else{
        echo '<p>Désolé le mot de passe faux :-(</p><p>try again</p> <p>indice: <span style="background:#333; color:#333;">lplp</span></p>';
     }
     
     ?>
 </div>
 <div>
   <h2>L'envoi de fichier</h2>
   <p>Vous saviez qu'on pouvait aussi envoyer des fichiers grâce aux formulaires ? Vous aurez besoin de lire cette section si vous voulez que vos visiteurs puissent envoyer <strong>(on dit aussi uploader) </strong>des images, des programmes ou tout autre type de fichier sur votre site.</p>
   <p class="note2">Cette section est un peu plus complexe que le reste du chapitre. Sa lecture n'est d'ailleurs pas obligatoire pour la bonne compréhension de la suite du cours.
Par conséquent, n'hésitez pas à revenir la lire plus tard, lorsque vous en aurez besoin, si vous ne voulez pas vous attaquer de suite à une partie un peu « difficile ».</p>
  <p>Là encore, ça se passe en deux temps.</p>
  <ol>
      <li>Le visiteur arrive sur votre formulaire et le remplit (en indiquant le fichier à envoyer). Une simple page HTML suffit pour créer le formulaire.</li>
      <li>PHP réceptionne les données du formulaire et, s'il y a des fichiers dedans, il les « enregistre » dans un des dossiers du serveur.</li>
  </ol>
  <p class="note3">Attention : l'envoi du fichier peut être un peu long si celui-ci est gros. Il faudra dire au visiteur de ne pas s'impatienter pendant l'envoi.</p>
   <p>Dès l'instant où votre formulaire propose aux visiteurs d'envoyer un fichier, il faut ajouter l'attributenctype="multipart/form-data"à la balise <span class="code1">form</span>.</p>
   
   <div id="send1">
       <form action="cible_envoi.php" method="post" enctype="multipart/form-data">
        <p>
                Formulaire d'envoi de fichier :<br />
                <input type="file" name="monfichier" /><br />
                <input type="submit" value="Envoyer le fichier" />
        </p>
</form>
   </div>
   
     <p><a href="https://openclassrooms.com/courses/concevez-votre-site-web-avec-php-et-mysql/tp-page-protegee-par-mot-de-passe">details du cour ici</a></p>
 </div>
</body>
</html>