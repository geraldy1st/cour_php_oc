<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../style.css">
    <script src="https://use.fontawesome.com/40a1716643.js"></script>

    <title>Cookies</title>
</head>
<body>
  <div class="content">
   <h1>Session and Cookies</h1>
   <div class="wrapper">
    <p>Les sessions constituent un moyen de conserver des variables sur toutes les pages de votre site. Jusqu'ici, nous étions parvenus à passer des variables de page en page via la méthode  <span class="code1">GET</span> (en modifiant l'URL :  <span class="code1">page.php?variable=valeur</span> ) et via la méthode <span class="code1">POST</span>  (à l'aide d'un formulaire).</p>
    <p>Mais imaginez maintenant que vous souhaitez transmettre des variables sur toutes les pages de votre site pendant la durée de la présence d'un visiteur. Ce ne serait pas facile avec <span class="code1">GET</span> et <span class="code1">POST</span> car ils sont plutôt faits pour transmettre les informations une seule fois, d'une page à une autre. On sait ainsi envoyer d'une page à une autre le nom et le prénom du visiteur, mais dès qu'on charge une autre page ces informations sont « oubliées ». C'est pour cela qu'on a inventé les sessions.</p>
    </div>
    </div>
    <div class="wrapper">
        <h4>Fonctionnement des sessions</h4>
        <p>Comment sont gérées les sessions en PHP ? Voici les trois étapes à connaitre.</p>
        <ol>
            <li>Un visiteur arrive sur votre site. On demande à créer une session pour lui. PHP génère alors un numéro unique. Ce numéro est souvent très gros et écrit en hexadécimal, par exemple : a02bbffc6198e6e0cc2715047bc3766f. (Ce numéro sert d'identifiant et est appelé « ID de session » (ou  <span class="code1">PHPSESSID</span> ). PHP transmet automatiquement cet ID de page en page en utilisant généralement un cookie.)</li>
            <li>Une fois la session générée, on peut créer une infinité de variables de session pour nos besoins. Par exemple, on peut créer une variable <span class="code1">$_SESSION['nom']</span>  qui contient le nom du visiteur, <span class="code1">$_SESSION['prenom'] </span> qui contient le prénom, etc. Le serveur conserve ces variables même lorsque la page PHP a fini d'être générée. Cela veut dire que, quelle que soit la page de votre site, vous pourrez récupérer par exemple le nom et le prénom du visiteur via la superglobale  <span class="code1">$_SESSION</span>  !</li>
            <li>Lorsque le visiteur se déconnecte de votre site, la session est fermée et PHP « oublie » alors toutes les variables de session que vous avez créées. Il est en fait difficile de savoir précisément quand un visiteur quitte votre site. En effet, lorsqu'il ferme son navigateur ou va sur un autre site, le vôtre n'en est pas informé. Soit le visiteur clique sur un bouton « Déconnexion » (que vous aurez créé) avant de s'en aller, soit on attend quelques minutes d'inactivité pour le déconnecter automatiquement : on parle alors de timeout. Le plus souvent, le visiteur est déconnecté par un timeout.</li>
        </ol>
        <p>Tout ceci peut vous sembler un peu compliqué, mais c'est en fait très simple à utiliser. Vous devez connaître deux fonctions :</p>
        <ul>
            <li><span class="code1">session_start() </span> : démarre le système de sessions. Si le visiteur vient d'arriver sur le site, alors un numéro de session est généré pour lui. Vous devez appeler cette fonction au tout début de chacune des pages où vous avez besoin des variables de session.

</li>
            <li><span class="code1">session_destroy()</span>: ferme la session du visiteur. Cette fonction est automatiquement appelée lorsque le visiteur ne charge plus de page de votre site pendant plusieurs minutes (c'est le timeout), mais vous pouvez aussi créer une page « Déconnexion » si le visiteur souhaite se déconnecter manuellement.</li>
        </ul>
    </div>
    <div class="wrapper">
        <p class="note1">Il y a un petit piège : il faut appeler  <span class="code1">session_start()</span>  sur chacune de vos pages AVANT d'écrire le moindre code HTML (avant même la balise  DOCTYPE. Si vous oubliez de lancer <span class="code1"> session_start()</span> , vous ne pourrez pas accéder aux variables superglobales <span class="code1">$_SESSION</span> .</p>
    </div>
    <div class="wrapper">
        
    <a href="mapage.php"> lien vers la page d'exemple</a>
    <img style="max-width:100%;" class="img1" src="https://user.oc-static.com/upload/2017/01/16/14845555634693_0154.png" alt="exemple">
    </div>
    <div class="wrapper">
        <h3>Les cookies</h3>
        <p>Travailler avec des cookies revient à peu près à la même chose qu'avec des sessions, à quelques petites différences près que nous allons voir. Voici ce que nous allons faire pour découvrir les cookies :</p>
        <ol>
            <li>on va voir ce qu'est exactement un cookie (parce que si ça se trouve, il y en a qui croient en ce moment même que je vais parler de recettes de cuisine !) ;</li>
            <li>ensuite, nous verrons comment <span class="bold1">écrire un cookie</span> : c'est facile à faire, si on respecte quelques règles ;</li>
            <li>enfin, nous verrons comment <span class="bold1">récupérer le contenu d'un cookie</span> : ce sera le plus simple.

</li>
        </ol>
        <h4>Qu'est-ce qu'un cookie?</h4>
        <p>Un cookie, c'est un petit fichier que l'on enregistre sur l'ordinateur du visiteur.
Ce fichier contient du texte et permet de « retenir » des informations sur le visiteur. Par exemple, vous inscrivez dans un cookie le pseudo du visiteur, comme ça la prochaine fois qu'il viendra sur votre site, vous pourrez lire son pseudo en allant regarder ce que son cookie contient.</p>
   <p>Parfois les cookies ont une mauvaise image. On fait souvent l'erreur de penser que les cookies sont « dangereux ». Non, ce ne sont pas des virus, juste de petits fichiers texte qui permettent de retenir des informations. Au pire, un site marchand peut retenir que vous aimez les appareils photos numériques et vous afficher uniquement des pubs pour des appareils photos, mais c'est tout, ces petites bêtes sont inoffensives pour votre ordinateur.</p>
   <p>Chaque cookie stocke généralement une information à la fois. Si vous voulez stocker le pseudonyme du visiteur et sa date de naissance, il est donc recommandé de créer deux cookies.</p>
   <p class="note"><i class="fa fa-info-circle" aria-hidden="true"></i> Où sont stockés les cookies sur mon disque dur ?</p>
   <p>Cela dépend de votre navigateur web. Généralement on ne touche pas directement à ces fichiers, mais on peut afficher à l'intérieur du navigateur la liste des cookies qui sont stockés. On peut choisir de les supprimer à tout moment.</p>
   <p>Si vous avez Mozilla Firefox, vous pouvez aller dans le menu  Outils / Options / Vie privée  et cliquer sur <span class="code1">Supprimer des cookies spécifiques </span>. Vous obtenez la liste et la valeur de tous les cookies stockés, comme sur la figure suivante.</p>
   <img style="max-width:100%; margin: 0px auto;" src="https://user.oc-static.com/upload/2017/01/16/14845564048136_218449.png" alt="">
    <h5>exemple de cookie sur Firefox</h5>
    </div>
    <div class="wrapper">
        <h4>Écrire un cookie</h4>
        <p>Comme une variable, un cookie a un nom et une valeur. Par exemple, le cookie pseudo aurait chez moi la valeur  <span class="code1">M@teo21</span> .</p>
        <p>Pour écrire un cookie, on utilise la fonction PHP  <span class="code1">setcookie</span> (qui signifie « Placer un cookie » en anglais).</p>
        <p>On lui donne en géneral trois parametres, dans l'ordre suivant:</p>
        <ol>
            <li>le nom du cookie (ex. :  <span class="code1">pseudo</span> ) ;</li>
            <li>la valeur du cookie (ex. :  <span class="code1">M@teo21</span> ) ;

</li>
            <li>la date d'expiration du cookie, sous forme de timestamp (ex. :  <span class="code1">1090521508</span> ).</li>
        </ol>
        <p>Le paramètre correspondant à la date d'expiration du cookie mérite quelques explications. Il s'agit d'un timestamp, c'est-à-dire du nombre de secondes écoulées depuis le 1er janvier 1970. Le timestamp est une valeur qui augmente de 1 toutes les secondes. Pour obtenir le timestamp actuel, on fait appel à la fonction  <span class="code1">time()</span>. Pour définir une date d'expiration du cookie, il faut ajouter au « moment actuel » le nombre de secondes au bout duquel il doit expirer.</p>
        <p>Si vous voulez supprimer le cookie dans un an, il vous faudra donc écrire :  time() + 365*24*3600 . Cela veut dire : timestamp actuel $+$ nombre de secondes dans une année. Cela aura pour effet de supprimer votre cookie dans exactement un an.</p>
        <p>Voici donc comment on peut créer un cookie</p>
        <em>voir le code ou <a href="https://openclassrooms.com/courses/concevez-votre-site-web-avec-php-et-mysql/session-cookies#/id/r-4275163" target="_blank">le lien du site OC</a></em>
        <h4>Sécuriser son cookie avec le mode <span class="code1">httpOnly</span></h4>
        <p>Je recommande toutefois d'activer l'option  <span class="code1">httpOnly</span>  sur le cookie. Sans rentrer dans les détails, cela rendra votre cookie inaccessible en JavaScript sur tous les navigateurs qui supportent cette option (c'est le cas de tous les navigateurs récents.). Cette option permet de réduire drastiquement les risques de faille XSS sur votre site, au cas où vous auriez oublié d'utiliser  <span class="code1">htmlspecialchars</span>  à un moment.</p>
        <br>
        <p class="bold1">Sécuriser son cookie avec le mode httpOnly</p>
        <p>Le dernier paramètre <span class="code1">true</span>  permet d'activer le mode <span class="code1">httpOnly</span>  sur le cookie, et donc de le rendre en quelque sorte plus sécurisé. Ça ne coûte rien et vous diminuez le risque qu'un jour l'un de vos visiteurs puisse se faire voler le contenu d'un cookie à cause d'une faille XSS.

</p>
       <em>voir le code ou <a href="https://openclassrooms.com/courses/concevez-votre-site-web-avec-php-et-mysql/session-cookies#/id/r-4275163" target="_blank">le lien du site OC</a></em>       
        
    </div>
   
   
</body>
</html>