# Snows

Snows est un dépôt éducatif de gestion de location de snowboards.

## Installation

```
composer install
```

## Utilisation (Php Storm)

* [Créer un "web built-in server"](https://www.jetbrains.com/help/phpstorm/php-built-in-web-server.html)

![image](https://user-images.githubusercontent.com/5616312/215544145-3b40dfeb-678a-4d7d-b673-5363bf15fd36.png)

* Aligner la configuration d'exécution (run configuration) sur le même port d'écoute que le "build-in server"

![image](https://user-images.githubusercontent.com/5616312/215544594-3512a981-37c6-44f2-93a6-47f9b741db21.png)

* Lancer le serveur et ouvrer index.php dans votre navigateur

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

* Résultat à obtenir

![image](https://user-images.githubusercontent.com/5616312/215457793-5f2c5bec-8e2e-4407-8d04-82b9da793d7d.png)

## Contribution

Les pull requests sont les bienvenues. Pour des changements plus conséquents, ouvrez d'abord une issue afin que nous échangions à ce sujet.

## License

[Licence](LICENCE.txt)
