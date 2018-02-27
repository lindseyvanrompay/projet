# BDD PROBLEM

````
  - erase dateNaissance from Utilisateur
  - All id must be auto increment
  - Table Aliments => Aliment
  - Add temps_preparation and temps_cuisson somewhere ?
  - Some _ might be nice
````



symfony
=======

A Symfony project created on February 21, 2018, 11:27 am.

# LINUX

## Start/Stop server
````
  - php bin/console server:start
  - php bin.console server:stop

type 127.0.0.1:8000 in navigator to see the page

````

## Importants directories
````
  - src/ProjetBundle/Controller (All controllers)
  - src/ProjetBundle/Entity (All entities created from database)
  - src/ProjetBundle/Ressources/config/routing.yml (url path)
  - src/ProjetBundle/Ressources/views (views)

Warning ! images needs to be in the web directory and called with src="{ asset('img/monImage.png') }}" (or something like that)

````

## Clear cache
````
  - php bin/console cache:clear
````


# Installation

## Install php

````
  - apt-get install php5-common libapache2-mod-php5 php5-cli
````


## Install composer

````
  - apt-get install composer
````

## Create a new Symfony project

````
  - Download symphony.phar then type the following command :
    - php symfony
    - symfony new project_name 3.2.2 (here)
````

# Symfony, Twig and Database config
````
  - file : app/config/config.yml

````



#Mapping entity from database (see config)
````
Take care to not have 2 configs file !!! (@annotation + config/doctrine/Entity.orm.yml)

sudo php bin/console doctrine:mapping:import ProjetBundle annotation

sudo php bin/console doctrine:generate:entities ProjetBundle

````

#TODO
````
  - Install phpmyadmin and php
  - .html -> .html.twig (+ Change html tag <head><body> to {% block head %}
  - Connexion (work in progress - Lin)
````
