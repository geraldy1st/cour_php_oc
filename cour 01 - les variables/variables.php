
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Les variables OC</title>
</head>
<body style="font-family: sans-serif;">
   <h1>Les variables</h1>
    <h3>Attention, chapitre fondamental !</h3>

    <p>Les variables sont un élément indispensable dans tout langage de programmation, et en PHP on n'y échappe pas. Ce n'est pas un truc de programmeurs tordus, c'est au contraire quelque chose qui va nous simplifier la vie. Sans les variables, vous n'irez pas bien loin.</p>

<p>Les variables nous permettent de retenir temporairement des informations en mémoire. Avec elles, nous allons pouvoir par exemple retenir le pseudonyme du visiteur, effectuer des calculs et bien d'autres choses</p>
   
   <div style="background-color: #EEE; margin: 0 30px; padding:20px; ">
    <?php

$age_du_visiteur = 33;
$age_du_visiteur2 = 26; 
echo "le 1er visiteur a $age_du_visiteur ans ";

echo 'et le deuxieme visiteur a ' . $age_du_visiteur2. ' ans';
//la 2eme methode est la plus utilisé

?>
  
  <?php
$pas_de_valeur = NULL;
?>
  
  
   </div>
    <br> <a href="https://openclassrooms.com/courses/concevez-votre-site-web-avec-php-et-mysql/les-variables-44">lien vers la video</a>
    
</body>
</html>