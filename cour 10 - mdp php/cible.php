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

   
     <p><a href="https://openclassrooms.com/courses/concevez-votre-site-web-avec-php-et-mysql/tp-page-protegee-par-mot-de-passe">details du cour ici</a></p>
 </div>
</body>
</html>