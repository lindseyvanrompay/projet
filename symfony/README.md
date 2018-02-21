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

Warning ! images needs to be in the web directory

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
    - symfony new project_name 3.4
````

# Symfony, Twig and Database config
````
  - file : app/config/config.yml

````



#Mapping entity from database (see config)
````
$sudo php bin/console doctrine:mapping:import ProjetBundle
$sudo php bin/console doctrine:mapping:convert annotation ./src
$sudo php bin/console doctrine:generate:entities ProjetBundle

````

#TODO
````
  - Install phpmyadmin and php
  - .html -> .html.twig (+ Change html tag <head><body> to {% block head %}
  - Connexion (work in progress - Lin)
````
