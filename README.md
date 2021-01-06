# webstart-shop
Boutique Symfony

## Installation
Après le clone lancez les commandes suivantes :

* docker-compose run --no-deps --rm php composer install
* docker-compose run --no-deps --rm node yarn install


## Liste des commandes
composer require twig
composer require --dev maker
composer require annotation
symfony console make:controller HomeController
Jonathan_Intervenant_DevAujourd’hui à 17:19
composer require symfony/webpack-encore-bundle
:point_up_2: pour ajouter des outils de front dans Symfony
puis sortir du conteneur PHP : exit
docker-compose up -d
pour relancer le conteneur node
docker-compose run --no-deps node yarn install
Jonathan_Intervenant_DevAujourd’hui à 17:41
docker-compose run --no-deps node yarn run dev
Jonathan_Intervenant_DevAujourd’hui à 17:48
docker-compose exec node /bin/sh
yarn add bootstrap --dev
yarn add sass-loader@^9.0.1 sass --dev
recompiler les assets : docker-compose run --no-deps node yarn run dev --watch
yarn remove node-sass && yarn add sass --dev