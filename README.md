# Top Tennis

Cette page est un test d'apprentissage pour un stage fait en deux semaine.

créez une base de donné puis insérer le dans la base de donnée 
ATTENTION mettez vos mots de passe et nom d'utilistateur de votre phpmyadmin dans connexion.php

## Usage

Build the Docker environment:

```sh
docker compose build
```

Start the project:

```sh
docker compose up
```

Create the database:

```sh
docker compose exec db sh
echo 'CREATE DATABASE tennis_website' | mysql
mysql tennis_website < ./tennis_webiste.sql
```