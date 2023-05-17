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