<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Transmettre des données avec php</title>
</head>
<body>
  <button><a href="index.php">Home</a></button>
   <p>
   <?php if (isset($_GET['nom']) AND isset($_GET['prenom'])){
    echo 'Bonjour ' . $_GET['nom'] . ' ' . $_GET['prenom'];
}
       else{
           echo "Pas de nom ou de prenom defini!!";
       }
       ?>
   </p>
   <div style="width=100%; height:2px; background-color:#222; text-align: center">-</div>
   
    <p>
   <?php if (isset($_GET['nom']) AND isset($_GET['prenom']) AND isset($_GET['repeter'])){
    $nbRepetitions = (int) $_GET['repeter'];
    if ($nbRepetitions < 100){
        for ($repetition = 1; $repetition <= $_GET['repeter'] ; $repetition++){
            echo '<p>Bonjour ' . $_GET['nom'] . ' ' . $_GET['prenom'] .'</p>';
        }
    }
}
    else{
           echo "Pas de nom ou de prenom defini!!";
       }
       ?>
   </p>
   <div>
       <h2>Envoyer des parametres dans l'URL</h2>
       <p>Imaginons que votre site s'appelle<span class="code1">monsite.com</span>et que vous avez une page PHP intitulée<span class="code1">bonjour.php</span>. Pour accéder à cette page, vous devez aller à l'URL suivante :</p>
       <p>Jusque-là, rien de bien nouveau. Ce que je vous propose d'apprendre à faire, c'est d'<span class="bold1">envoyer</span> des informations à la page<span class="code1">bonjour.php</span>. Pour cela, on va ajouter des informations à la fin de l'URL, comme ceci :</p>
       <img src="https://user.oc-static.com/files/215001_216000/215638.png" alt="">
       <h6>schema d'une structure URL</h6>
       <p>lien vers le site pour <a href="https://openclassrooms.com/courses/concevez-votre-site-web-avec-php-et-mysql/transmettre-des-donnees-avec-l-url">plus d'info</a></p>
   </div>
   
    
</body>
</html>