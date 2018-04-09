# Musicothérapie 

Web challenge qui contient 2 flags.

## Partie 1 - ZIP

### Description

Il y a un flag téléchargeable sur le serveur.

### Solution

robots.txt donne l'information qu'il y a un dossier "mes_dossiers" sur le serveur qui contient flag.zip.

flag.zip n'est pas décompressable vu qu'il est corrompu. Il manque les _magic numbers_ du fichier pour signifier que c'est un ZIP (ils ont été remplacés par des \x00).

On remplace les 4 premiers \x00 pour \x50\x4b\x03\x04 puis on peut décompresser le fichier et retrouver le flag.

`FLAG-940bd951952f4725`


## Partie 2 - PHP Obfuscation

### Description

La section admin semble intéressante mais nous n'avons pas les droit d'accès.

### Solution

En inspectant le code source, on trouve que l'on peut faire une requête avec debug comme paramètre dans le url. Il affiche du code source du serveur.

<!-- admin.php?debug -->

Le code PHP dévoile comment les accès sont verifiés sur admin.php. En décodant le code PHP on comprend que c'est une encryption AES CBC qui est utilisée sur le cookie. On peut aussi retrouver la clé et le IV utilisés. Il suffit après de chiffrer *admin* avec la clé et le IV en mode AES CBC puis de changer l'utiliser comme cookie.

cookie admin : fecd50ba761ba910bcee7ee301f2b28a 

`FLAG-c5c564dd561a45e`
