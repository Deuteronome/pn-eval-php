# Consigne pour l'éval :

Votre nom : 
Date de l'éval :

## Avant toute chose :

Faites une "fork" de ce repository dans votre Git Hub - travaillez sur votre repository - faites un pull request pour soumettre votre travail

## Travail à faire

NB : Beaucoup de consignes sont ajoutées en commentaire dans les différents fichiers

Dans ce site, l'utilisateur est invité à entrer son nom (la partie home.php et homeView.php) et il est redirigé vers une page où un message de bienvenue s'affiche et où une liste d'évenement stocké dans la base de données est affiché (exemple.png pour un exemple de mise en page)

A faire dans l'ordre : 
- Créer la base de données sur votre serveur mysql (vous trouverez les consignes dans le fichier bdd.sql dans le dossier asset)

- Créer le formulaire de demande de nom dans le fichier homeView.php

- dans le model.php complétez la fonction qui récupère l'ensemble du tableau events

- dans le controller list.php stocker le nom d'utilisateur récupéré via formulaire dans une variable, forcer le retour au formulaire s'il n'y a pas de nom et stocker les données du tableau events dans une variable.

- Faire la vue principaledan listView.php (voir consigne dans le fichier)