<?php

/**
 * @file   dbConnector.php
 * @brief  File description
 * @author Created by Ahmed.MUJANOVIC
 * @file  15.05.2023
 */

function addFullLocation(){
    $path = 'data/usersDB.json';
    $json = file_get_contents($path);
    $colocation = json_decode($json, true);

    return $colocation;
}

function openDBConnection()
{
    $Informations = addFullLocation();

    foreach ($Informations as $key){
        $sqlDriver = $key['sqldriver'];
        $hostname = $key['hostname'];
        $port = $key['port'];
        $charset = $key['charset'];
        $dbName = $key['dbName'];
        $userName = $key['userName'];
        $userPwd = $key['userPwd'];

        $dsn = $sqlDriver . ':host=' . $hostname . ';dbname=' . $dbName . ';port=' . $port . ';charset=' . $charset;

        try {
            $tempDBConnexion = new PDO($dsn, $userName, $userPwd);
        } catch (PDOException $exception) {
            echo 'Connection failed' . $exception->getMessage();
        }
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