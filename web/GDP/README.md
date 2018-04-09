# GDP

Challenge web contenant 2 flags.

## Partie 1 - App/Serveur

### Description

C'est difficile de gérer les templates avec Flask... J'espère que mon code source n'est pas à risque.

### Solution

Le serveur est vulnérable au LFI. On peut demander n'importe quel fichier avec ?page=. 

En regardant le link donné en bas de page (template qui a été utilisé pour faire le serveur), on peut voir que dans celui-ci le nom du fichier du serveur est _app.py_. On peut retrouver le code source de la page en naviguant vers ?page=app.py.

Le premier flag est en commentaire dans le code source de app.py

`FLAG-14635cb0de4e68862653e1980c668fb2`

## Partie 2 - Déchiffrer les mots de passe.

### Description

Pouvez-vous déchiffrer les mots de passe?

### Solution

Une fois avoir lu le code de app.py, on peut comprendre que l'encryption utilisée est un simple XOR avec une clé donné en argument lors de l'exécution du serveur.

Pour retrouver la ligne de commande utilisé lors de l'exécution du serveur, on peut aller lire le fichier /proc/self/cmdline.

?page=../../../proc/self/cmdline

Pour retrouver la clé : 

python2 /home/gpd/src/app.py VnfTjsPslvfi3sA3a300dXodlakvmbt

Il est maintenant possible de XOR le flag avec la clé.

`FLAG-f6b38ebebe39d759338`
