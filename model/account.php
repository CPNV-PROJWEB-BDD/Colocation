<?php
/**
 * @file   account.php
 * @brief  description
 * @author Created by Jonathan.PENARANDA-G
 * @version 03.05.2023
 */

require_once "dbConnector.php";
function getColocations(){
    $query = 'Select id, title, picture, kindOfGood, town, address, description, numberOfPieces, active';
    $queryComplete = $query." from goods";
    $result = executeQuerySelect($queryComplete);
    return $result;
}
function getColocationsId($id){
    $query = 'Select id, title, picture, kindOfGood, town, address, description, numberOfPieces, active';
    $query = $query." from goods";
    $queryComplete = $query. " WHERE id ='".$id."';";
    $result = executeQuerySelect($queryComplete);
    return $result;
}

function addItem($titre, $picture,  $habitation, $localisation, $addresse, $description, $pieces){
    $active=1;
    // Query to get the selected snow. Active must setted to avoid that user can view an non active snow by entering the code in the URL
    $queryAddArticle = "insert into goods (title, picture , kindOfGood, town, address, description, numberOfPieces, active)";
    $queryAddArticle = $queryAddArticle." Values ('".$titre."','".$picture."','".$habitation."','".$localisation."','".$addresse."','".$description."','".$pieces."','".$active."')";
    $articleAddItem = executeQueryAddItem($queryAddArticle);

    return $articleAddItem;
}

