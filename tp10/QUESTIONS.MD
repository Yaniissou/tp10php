# Questions du TP

1. Quel fichier PHP va recevoir et traiter les données de ce formulaire? 
   - index.php
2. Pourquoi l'URL du lien de "Forgotten password?" contient le répertoire "view" ? 
   - Car le fichier not_implemented.html se trouve dans le répertoire "view"
3.  Pourquoi le lien de "Forgotten password?" n'est pas une bonne solution ? 
    - Parce que c'est pas géré via le index.php
4. Pourquoi la méthode post est utilisée dans ce formulaire ? 
    - Pour ne pas afficher en clair le mot de passe de l'utilisateur
5. Quand l'utilisateur entre son mot de passe, il n'est pas affiché à l'écran. Qu'est-ce qui conditionne ce fonctionnement (dans le HTML et/ou dans le CSS) ? 
    - Le formulaire
6.  Est-ce que le masquage du mot de passe en entrée (input) avec l'usage de POST est suffisant pour la sécurité de ce mot de passe ? 
    - Non, car le mot de passe peut être trouvé en inspectant la page.
7.  Du coté du PHP (index.php), comment peut-on savoir si l'utilisateur à cliqué sur le bouton "login" ou "new" ? 
    - Dans la méthode POST, la valeur de "submit" est égale à login ou à new  