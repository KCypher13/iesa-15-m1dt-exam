# calculator
vous devez écrire une machine à calculer en programmation orientée objet, et en tdd :

* la classe s'appelle calculator
* possède une propriété result, initialement à 0
* les quatre méthodes à développer s'appellent add, minus, divide et multiply
* chacune prend un seul paramètre, ne retourne rien et fait son opération sur le result (ex: add ajoute son unique paramètre à result)
* vous devrez commité après chaque étape du tdd

## livrables

dans un repertoire oop:

* un fichier calculator.js
* un fichier calculator-tests.html (et d'éventuels fichiers pour un fonctionnement offline)
* un fichier oop.md contenant le texte suivant avec les réponses :
** un objet c'est:
** des ...
** des ...
** des ...
** une ...

## bonus

* lancer une exception si le parametre n'est pas un nombre ou si on a 0 ou 2 arguments et plus
* aide :
** toute méthode possède un paramètre implicite nommé arguments
** avec arguments.length on a le nombre d'arguments dans la méthode

# Site web

ensuite, afin de m'aider à faire venir ma famille dans votre système solaire j'aurais besoin d'un site internet présentant les différentes planètes de votre système solaire :

* ce site doit être joli, avec un nom et un logo
* utiliser les technologies html et css, sans aucun outil ou framework externe (cms, twitter bootstrap...)
* un avec une home page php html, qui possède un header, un navbar, un content et un footer (fait soit meme, sans framework externe)
* le site doit fonctionner sur mon smartphone galactique via media-query (une version pour le bureau, et une version pour les mobiles, terrestres ou galactiques)
* toutes les planètes sont affichées sur cette homepage avec pour chacune le nom, la taille, la distance au soleil et les 100 premiers caractères de la description avec une petite image
* toutes ces informations sont stockées dans un fichier xml ou json, chargées et affichées dans la homepage
* un champ texte en bas me permet d'entrer le nom de la planete : si le nom correspond bien au nom d'une planète alors j'arrive à la page détail de la planete, sinon un message m'indique que cette planete n'existe pas
* la page detail affiche en plus le description complete
* dans les deux pages, une carte sera affichée avec une épingle personnalisée pointant sur le lieu de consultation

## livrables

dans un répertoire www:

* un fichier index.php
* un fichier detail.php
* un fichier desktop.css
* un fichier mobile.css

## Bonus
on peut accéder à page détail en faisant un drag and drop de l'image dans une zone cible : fonctionnalité html5