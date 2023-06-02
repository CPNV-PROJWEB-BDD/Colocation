<?php
/**
 * @file   goodsManager.php
 * @brief  description
 * @author Created by Jonathan.PENARANDA-G
 * @version 23.02.2023
 */

require "dbConnector.php";
function filter($filter){
    if (isset($filter['habitation']) && isset($filter['localisation']))
    $habitation = $filter['habitation'];
    $localisation = $filter['localisation'];

    return array($habitation, $localisation);
}

function goodsFilter($kindOfGood, $town){
    if ($kindOfGood == "" && $town == "") {
        $query = "SELECT title, picture, kindOfGood, town, numberOfPieces from goods";
        return executeQuerySelect($query);
    }else if ($kindOfGood == ""){
        $query = "SELECT title, picture, kindOfGood, town, numberOfPieces from goods";
        $queryComplete = $query . " WHERE town ='".$town."';";
        return executeQuerySelect($queryComplete);
    }else if ($town == ""){
        $query = "SELECT title, picture, kindOfGood, town, numberOfPieces from goods";
        $queryComplete = $query . " WHERE kindOfGood ='".$kindOfGood."';";
        return executeQuerySelect($queryComplete);
    }else {
        $query = "SELECT title, picture, kindOfGood, town, numberOfPieces from goods";
        $queryComplete = $query . " WHERE kindOfGood ='".$kindOfGood."' AND town ='".$town."';";
        return executeQuerySelect($queryComplete);
    }
}