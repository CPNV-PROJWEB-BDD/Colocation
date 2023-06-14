## Colocations

Colocations est un dépot de gestion de colocations

## Description

Ce projet est un site pour trouver des colocations.

[Use Case](https://github.com/CPNV-PROJWEB-BDD/Colocation/blob/develop/docs/cas%20d'utilisation.pdf)

## Prerequistes

Avoir PHP Storm installer

Avoir debugger installer et xdebug configurer (version 8.2)

Avoir le Built-in web server configurer

Installer MYSQL

Installer la VM ProjWebBDD-JAL

## Installation
[PHP Storm](https://www.jetbrains.com/phpstorm/download/#section=windows)

[PHP 8.2](https://www.php.net/downloads)

[Xdebug](https://xdebug.org/docs/install)

[Mysql](https://www.mysql.com/downloads/)

[VMware workstation](https://www.vmware.com/fr/products/workstation-pro/workstation-pro-evaluation.html)

[VM](https://www.swisstransfer.com/d/d19a3aa5-0a4f-48df-a644-38c02535a2c1) (lien disponible que pendant 30 jour à partir du 25.05.23)

## Configurations
[php](https://www.php.net/manual/fr/install.php)

[Xdebug configuration](https://www.jetbrains.com/help/phpstorm/configuring-xdebug.html)

[Mysql configuration](https://dev.mysql.com/doc/mysql-getting-started/en/)

## Configuration php storm

* [Créer un "web built-in server"](https://www.jetbrains.com/help/phpstorm/php-built-in-web-server.html)

![image](https://user-images.githubusercontent.com/5616312/215544145-3b40dfeb-678a-4d7d-b673-5363bf15fd36.png)

* Aligner la configuration d'exécution (run configuration) sur le même port d'écoute que le "build-in server"

![image](https://user-images.githubusercontent.com/5616312/215544594-3512a981-37c6-44f2-93a6-47f9b741db21.png)

```
C:\php\php.exe -S localhost:8081 -t C:\Users\nicolas.glassey\MyDevs\CPNV\CFC\151\Snows\151_Trainee
[Mon Jan 30 18:06:46 2023] PHP 8.2.1 Development Server (http://localhost:8081) started
```

* Configuration des accès à la db

En reprenant le modèle data/userDB.json.temp, il faut mettre à jour userName et userPwd (plus les paramètres spécifiques à votre installation de MySql).

```
{
  "sqlDriver": "mysql",
  "hostname": "127.0.0.1",
  "port": 3306,
  "charset": "utf8",
  "dbName": "colocations",
  "userName": "",
  "userPwd": ""
}
```


## Deployement

# On dev environnement

* [Lancer colocation depuis l'index](https://www.jetbrains.com/help/phpstorm/running-applications.html#customizable-way)

# On intergration environnement

* Démarrer la VM ProjWebBDD-JAL
* Sur votre navigateur aller sur http://colocation
* Aller dans le dossier projWebBDD ==> colocations 

## Collaborate

[Ahmed Mujanovic](Ahmed.mujanovic@cpnv.ch)

[Jonathan Penaranda-Gonzalez](Jonathan.peneranda-gonzalez@cpnv.ch)

[Logan Nguyen](Logan.nguyen@cpnv.ch)

## License

[Licence](LICENCE.txt)
