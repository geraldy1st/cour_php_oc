<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>les tableaux php</title>
</head>
<body style="font-family:sans-serif;">
   <h1>Les tableaux / array</h1>
   <div style="background-color:rgba(200,250,200,.7); padding: 5px; ">
     <p>en faisant echo $names[1] le 2eme elements du array s'affichera</p>
      <?php
      
       $names = array('Anna', 'Ling', 'Kazumi','King','Jack');
       
       echo $names[1];
       
       ?>
       
       <p>c'est possible de voir les elements du array en faisant 'echo print_r' </p>
       <p>cette methode permet surtout a debuger</p>
       
       <?php
        print_r($names);
       
       
       ?>
   </div>
   <div style="background-color:rgba(200,250,200,.7); padding: 5px; ">
      <h3>exemple 3</h3>
      <?php
       
       $character = array('nom' => 'Mishima', 'prenom' => 'Kazuya', 'age' => 45);
       
    print_r($character);
       
       
       ?>
       
   </div>
   <div style="background-color:rgba(200,89,200,.7); padding: 5px; ">
       <h3>Exemple 4</h3>
       <p>pour afficher les element d'un tableau a la suite</p>
       <?php
       
       for($numero = 0; $numero < 3 ; $numero++ ){
           echo '<p>' . $names[$numero] . '</p>';
       }
       
       ?>
       <em>le probleme avec cette methode, il faut connaitre le nombre d'éléments dans le array, contrairement a l'exemple 5</em>
   </div>
   <div style="background-color:rgba(100,250,250,.7); padding: 5px; ">
       <h3>Exemple 5</h3>
       <p>le foreach est specifiquement utilisé pour les tableaux, voir le code...</p>
       <p>Cette methode permet d'afficher tout les éléments dans le tableau avec une boucle</p>
       <?php
       
       foreach($names as $name){
           echo '<p>' . $name . '</p>';
       }
       
       ?>
   </div>
   <div style="background-color:rgba(180,180,30,.9); padding: 5px; ">
       <h3>Exemple 6</h3>
       <p>les variables peuvent avoir n'important quel noms</p>
       <?php
       foreach($character as $libelle => $details){
           echo '<p>'. $libelle . ': ' . $details .'</p>';
       }
       
       ?>
   </div>
   
    
</body>
</html>