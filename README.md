# Symfony4-API-REST
 ***  Consommer API REST ***

# 1) Description 
1 - utilisation de API https://geo.api.gouv.fr/decoupage-administratif pour récuperer les région.

2 - Déserialiser les données récuperer (Json) en utilisant la fonction deserialize du Component SerializerInterface.

3 - Récuperer les départements de chaque région (code région) et les deserialiser (SerializerInterface) pour les afficher par la suite. 

4 - Concernant le moteur d'affichage Twig : utilisation d'un théme de Bootswatch 

# 2) Récuperer le projet 
1 - git clone 

2 - composer install 

3 - composer require symfony/web-server-bundle --dev

4 - php bin/console server:run

5 - pour visualiser la liste des région vous devez vous rendre sur "/listeregions" et il suffit de cliquer sur la région de votre choix pour visualiser la liste des départements