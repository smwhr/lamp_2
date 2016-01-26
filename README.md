Exercices Black Jack
==============

Le corrigé est mis en ligne sur ce repository au fur et à mesure du cours.

Énoncés
-------

Ex 0 : Model du jeu

Ex 1 : Implémentation du scénario "Banque" :  
La banque tire 2 cartes  
Tant que la somme de ses cartes vaut moins de 17, elle en tire une nouvelle  
Si elle dépasse 21, elle perd

Ex 2 : Implémenter une classe pour enregistrer l'état du jeu

Ex 3 : Mettre en place un formulaire pour qu'un joueur puisse décider  
Le joueur se voit distribué 2 cartes  
Il peut décider d'en tirer une ou de s'arrêter  
Si il dépasse 21, il perd

Ex 3 : Jeu contre la banque  
La banque tire 2 cartes  
Le joueur tire 2 cartes  
Le joueur joue jusqu'à perdre ou s'arrêter  
Si le joueur perd, c'est perdu  
Si le joueur s'arrête :  
La banque joue suivant le scénario précédemment défini  
Si la banque perd (dépasse 21), le joueur gagne  
Si la banque fait plus que le joueur, la banque gagne  
Si le joueur fait plus que la banque, le joueur gagne  
Si le joueur et la banque ont le même score, personne ne gagne.

Ex 4 : Règle de l'As
Un as vaut 11 par défaut. Si le joueur a dépassé 21, alors l'as vaut 1.

Contraintes
-----------
La page ne doit pas renvoyer la requête POST