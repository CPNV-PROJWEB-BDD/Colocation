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
    $result = executeQuerySelect($queryComplete);//TODO remove inline variable
    return $result;
}

//TODO Review function's name
function getColocationsId($id){
    $query = 'Select id, title, picture, kindOfGood, town, address, description, numberOfPieces, active';
    $query = $query." from goods";
    $queryComplete = $query. " WHERE id ='".$id."';";
    return executeQuerySelect($queryComplete);
}

function addColocation($titre, $picture,  $habitation, $localisation, $addresse, $description, $pieces){
    $active=1;
    // Query to get the selected snow. Active must setted to avoid that user can view an non active snow by entering the code in the URL
    $query = "insert into goods (title, picture , kindOfGood, town, address, description, numberOfPieces, active)";
    $queryComplete = $query." Values ('".$titre."','".$picture."','".$habitation."','".$localisation."','".$addresse."','".$description."','".$pieces."','".$active."')";
    $result = executeQueryAddItem($queryComplete);//TODO remove inline variable

    return $result;
}



function adModify($id, $title, $picture, $kindOfGood, $address, $town, $description, $numberOfPieces){
    if($picture == null){
        $query = 'Update goods';
        $query = $query.' SET title="'.$title.'", kindOfGood="'.$kindOfGood.'", town="'.$town.'", address="'.$address.'", description="'.$description.'", numberOfPieces="'.$numberOfPieces.'"';
        $queryComplete = $query.' WHERE id ="'.$id.'";';
        $result = executeQueryInsertUpdate($queryComplete);

        return $result;
    }else{
        $query = 'Update goods';
        $query = $query.' SET title="'.$title.'", picture="'.$picture.'", kindOfGood="'.$kindOfGood.'", town="'.$town.'", address="'.$address.'", description="'.$description.'", numberOfPieces="'.$numberOfPieces.'"';
        $queryComplete = $query.' WHERE id ="'.$id.'";';
        $result = executeQueryInsertUpdate($queryComplete);

        return $result;
    }

}

//TODO only one function to activate and deactivate
function adModifyActiveOff($id){
    $query = 'Update goods';
    $query = $query. " SET active = 0";
    $queryComplete = $query. " WHERE id =".$id.";";
    $result = executeQueryInsertUpdate($queryComplete);
    return $result;
}
function adModifyActiveOn($id){
    $query = 'Update goods';
    $queryComplete = $query. " SET active = 1 WHERE id =".$id."  ;";
    $result = executeQueryInsertUpdate($queryComplete);
    return $result;
}

