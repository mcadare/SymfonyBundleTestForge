symfony bundles
================

A Symfony project created on July 21, 2015, 9:16 am.


## Mise en place de la VM
Installer Vagrant [T�l�charger Vagrant](https://www.vagrantup.com/downloads.html)

Une fois installer entrez les commandes pour installer les plugins berkshelf et omnibus:
    
    vagrant plugin install vagrant-berkshelf
    vagrant plugin install omnibus
        
T�l�charger et installer Chef-DK pour pouvoir utiliser chef et Berkshelf [T�l�charger Vagrant](https://downloads.chef.io/chef-dk/)

V�rifier que le repertoire d'installation de chef-dk est bien positionner dans le PATH de l'environnement

Cr�er un dossier src si il n'existe pas.

=======

Lancer vagrant:
    
    vagrant up
