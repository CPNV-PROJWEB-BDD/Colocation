<?php

/**
 * @file   dbConnector.php
 * @brief  File description
 * @author Created by Ahmed.MUJANOVIC
 * @file  15.05.2023
 */
function openDBConnection()
{
    $sqlDriver = 'mysql';
    $hostname = '127.0.0.1';
    $port = 3306;
    $charset = 'utf8';
    $dbName = 'colocations';
    $userName = 'Ahmed';
    $userPwd = 'Ahmedleboss12345';
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