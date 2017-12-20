<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css">
        <title>Open Classroom copycat</title>
    </head>
    
 
    <body>
 

    <?php include("header.php");?>
   
    
    <?php include("menu.php");?>
    
  
    
    <div id="corps">
        <h1>Deuxieme page</h1>
        
        <p>
            plus d'info!<br />
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, dolore quos, animi eum esse soluta autem sed fugit deserunt veritatis ipsum quibusdam, voluptatibus non impedit officiis laudantium quod excepturi deleniti?
        </p>
        <p><em>en gros j'ai fait des test avec l'attribue "include" et ca marche au calme</em></p>
        <p>Le cour étant terminé je vais en profité pour ajouter des note sur les technique de code un peu plus bas.</p>
    </div>
    <div>
       <h3>En résumé</h3>
       <ul>
           <li>Une page PHP peut inclure une autre page (ou un morceau de page) grâce à l'instructioninclude.</li>
           <li>L'instructionincludesera remplacée par le contenu de la page demandée.</li>
           <li>Cette technique, très simple à mettre en place, permet par exemple de placer les menus de son site dans un fichiermenus.phpque l'on inclura dans toutes les pages. Cela permet de centraliser le code des menus alors qu'on était auparavant obligé de le copier dans chaque page sur nos sites statiques en HTML et CSS !</li>
       </ul>
        
    </div>
    <div>
        <h2>Codez proprement</h2>
        <p>En programmation comme partout ailleurs, il y a deux types de personnes : celles qui effectuent leur travail rapidement, mais ne se soucient pas de la qualité, de la lisibilité, et de l'évolutivité de leur code , et celles qui font l'effort de soigner un peu leur travail, car elles ont conscience que ce petit travail supplémentaire sera un gain de temps énorme à l'avenir.</p>
        <p>Quand on débute, on a tendance à se dire « Ça marche, parfait, ne touchons plus à rien et laissons comme ça ». C'est un mauvais réflexe, et je ne serai pas le seul à vous le dire : n'importe quel programmeur PHP ayant un peu d'expérience sait qu'un code qui fonctionne n'est pas forcément bon.</p>
        <p>Cette annexe est en fait une suite de petits conseils <b>apparemment peu importants</b>, sur lesquels je voudrais que <b>vous portiez toute votre attention.</b>
C'est peu de choses, et c'est pourtant ce qui fait la distinction entre un « bon » programmeur et euh… un programmeur du dimanche !</p>
    </div>
    <div class="cour1">
        <h2>Des noms clairs</h2>
        <p>J'ai plusieurs fois insisté sur ce point dans les premiers TP du cours, et cette fois j'y reviens avec un peu plus d'explications.</p>
        <p>Quand vous créez un script PHP, vous devez <b>inventer</b> des noms. Vous allez devoir donner des noms à différents types d'éléments :</p>
        <ul>
            <li>les variables;</li>
            <li>les fonctions;</li>
            <li>les classes.</li>
        </ul>
        <p>L'idée est simple : il faut que vous fassiez l'effort de choisir des noms de variables et de fonctions clairs et compréhensibles.</p>
        <p>Par exemple, voici de mauvais noms de variables :</p>
        <ul>
            <li><span class="code1">$temp</span>;</li>
            <li><span class="code1">$data</span>;</li>
            <li><span class="code1">$info</span>;</li>
            <li><span class="code1">$val</span>;</li>
            <li><span class="code1">$val2</span>;</li>
        </ul>
        <p>Je n'ai pas inventé ces noms de variables ; en fait, pour tout vous dire, ce sont des noms que j'ai vraiment vus dans de nombreux codes source.</p>
        <p>Par exemple,<span class="code1">$info</span> : « info », oui, mais info sur QUOI ?</p>
<p>C'est pourtant ça qui est crucial : savoir ce que contient une variable. Une variable contient toujours une info, c'est à vous de préciser laquelle.</p>
<p>Je ne vous parle même pas des variables « sans nom » :<span class="code1">$temp</span>,<span style="code1">$tmp</span>et compagnie. Ces noms sont à bannir absolument.</p>
  
   <div class="note">
       <p class="bold1">Mais à quoi ça peut servir de chercher un nom de variable clair ? Après tout, c'est mon code, c'est pour moi, je comprends très bien ce que je fais !</p>
   </div>
   <p>Faux.</p>
   <p>Bien sûr que vous savez ce que vous faites (personne n'est dans votre esprit, après tout). Et pourtant le problème peut apparaître dans deux cas.</p>
   <ul>
       <li>Si vous donnez votre code PHP à un ami pour qu'il vous aide à un endroit où vous bloquez, ou pour qu'il continue votre code. Essayez par exemple de montrer votre code PHP sur des forums sur Internet, vous verrez que si vous utilisez des noms peu clairs, vous aurez beaucoup moins de réponses parce qu'il aura été bien plus difficile de comprendre le fonctionnement de votre code !

</li>
       <li>Un autre cas (sous-estimé), c'est celui où vous retouchez votre code plus tard. Je ne dis pas le lendemain (les idées sont encore fraîches), mais dans trois mois, ou même dans trois semaines. Croyez-en mon expérience : il m'est arrivé de devoir relire mon code source en me demandant <b>« Mais qu'est-ce que j'ai bien pu vouloir faire, là ? ».</b></li>
   </ul>
   <p>Passez ne serait-ce qu'une seconde de plus à réfléchir à des noms clairs. N'ayez pas peur de choisir des noms un peu longs, ce n'est pas une perte de temps, <b>bien au contraire.</b></p>
   <p>Vous pouvez utiliser le symbole underscore « _ » pour remplacer les espaces, qui sont, je vous le rappelle, interdits dans les noms de variables et de fonctions.</p>
   <p>Voici quelques exemples de noms de variables clairs :</p>
   <ul>
       <li><span class="code1">$ip_visiteur</span>;</li>
       <li><span class="code1">$pseudo_membre</span>;</li>
       <li><span class="code1">$date_news</span>;</li>
       <li><span class="code1">$mot_de_passe</span>;</li>
       <li><span class="code1">$forum_selectionne</span>.</li>
   </ul>
   <p>Pour finir, et en espérant vous convaincre (parce que croyez-moi, c'est très important), voici le même code source en deux exemplaires :</p>
   <ul>
       <li>le premier contient des noms courts et pas clairs ; il est difficile de comprendre rapidement ce qu'il fait ;</li>
       <li>le deuxième contient des noms un peu plus longs, mais au moins on arrive tout de suite à savoir à quoi sert telle variable ou telle fonction.

</li>
        </ul>
  <p>Ces deux codes produisent exactement le même résultat ; simplement, l'un d'eux est beaucoup plus compréhensible que l'autre.</p>
  <p class="bold1">Des noms de variables peu clairs
</p>
   
   <div>
       <a href="https://openclassrooms.com/courses/concevez-votre-site-web-avec-php-et-mysql/codez-proprement-1#/id/r-4239419">Lien du 1er exemple</a>
   </div>
   <p class="bold1">Des noms de variables beaucoup plus clairs</p>
   <div><a href="https://openclassrooms.com/courses/concevez-votre-site-web-avec-php-et-mysql/codez-proprement-1#/id/r-4239421">Lien vers le 2eme exemple</a></div>
   <p>C'est fou comme des noms écrits correctement en français permettent d'y voir plus clair.</p>
    
    </div>
    <div class="cour2">
        <h2>Indentez votre code</h2>
        <p>Une des premières choses qui saute aux yeux quand on regarde un code source, c'est son <b>indentation.</b></p>
        <p>Le principe de l'indentation, c'est d'utiliser intelligemment les tabulations pour « décaler » certaines parties de votre code afin de montrer plus clairement la structure.
La quasi-totalité des éditeurs de texte ont l'habitude que vous utilisiez du code indenté, et vous aident donc beaucoup à clarifier votre code.</p>
       <div class="note1">
           <p>Quand je dis « la plupart », je ne parle pas de Bloc-notes. Si vous tapez votre code PHP dans Bloc-notes, vous feriez bien d'essayer un vrai logiciel fait pour ça, comme Notepad++ dont je vous ai parlé dans un des premiers chapitres.
Non seulement avec un vrai éditeur vous avez une indentation du code semi-automatique, mais en plus votre code est automatiquement coloré, ce qui aide énormément, croyez-moi !</p>
       </div>
       <p>Il y a plusieurs « styles » d'indentation de code ; cela varie un peu selon les goûts des développeurs. Celui que je vous propose est simple à retenir :</p>
        <ul>
            <li>chaque fois que vous ouvrez des accolades<span class="code1">{</span>, par exemple pour un<span class="code1">if</span>, un<span class="code1">while</span> ou un<span class="code1">for</span>, vous décalez tout le code qui suit d'une tabulation vers la droite ;</li>
            <li>chaque fois que vous fermez une accolade<span class="code1">}</span>, vous décalez tout le code qui suit d'une tabulation vers la gauche.</li>
        </ul>
        <p class="bold1">Avec un code non indenté</p>
        <p>C'est plus clair avec un exemple, alors voyez vous-mêmes. Voici ce que ça donne avec un code non indenté :</p>
        <p><a href="https://openclassrooms.com/courses/concevez-votre-site-web-avec-php-et-mysql/codez-proprement-1#/id/r-4239436"></a>lien vers l'exemple</p>
        <p class="bold1">Avec un code indenté</p>
        <p>Et voici maintenant le même code correctement indenté si on respecte la règle des tabulations :</p>
        <p><a href="https://openclassrooms.com/courses/concevez-votre-site-web-avec-php-et-mysql/codez-proprement-1#/id/r-4239439">Lien vers l'exemple du bon code</a></p>
        <p>L'avantage avec un code indenté, c'est qu'on voit bien les « niveaux » des instructions. On sépare bien les blocs, et on arrive à se repérer bien plus facilement. ;-)</p>
        <p>Avoir un code correctement indenté est quasiment indispensable lorsque vous commencez à faire des scripts de plusieurs dizaines de lignes (ce qui arrive assez vite !).</p>
        <div class="note2">
            <p>Certains développeurs ont tendance à remplacer les tabulations par deux ou quatre espaces, car la largeur d'une tabulation peut varier d'un logiciel à un autre, alors que celle d'un espace est fixe. En général, c'est l'éditeur de texte lui-même qui convertit nos tabulations par des espaces, de façon transparente.

</p>
        </div>
    </div>
    <div class="cour3">
        <h2>Un code correctement commenté</h2>
        <p>Le dernier point, qui est peut-être le plus délicat pour des raisons de dosage, concerne les commentaires dans le code.<br>
Les commentaires ne servent à rien, puisqu'ils ne sont pas lus par PHP lors de la génération de la page… comme les noms de variables et l'indentation du code, me direz-vous.</p>
   <p>En effet. Mais là encore, les commentaires sont pour vous, et éventuellement pour la personne qui lira votre code. Il <b>faut</b> commenter votre code, mais il ne faut surtout pas tomber dans l'excès !</p>
   <p>Je m'explique. Si après une ligne comme celle-ci </p>
   <p><a href="https://openclassrooms.com/courses/concevez-votre-site-web-avec-php-et-mysql/codez-proprement-1#/id/r-4239448">lien vers l'exemple</a></p>
    </div>
    <div class="cour4">
        <h2>Les standards</h2>
        <p>Vous l'aurez compris, lorsque nous travaillons en équipe, il est important de garder une certaine cohérence dans la manière d'écrire du code. Cela sera d'autant plus important lorsque vous développerez avec un framework tel que <a href="https://www.symfony.com">Symfony</a>.</p>
        <p>Un collectif de <a href="http://www.php-fig.org/members/">développeurs</a> s'est réuni pour établir des standards à suivre en ce qui concerne l'écriture de code PHP. Ce consortium s'appelle le FIG (Framework Interop Group) et a surtout été créé pour faire en sorte que l'ensemble des frameworks PHP respectent des règles communes.</p>
        <p>Les standards sont appelés "PSR" (PHP Standards Recommendations) et il y en toute une liste. Vous pouvez les retrouver ici : <a href="http://www.php-fig.org/psr/"> liste des PSR</a>.</p>
        <p>Je vous propose de vous attarder sur deux d'entres elles :</p>
        <ul>
            <li>la <a href="http://www.php-fig.org/psr/psr-1/">PSR-1</a>, règles basiques en rapport avec le standard de codage,

</li>
            <li>et la <a href="http://www.php-fig.org/psr/psr-2/">PSR-2</a>, guide du coding style.</li>
        </ul>
        <p>Ces standards renferment tout un ensemble de règle qu'il faut suivre. Je vous invite donc à les lire attentivement.</p>
        <p>Il se peut que vous fassiez tout de même des erreurs… Il existe un outil pratique qui automatise la correction de votre code au regard des règles imposées. Je vous invite donc à utiliser a PHPCS-Fixer.</p>
        <p>C'est un outil qui ne s'utilise qu'en ligne de commande. Vous retrouverez les <a href="https://github.com/FriendsOfPHP/PHP-CS-Fixer/blob/master/README.rst"> étapes d'installation ici</a> (en anglais). Je vous invite vivement à utiliser cet outil pour faire en sorte que votre code respecte les règles de codage.</p>
    </div>
    
    
    
    
  <?php include("footer.php");?>
    
    </body>
</html>