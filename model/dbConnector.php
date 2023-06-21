<?php
/**
 * @file   dbConnector.php
 * @brief  File description
 * @author Created by Ahmed.MUJANOVIC
 * @file  15.05.2023
 */

const PATH_TO_CONFIG_FILE = "data/userDBInfra.json";

function readJsonUsers(){
    $path = PATH_TO_CONFIG_FILE;
    $json = file_get_contents($path);
    return json_decode($json, true);//TODO add json ext to composer
}

function openDBConnection()
{
    $information = readJsonUsers();

        $sqlDriver = $information['sqlDriver'];
        $hostname = $information['hostname'];
        $port = $information['port'];
        $charset = $information['charset'];
        $dbName = $information['dbName'];
        $userName = $information['userName'];
        $userPwd = $information['userPwd'];

        $dsn = $sqlDriver . ':host=' . $hostname . ';dbname=' . $dbName . ';port=' . $port . ';charset=' . $charset;

        try {
            $tempDBConnexion = new PDO($dsn, $userName, $userPwd);
        } catch (PDOException $exception) {
            echo 'Connection failed' . $exception->getMessage();
        }

    return $tempDBConnexion;
}

function executeQuerySelect($query)
{
    $queryResult = null;

    $dbConnection = openDBConnection();  // Ouvre la connexion à la base de donnée
    if ($dbConnection != null) {
        $statement = $dbConnection->prepare($query);    //préparation
        $statement->execute();                          //Exécution de la requête
        $queryResult = $statement->fetchAll();          //Prépare les résultats
    }
    $dbConnection = null; //fermeture de la connexion
    return $queryResult;
}

function executeQueryInsertUpdate($query)
{
    $queryResult = null;

    $dbConnection = openDBConnection();  // Ouvre la connexion à la base de donnée
    if ($dbConnection != null) {
        $statement = $dbConnection->prepare($query);    //préparation
        $queryResult = $statement->execute();                          //Exécution de la requête
    }
    $dbConnection = null; //fermeture de la connexion
    return $queryResult;
}

function executeQueryAddItem($query){
    $queryResult = null;

    $dbConnection = openDBConnection();
    if($dbConnection!= null){
        $statement = $dbConnection->prepare($query);   //préparations de la requete
        $queryResult = $statement->execute();                       // exécute la requete
    }
    $dbConnection = null;
    return $queryResult;
}
