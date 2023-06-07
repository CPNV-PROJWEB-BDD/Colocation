<?php
/**
 * @file   goodsManager.php
 * @brief  description
 * @author Created by Jonathan.PENARANDA-G
 * @version 23.02.2023
 */

require_once "dbConnector.php";

function goodsFilter($kindOfGood, $town){
    if ($kindOfGood == "" && $town == "") {
        $query = "SELECT id, title, picture, kindOfGood, town, numberOfPieces from goods";
        return executeQuerySelect($query);
    }else if ($kindOfGood == ""){
        $query = "SELECT id, title, picture, kindOfGood, town, numberOfPieces from goods";
        $queryComplete = $query . " WHERE town ='".$town."';";
        return executeQuerySelect($queryComplete);
    }else if ($town == ""){
        $query = "SELECT id, title, picture, kindOfGood, town, numberOfPieces from goods";
        $queryComplete = $query . " WHERE kindOfGood ='".$kindOfGood."';";
        return executeQuerySelect($queryComplete);
    }else {
        $query = "SELECT id, title, picture, kindOfGood, town, numberOfPieces from goods";
        $queryComplete = $query . " WHERE kindOfGood ='".$kindOfGood."' AND town ='".$town."';";
        return executeQuerySelect($queryComplete);
    }
}
function getGoods(){
    $query = 'Select id, title, picture, kindOfGood, town, address, description, numberOfPieces, active';
    $queryComplete = $query." from goods";
    return executeQuerySelect($queryComplete);
}
function getGood($id){
    $query = 'Select id, title, picture, kindOfGood, town, address, description, numberOfPieces, active';
    $query = $query." from goods";
    $queryComplete = $query. " WHERE id ='".$id."';";
    return executeQuerySelect($queryComplete);
}
function getGoodSimilar($id, $kindOfGood, $town){
    $query = "SELECT id, title, picture, kindOfGood, town, numberOfPieces from goods";
    $queryComplete = $query . " WHERE (kindOfGood ='".$kindOfGood."' OR town ='".$town."') AND id NOT IN(".$id.");";
    return executeQuerySelect($queryComplete);
}

function addFullDevelop(){
    $path = 'data/developpeurs.json';
    $json = file_get_contents($path);
    return json_decode($json, true);
}