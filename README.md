symfony bundles
================

A Symfony project created on July 21, 2015, 9:16 am.


## Mise en place de la VM
Installer Vagrant [Télécharger Vagrant](https://www.vagrantup.com/downloads.html)

Une fois installer entrez les commandes pour installer les plugins berkshelf et omnibus:
    
    vagrant plugin install vagrant-berkshelf
    vagrant plugin install omnibus
        
Télécharger et installer Chef-DK pour pouvoir utiliser chef et Berkshelf [Télécharger Vagrant](https://downloads.chef.io/chef-dk/)

Vérifier que le repertoire d'installation de chef-dk est bien positionner dans le PATH de l'environnement

Créer un dossier src si il n'existe pas.

=======

Lancer vagrant:
    
    vagrant up
