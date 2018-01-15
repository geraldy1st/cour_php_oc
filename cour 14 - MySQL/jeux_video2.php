<?php
$bdd = new PDO('mysql:host=localhost;dbname=test', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
$reponse = $bdd->query('SELECT console, nom, prix FROM jeux_video WHERE console="NES" OR console="Nintendo 64" ORDER BY nom DESC LIMIT 3');
while ($donnees = $reponse->fetch())
{
    echo '<p>' . $donnees['console'] . ' - ' .  $donnees['nom'] . ' - ' .  $donnees['prix'] .'$' .'</p>';
}

?>
