<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Transmettre des données avec form</title>
</head>
<body>
<button><a href="index.php">Home sweet home</a></button>
 <p>Bonjour <?php echo htmlspecialchars($_POST['prenom']);?></p>
 <div>
     <?php
     if (isset($_POST['vegetarien'])){
         echo '<p>Vous etes vegetarien. esta bien</p>';
     }
     else{
        echo "<p>Vous n'etes pas vegetarien. esta mal</p>";
     }
      if (isset($_POST['icode'])){
         echo '<p>Vous etes un dev de ouf</p>';
     }
     else{
        echo "<p>tu ne code pas :(</p>";
     }
      if (isset($_POST['tekken'])){
         echo '<p>Tu dechir, mais tu pourra jamais me battre!</p>';
     }
     else{
        echo "<p>tu connais rien... tchoin</p>";
     }
     
     ?>
 </div>
</body>
</html>