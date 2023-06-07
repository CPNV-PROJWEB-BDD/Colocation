# *Initialisation Infra*
Ce document est pour la configuration initial, les commandes et configuration de la VM. Dans l’annexe vous trouverez les liens utiles pour cet VM.

Lien pour télécharger la [VM](https://www.swisstransfer.com/d/d19a3aa5-0a4f-48df-a644-38c02535a2c1) valable 30 jours (25.05.23) 


## Configuration d’installation
- Img iso = debian-11.7.0-arm64-netinst.iso
- Nom machine = ProjWebBDD-JAL
- Domain = vide
- Utiliser le disc entier
- Partition des disques = tout en une seule partition
- Debian miror = deb.debian.org
- Mandataire http = vide
## Fichier config 
- `nano /etc/hosts` => 127.0.1.1 colocation

![FQDN](Screenshot%20result%20infra/FQDN.png)
- `nano /etc/apt/sources.list` => deb http://ftp.ch.debian.org/debian sid main 
![SID](Screenshot%20result%20infra/SID.png)
## Initialisation serveur
- `sudo apt install ufw`
- `sudo ufw allow openssh`
- `sudo ufw enable`
## Droit admin utilisateur
- `Apt install sudo (en root)`
- `Usermod -aG sudo logan`
## Installation apache2
- `sudo apt update`
- `sudo apt install apache2`
- `sudo ufw allow in "WWW Full"`
## installation et setup mariadb
- `sudo apt install mariadb-server`
- `sudo mysql_secure_installation installation php`
- `sudo apt install php libapache2-mod-php php-mysql`
## Mise en place du virtual host
- `sudo mkdir /var/www/colocation`
- `sudo chown -R $USER:$USER /var/www/colocation`
- `sudo nano /etc/apache2/sites-available/colocation.conf`
  
![VH conf](Screenshot%20result%20infra/VH%20conf.png)

- `sudo a2ensite colocation`
- `sudo a2dissite 000-default`
- `sudo apache2ctl configtest`
- `sudo systemctl reload apache2`

## Connexion au serveur
*Machine personnel = Mac air m2*
- Dans le terminal `sudo nano /etc/hosts => 172.16.31.135 	colocation`
## Test process php
- `nano /var/www/colocation/info.php`
## Test BDD 
- `sudo mariadb`
- `CREATE DATABASE example_database;`
- `CREATE USER 'logan'@'%' IDENTIFIED BY 'logan123';`
- `GRANT ALL ON example_database.* TO 'logan'@'%';`
- `FLUSH PRIVILEGES;`
- ```
	CREATE TABLE example_database.todo_list (
	item_id INT AUTO_INCREMENT,
	content VARCHAR(255),
	PRIMARY KEY(item_id)
	);```
- `INSERT INTO example_database.todo_list (content) VALUES ("My first important item");`
- `SELECT * FROM example_database.todo_list;`
- `nano /var/www/colocation/todo_list.php`

![resultat ex bdd](Screenshot%20result%20infra/example%20bdd.png)
## Installation de git et clonage du dépôt colocation
- `sudo apt install git`
- `sudo mkdir /var/www/colocation/projTest` (Snows)
- `cd /var/www/colocation/projTest`
- `Git init`
- `Sudo git clone https://github.com/CPNV-PROJWEB-BDD/Colocation.git`
  
![clone repo snow](Screenshot%20result%20infra/clone%20test.png)
- `sudo mkdir /var/www/colocation/projWebBDD`
- `cd /var/www/colocation/projWebBDD`
- `Git init`
- `Sudo git clone -b develop https://github.com/CPNV-PROJWEB-BDD/Colocation.git`
  
![clone repo](Screenshot%20result%20infra/clone%20repo.png)
## Injection base de donnée
- `Sudo mariadb`
- `Source /var/www/colocation/projWebBDD/Colocation/scriptbdd/scriptProjetWebBDD.sql`
- `Source /var/www/colocation/projWebBDD/Colocation/scriptbdd/insertionDonne.sql`
- `GRANT ALL ON colocations* TO 'logan'@'%';`
- `FLUSH PRIVILEGES;`
## Test BDD colocation
- `sudo mariadb`
- `use colocations;`
- `select * from members;`
- `select * from users;`
- `select * from members_has_goods`
  
![Resultat BDD](Screenshot%20result%20infra/Resultat%20BDD.png)
## annexes
[Tuto LAMP Linux](https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mariadb-php-lamp-stack-on-debian-11)
[apache 2](https://packages.debian.org/sid/arm64/apache2/download)
[ISO Debian 11](https://www.debian.org/distrib/netinst)