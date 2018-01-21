70.125YPE html>
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
  <div class="wrapper">
   
   <p>Les variables sont simples à utiliser, mais elles ne contiennent que des informations temporaires. La durée de vie d'une variable n'est en effet jamais très longue. Or, vous aurez certainement besoin sur votre site de stocker des informations définitivement.</p>
   <p>Par exemple, il est impossible de stocker les messages d'un forum dans des variables… puisque celles-ci seront supprimées à la fin de l'exécution de la page ! Pour stocker ces informations longtemps, il faut les écrire sur le disque dur. Quoi de plus logique pour cela que de créer des fichiers ?</p>
   <p>PHP permet justement d'enregistrer des données dans des fichiers sur le disque dur du serveur.

      </p></div>
      <div class="wrapper">
          <h2>Autoriser l'écriture de fichiers (chmod)</h2>
          <p>Pour que PHP puisse créer des fichiers, il doit avoir accès à un dossier qui lui en autorise la création. Il faut en effet donner le droit à PHP de créer et modifier les fichiers, sinon celui-ci ne pourra rien faire.</p>
          <p>Pour créer ces droits, on dit en général qu'on doit modifier le CHMOD du fichier ou du dossier. C'est le nom de la commande qui permet de modifier les droits sous Linux.</p>
          <p class="note2">Sous Windows, vous n'en avez probablement jamais entendu parler, tout simplement parce que ça n'existe pas. Mais le serveur de votre site, lui, est le plus souvent sous Linux. Et sous Linux, on utilise ce qu'on appelle le CHMOD pour gérer les droits.</p>
          <p>Le CHMOD est un nombre à trois chiffres que l'on attribue à un fichier (par exemple 777). Selon la valeur de ce nombre, Linux autorisera (ou non) la modification du fichier.
Le problème, c'est que Linux n'autorise généralement pas les modifications de fichiers par un script PHP. Or, c'est justement ce qu'on veut faire. Alors, comment va-t-on faire pour s'en sortir ? En modifiant le CHMOD, pardi !</p>
     <p>Il va falloir passer par… votre logiciel FTP ! Oui, celui-là même qui vous sert à envoyer vos pages sur le web. 
En ce qui me concerne, j'utilise FileZilla (vous pouvez utiliser celui que vous voulez, la manipulation est quasiment la même).</p>
     <p>Connectez-vous à votre serveur, et faites un clic-droit sur l'un des fichiers, pour obtenir la figure suivante.</p>
     <img src="https://user.oc-static.com/files/218001_219000/218483.png" alt="">
      </div>
      <div class="wrapper">
         
      </div>
   </div>
   <a href="exemple.php">Lien vers la page d'exemple</a>
   
   
</body>
</html>