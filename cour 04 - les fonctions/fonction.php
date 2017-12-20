<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fonction en php</title>
</head>
<style>
      body{
          font-family: sans-serif;
          margin: 0;
          padding: 0;
      }
      div{
          background: #ddd;
          padding: 5px;
      }
    h1{
        text-align: center;
    }
    h6{
        text-align: center;
        font-size: 8px;
        margin: 0;
        padding: 5px;
        color: #111;
        background: #FFF;
        margin-bottom: 10px;
        
    }
    .date1{
        border: 1px solid #111;
        width: 70px;
        height: 70px;
        background: #f44;
        color: #eee;
        text-align: center;
        font-size: 2em;
        margin: 0;
        padding: 0;
        
    }
    #error4{
        background: #eee;
        padding: 10px;
        margin: 0px auto;
    }
    #error4 p{
        width: 50%;
    }
    </style>
<body>
  <h1>Les fonctions en php</h1>
  <?php
    $phrase ='Bonjour je suis content de vous voir connecté.';
       $nombreDeCaracters = strlen($phrase);
    ?>
   <div>
   <h3>Exemple 1</h3>
   
   <p><?php echo $phrase; ?></p>

        <?php
       echo 'Il y a ' . $nombreDeCaracters . ' caracteres dans cette phrase.';
       

       ?>
       
      
       
   </div>
   <div>
     <h3>Exemple 2</h3>
     <p>'la fonction 'date' permet d'afficher la date voir code...</p>
     
     <div class="date1">
     <h6>Today's</h6>
      <?php
       echo date('d');
       ?>
       </div>
       <p>Aujourdhui nous sommes le <?php echo date('d'. '/' . 'm'. '/' .  'y'); ?></p>
       <p><?php echo time(); ?></p>
       <p>A savoir qu'il existe une documentation sur php, plusieurs fonctions y sont deja repertorié <a href="https://openclassrooms.com/courses/concevez-votre-site-web-avec-php-et-mysql/les-fonctions-32">lien vers la video</a></p>
   </div>
   <div>
       <h3>Exemple 3</h3>
       <?php
       function direBonjour($nom){
           echo '<p>Bonjour ' . $nom . '</p>';
       }
       
       direBonjour('Kuma');
       direBonjour('Nina');
       direBonjour('Paul');
       
       ?>
   </div>
   <div id="error4">
       <h3>error in php?</h3>
       <p><span style="color:#C40356; text-align: center;"><b>Alors comme ça votre script ne marche pas, et PHP vous affiche des erreurs incompréhensibles ?</b></span></p>
<p>Pas de souci à vous faire : c'est tout à fait normal, on ne réussit jamais un script du premier coup (en tout cas, moi, jamais !).</p>

<p>Des milliers de messages d'erreur différents peuvent survenir (O.K., jusque-là rien de très rassurant), et je n'ai pas vraiment la possibilité de vous en dresser une liste complète… mais je peux vous présenter les erreurs les plus courantes, ce qui devrait résoudre la grande majorité de vos problèmes. ;-)</p>
   </div>
    
</body>
</html>