# Lapin Blanc

Challenge web contenant 3 flags.

## Partie 1 - Lire l'illisible.

### Description

Il y a un fichier texte contenant un flag sur le serveur.

### Solution

Dans robots.txt on retrouve qu'il y a un fichier contenant le flag.

Disallow: /#flag_lol_tu_ne_peux_pas_me_lire.txt

On ne peut pas aller lire le fichier en naviguant directement vers ce fichier. C'est à cause du caractère _#_ qui considère que ce qui vient après est un id du code HTML. Il suffit d'encoder le URL pour y accéder.

/%23flag_lol_tu_ne_peux_pas_me_lire.txt

`FLAG-3d94f247c26444ce7c9658d9dbba9e0f`


## Partie 2 - Connexion

### Description

Pouvez-vous vous connecter à l'interface?

### Solution

Dans robots.txt on retrouve my_database.txt qui contient des hashs (MD5) puis des noms d'usagers. Le hash de admin est facilement retrouvable par internet ou _crackable_ avec des dictionnaires de mots de passe. 

admin:strongpassword

On retrouve le flag une fois connecté.

`FLAG-6f209b3270405988efdba2ee208d15a3`


## Partie 3 - Hypnocrapaud

### Description

Écoutez l'hypnocrapaud.

### Solution

Une fois connecté sur la platforme, un cookie nous est assigné. sa valeur est par défaut : 

false;fcbcf165908dd18a9e49f7ff27810176db8e9f63b4352213741664245224f8aa

Apres le point virgule c'est un hash de type SHA256 de "false". false;sha56(false). Pour obtenir le flag, il suffit de modifier celui-ci pour true et de remplacer le hash pour sha256(true).

true;b5bea41b6c623f7c09f1bf24dcae58ebab3c0cdd90ad966bc43a45b44867e12b

`FLAG-859780595ea41f76c690bb00c06d14a5`




