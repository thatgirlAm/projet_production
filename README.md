
![logo](https://github.com/thatgirlAm/projet_production/assets/117035426/738889a4-7456-47d1-9c2c-8733d35e63bb)

(Read.me par Amaële DIOP(pas Chatgpt))

# Principe
Nous avons mis en place une plateforme afin de faciliter les opérations de contrôle qualité au sein de l'entreprise SmartTech.

# Framework
Après maintes tentatives, nous avons fait le choix de partir sur une structure un peu différente de celle donnée par les profs (qui nous aura valu de devoir débuggé toute la nuit car certaines erreurs en local étaient invisibles). En effet, nous avons voulu faire un système de routing pour simplifier les transactions, charger les modèles lorsqu'ils ne semblaient pas avoir été appelés. 
<br><br>Nous avons également choisi d'utiliser les noms des classes, des vues, et des controllers pour simplifier le routing (un controller avait le même nom que sa classe, la vue s'appelait "non du controller.view.php". Ceci a simplifié considerablement notre travail (avec le debuggage biensur). 

## Dossier "core"

Nous avons créé un dossier "core" avec tous les fichiers de base comprenant la classe "Controller" avec des fonctions permettant de charger une vue par exemple, la classe "Model" (la variable protégée $table est choisie après par le modèle qui utilise la Trait) avec une fonction query pour simplifier les requêtes, des fonctiones where pour la recharche avec condition, insert pour l'ajout d'information, update pour la modification d'informations etc..
<br> Dans ce dossier là, nous avons un fichier init.php qui lui est appelé dès le début de la session pour charger tous ces fichiers de baseet ne pas avoir à les appeler.

# Sources 
Pour mener ce projet, nous nous sommes appuyé sur des cours de MVC, des cours W3Schools et avons bénéficié de l'aide de Chatgpt (majoritairement pour la compréhension de code erreur et pour la correction de syntaxe).
(pour Chatgpt, il y a un document pdf qui regroupe les types de requêtes que nous demandions, avec un tableau)

<strong>Voici la liste non exhaustive de nos sources :</strong>

 ### Pour s'éduquer en MVC
<ol>

 
<li>3 heures de pur bonheur pour apprendre le fonctionnement et la construction de framwork MVC :
<a href="https://www.youtube.com/watch?v=q0JhJBYi4sw&list=PLY3j36HMSHNUCsG7S1lnBg_mOg3_VZrcq">PHP MVC Framework from scratch</a></li>

<li>2 heures pour approfondir les notions en MVC : 
<a href="https://www.youtube.com/watch?v=xgFPPT7-OqM&list=PLY3j36HMSHNUCsG7S1lnBg_mOg3_VZrcq&index=2&pp=iAQB">PHP MVC Framework from scratch(Update)</a></li>

<li>6 heures de fun en MVC : (bon j'en ai fait 3, mais quand même) <a href="https://www.youtube.com/watch?v=6ERdu4k62wI&t=12793s">Use PHP to Create an MVC Framework - Full Course</a></li>

<li><a href="https://www.youtube.com/watch?v=DvWUFQDJoAs&list=PLtfHeV0hthuj3q33ksWpIcEs290nr-gAt"> Des videos encore le sur MVC...</a>/li>

</ol>

### Pour s'éduqer en hmtl, css, javascript : 

<ol>
  <li><a href="https://www.w3schools.com/">W3Schools</a></li>
</ol>

#### Pour s'éduquer en PHP : 

<ol><li><a href="https://www.php.net/docs.php">Documentation PHP<a></li></ol>

# Travail en groupe.

Pour le travail de groupe, nous nous sommes aidés de GitHub (et de son extension Vs Code). Nous avons chacun une branche (sauf en cas d'erreur) dans laquelle nous performions toutes nos modifications et faisions des pull request (pour la traçabilité au lieu du "pull from") pour mettre le main à jour.

# Difficultés, limites...

Ce travail a necessité beaucoup de rigeur car la structure MVC bien qu'étant beaucoup organisée que le travail sans framework, necéssite beaucoup de vérification car elle suscite beaucoup de bugs.
<br> 
##### Les problèmes majeurs que nous avons rencontrés : 
<ul>
  <li>Le routing sur serveur car notre variabe ROOT contenait l'url et la formulation 'https://' n'étant pas acceptée par Php, nous avons dû tout basculer en liens relatifs ou absolus.</li>
  <li>Un énorme perte de temps dans les bugs de commuciation avec la base de donnée ('array to string', pas les bonnes donées, ne pas arriver à insérer les données)</li>
  <li>L'implémentation de données dans la base de donnée (notamment avec la donnée 'date' </li>
</ul>

##### Ce que nous aurions aimé accomplir : 
Nous n'avons pas terminé le projet et considérons qu'il manque une grande partie des fonctionnalités prévues initialement, voici ce que nous aurions aimé implémenter si nous avions eu le temps :

<ul>
  <li> Implémentation d'une parge 'Archives' (avec un insert des opérations dont la date est inférieure à aujourd'hui et qui est validée)</li>
  <li> Un téléchargement de compte rendu avec du Javascript et du Php</li>
  <li>Un management des opérateurs avec les fonctions 'ajouter/retirer un opérateur'</li>
  <li>Un management des critères avec des fonctions 'ajouter/retirer des critères'</li>
  <li>Passer la vérification W3Verificator</li>
</ul>

# Conclusion

A travers ce projet, nous avons pu apprendre à manipuler des structures MVC et nous nous sommes rendu compte de leur puissance de simplification (surtout avec les fichiers de routing). 
<br> Si vous avez lu jusqu'ici, nous vous remercions d'avoir pris le temps (c'était beaucoup de blabla,sorry).
