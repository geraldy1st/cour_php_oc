<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../style.css">
    <script src="https://use.fontawesome.com/40a1716643.js"></script>

    <title>Lire et écrire dans un fichier</title>
</head>
<body>
  <div class="content">
  <h1>Lire et écrire dans un fichier</h1>
  <div class="wrapper inner1">
      
      <?php
$monfichier = fopen('index.php', 'r+');
 
$pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
fseek($monfichier, 0); // On remet le curseur au début du fichier
fputs($monfichier, $pages_vues); // On écrit le nouveau nombre de pages vues
 
fclose($monfichier);
 
echo '<p>Cette page a été vue ' . $pages_vues . ' fois !</p>';
?>
    </div>
   </div>
</body>
</html>