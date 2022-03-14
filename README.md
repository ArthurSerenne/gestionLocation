## Gestion des locations :

### Projet : 

Creer une plateforme de mise en location de biens immobilier

### Technologies: 

[SYMFONY | [HTML] | [CSS] | [PHP] | [BOOTSTRAP] | [MySQL]

### Date de réalisation: 

Fin decembre 2021/ avril 2022

## Commment initialiser et utiliser le projet ?

installation du projet :

        composer install

creer la base de donnée :

        php bin/console doctrine:database:create

mettre à jour la base de donnée :

        php bin/console doctrine:schema:update --dump-sql --force
        php bin/console doctrine:fixtures:load

Utiliser la commande suivante pour demarrer le projet :

        symfony server:start
