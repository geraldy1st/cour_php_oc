
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Les boucles OC</title>
</head>
<body style="font-family: sans-serif;">
 <h1>Les boucles avec php</h1>
 <div style="background-color:rgba(77,100,150,.5); padding: 5px; margin:10px auto;">
 <h3>methode avec 'while'</h3>
  <?php
    $repeat = 0;
    
    while($repeat < 6){
        echo'<p>Repeat is under low the ' .$repeat. ' times</p>';
//        $repeat = $repeat + 1;
        $repeat++;
    }
    ?>
</div>
    <br>
    <div style="background-color:rgba(127,210,158,.9); padding: 5px; margin:10px auto;">
    <h3>Methode avec 'for'</h3>
    <p><em>cette methode est la plus utilisé</em></p>
    <?php
    for($repeat = +1; $repeat < 5; $repeat++){
        echo '<p>Voila le text avec la 2eme methode ' .$repeat. ' une fois</p>';
    }
    
?>
 </div>
  <div>
     <p>il est egalement possible de faire des boucles avec 'for' a la place de 'while' ca permet de tout mettre dans la boucles 'for'</p>
      <p>J'ai mis en commantaire une version plus simple visuellement de comprendre les boucles
      
      <a href="https://openclassrooms.com/courses/concevez-votre-site-web-avec-php-et-mysql/les-boucles-34#/id/video_Player_0"><br>
      <br>Lien vers la video des boucles</a></p>
  </div>
   
    
</body>
</html>