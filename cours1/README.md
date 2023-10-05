# symfony_tuto

### "symfony new --webapp my projet"
#### nous permet de creer un new projet symfony

-----------------------------
### "console make:"
#### nous permet de rajouter des choses dans le dossier specifik
#### exp console make:user // modification de choses dans le dossier "user"

-----------------------------
### "symfony console doctrine:database:create"
#### nous permet de creer une base de donnée

-----------------------------
### "symfony console make:registration-form"
#### nous permet de creer une user de connexion pour tester la connexion

-----------------------------
### "symfony console doctrine:database:create"
#### nous permet de creer une base de donnée

-----------------------------
### "composer composer require fakerphp/faker"
#### Faker est une bibliothèque PHP qui génère de fausses données pour vous. Que vous ayez besoin de démarrer votre base de données, de créer de beaux documents XML, de remplir votre persistance pour la tester ou d’anonymiser des données provenant d’un service de production, Faker est fait pour vous.

-----------------------------
### "php bin/console make"
#### nous permet de voire tout les make dispo

-----------------------------------
### les "Datafixtures" pour remplire la DB
#### "symfony console d:f:l" ou "symfony console doctrine:fixture:load"
#### c'est pour charger les 'fixtures' 
#### mettre "--no-interacton" (il faut etre sur), pour ne pas à chaque fois mettre yes pour charger les 'fixtures'

--------------------------------------
### le "#[ORM\JoinColumn(onDelete: 'cascade')]"
####permet dans la relation (le 'ON DELETE' sur phpmyadmin )de le mettre en 'CASCADE' pour qu'on puisse suppimer direct dans la table
