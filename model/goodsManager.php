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
        $query = "SELECT id, title, picture, kindOfGood, town, numberOfPieces, active from goods";
        $queryComplete = $query . " WHERE active='1'";
        return executeQuerySelect($queryComplete);
    }else if ($kindOfGood == ""){
        $query = "SELECT id, title, picture, kindOfGood, town, numberOfPieces, active from goods";
        $queryComplete = $query . " WHERE town ='".$town."' AND active='1';";
        return executeQuerySelect($queryComplete);
    }else if ($town == ""){
        $query = "SELECT id, title, picture, kindOfGood, town, numberOfPieces, active from goods";
        $queryComplete = $query . " WHERE kindOfGood ='".$kindOfGood."' AND active='1';";
        return executeQuerySelect($queryComplete);
    }else {
        $query = "SELECT id, title, picture, kindOfGood, town, numberOfPieces, active from goods";
        $queryComplete = $query . " WHERE kindOfGood ='".$kindOfGood."' AND town ='".$town."' AND active='1';";
        return executeQuerySelect($queryComplete);
    }
}

function goodsTown(){
    $query = "SELECT town, COUNT(*) AS number_goods FROM goods WHERE active = 1";
    $queryComplete = $query . " GROUP BY town";
    return executeQuerySelect($queryComplete);
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
    $query = "SELECT id, title, picture, kindOfGood, town, numberOfPieces, active from goods";
    $queryComplete = $query . " WHERE (kindOfGood ='".$kindOfGood."' OR town ='".$town."') AND active='1' AND id NOT IN(".$id.");";
    return executeQuerySelect($queryComplete);
}

function addFullDevelop(){
    $path = 'data/developpeurs.json';
    $json = file_get_contents($path);
    return json_decode($json, true);
}