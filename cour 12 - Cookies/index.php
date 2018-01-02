<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../style.css">
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
    <img src="https://user.oc-static.com/upload/2017/01/16/14845555634693_0154.png" alt="exemple">
    </div>
   
   
</body>
</html>