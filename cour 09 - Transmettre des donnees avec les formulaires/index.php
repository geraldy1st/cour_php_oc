<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Transmettre des données avec form</title>
</head>
<body>
   <h1>exemple 1</h1>
   
   <form action="cible.php" method="POST">
       <p><label>Prenom : <input type="text" name="prenom"/></label></p>
    
       <p><label>Etes-vous végétarien ?<input type="checkbox" name="vegetarien"/>Oui</label><label><input type="checkbox" name=""/>Non</label></p>
       <p><label>do you code ?<input type="checkbox" name="icode"/>Oui</label><label><input type="checkbox" name=""/>Non</label></p>
       
       
       
       <p>Aimez-vous tekken 7 ?</p>
<input type="radio" name="tekken" value="oui" id="oui" checked="checked" /> <label for="oui">Oui</label>
<input type="radio" name="tekken" value="non" id="non" /> <label for="non">Non</label>
       <p><input type="submit"/></p>
   </form>
   <h3>A savoir</h3>
   <p><span class="code1">form</span> permet de creer des formulaire en html ca on connais, par contre il y a deux attribue <span class="code1">action</span> et <span class="code1">method</span> qui permettent de transmettre des données</p>
   <p><span class="code1">action</span>: permet d'indiquer vers quel page le formulaire doit rediriger</p>
   <p><span class="code1">method</span>: indique avec quel methode d'envoie on transfert les données</p>
   <p>L'attribue <span class="code1">method</span>:Deux valeurs possible GET ou POST, la valeur POST permet de transmettre le plus de données a travers deux pages web, la methode="GET" fait transité les informations dans la barres d'adresse (dans URL) a savoir quelle est limité en taille contrairement a la valeur POST. la methode POST ne ce vois pas dans la barre d'adresse</p>
   <h3>La faille XSS</h3>
   <p>faire attention a toujours surveillez les informations recu par le formulaire du site, certains utisilateurs peuvent hacker le syteme avec du html ou du JS... <a href="https://openclassrooms.com/courses/concevez-votre-site-web-avec-php-et-mysql/transmettre-des-donnees-avec-les-formulaires">lien vers la video</a></p>
   <p>Exemple de hack</p>
    <p>si un utilisateur écrit du code html dans le formulaire peut modifier le code initial <strong>belek</strong></p>
    <p>pour pas s'faire rouler il faut ajouter <strong>IMPERATIVEMENT</strong>ce code php </p>
    
    <div id="bracket">
        <p class="txtblue">echo htmlspecialchars</p>
    </div>
    <em>nik sa mere le css marche ap jai la fleme de debug l'erreur molobok</em>
    <p>en gros htmlspecialchars permet de proteger le label en empechant d'y mettre du code, le text sera affiché et non interpreté tchoin</p>
    <p><a href="https://openclassrooms.com/courses/concevez-votre-site-web-avec-php-et-mysql/transmettre-des-donnees-avec-les-formulaires">lien vers le cour</a></p>

    
</body>
</html>