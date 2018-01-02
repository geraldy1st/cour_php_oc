<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Variable suerglobales</title>
</head>
<body>
   <h1>Les variables superglobale</h1>
   <p>Les variables superglobales sont des variables un peu particulières pour trois raisons :</p>
   <ul>
       <li>elles sont écrites en majuscules et commencent toutes, à une exception près, par un underscore <span class="code1">(_).$_GET</span>et <span class="code1">$_POST</span> en sont des exemples que vous connaissez ;

</li>
       <li>les superglobales sont des <span class="code1">array </span>car elles contiennent généralement de nombreuses informations ;</li>
       <li>enfin, ces variables sont automatiquement créées par PHP à chaque fois qu'une page est chargée. Elles existent donc sur toutes les pages et sont accessibles partout : au milieu de votre code, au début, dans les fonctions, etc.</li>
   </ul>
   <p>Pour afficher le contenu d'une superglobale et voir ce qu'elle contient, le plus simple est d'utiliser la fonction <span class="code1">print_r</span>, puisqu'il s'agit d'un array. Exemple :</p>
   <div>
    <pre><?php print_r($_GET); ?></pre>
    </div>
    <p>Je vous propose de passer en revue les principales variables superglobales existantes. Nous ne les utiliserons pas toutes, mais nous aurons fait un petit tour d'horizon pour pouvoir nous concentrer ensuite sur les plus utiles d'entre elles.</p>
    <ul class="courpage2">
        <li><span class="code1">$_SERVER</span> : ce sont des valeurs renvoyées par le serveur. Elles sont nombreuses et quelques-unes d'entre elles peuvent nous être d'une grande utilité. Je vous propose de retenir au moins <br> <span class="code1">$_SERVER['REMOTE_ADDR']</span>. Elle nous donne l'adresse IP du client qui a demandé à voir la page, ce qui peut être utile pour l'identifier.</li>
        <li><span class="code1">$_ENV </span>: ce sont des variables d'environnement toujours données par le serveur. C'est le plus souvent sous des serveurs Linux que l'on retrouve des informations dans cette superglobale. Généralement, on ne trouvera rien de bien utile là-dedans pour notre site web.</li>
        <li><span class="code1">$_SESSION </span>: on y retrouve les variables de session. Ce sont des variables qui restent stockées sur le serveur le temps de la présence d'un visiteur. Nous allons apprendre à nous en servir dans ce chapitre.</li>
        <li><span class="code1">$_COOKIE </span>: contient les valeurs des cookies enregistrés sur l'ordinateur du visiteur. Cela nous permet de stocker des informations sur l'ordinateur du visiteur pendant plusieurs mois, pour se souvenir de son nom par exemple.</li>
        <li><span class="code1">$_GET </span>: vous la connaissez, elle contient les données envoyées en paramètres dans l'URL.</li>
        <li><span class="code1">$_POST</span> : de même, c'est une variable que vous connaissez et qui contient les informations qui viennent d'être envoyées par un formulaire.</li>
        <li><span class="code1">$_FILES </span>: elle contient la liste des fichiers qui ont été envoyés via le formulaire précédent.</li>
    </ul>
    <div class="inner1">
    <p><span style="font-weight:bold; font-size: 1.5em;">En résumé</span></p>
    <ul>
        <li>Les variables superglobales sont des variables automatiquement créées par PHP. Elles se présentent sous la forme d'arrays contenant différents types d'informations.</li>
        <li>Dans les chapitres précédents, nous avons découvert deux superglobales essentielles :<span class="code1">$_GET </span>(qui contient les données issues de l'URL) et <span class="code1">$_POST</span>(qui contient les données issues d'un formulaire).</li>
        
    </ul>
    </div>
</body>
</html>