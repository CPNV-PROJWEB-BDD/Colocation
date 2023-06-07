<?php
/**
 * @file   accountManager.php
 * @brief  description
 * @author Created by Jonathan.PENARANDA-G
 * @version 03.05.2023
 */

require_once "dbConnector.php";

function addAd($titre, $picture, $habitation, $localisation, $addresse, $description, $pieces){
    $active=1;
    // Query to get the selected snow. Active must setted to avoid that user can view an non active snow by entering the code in the URL
    $query = "insert into goods (title, picture , kindOfGood, town, address, description, numberOfPieces, active)";
    $queryComplete = $query." Values ('".$titre."','".$picture."','".$habitation."','".$localisation."','".$addresse."','".$description."','".$pieces."','".$active."')";
    return executeQueryAddItem($queryComplete);


}
function adModify($id, $title, $picture, $kindOfGood, $town, $address, $description, $numberOfPieces){
    if($picture == null){
        $query = 'Update goods';
        $query = $query.' SET title="'.$title.'", kindOfGood="'.$kindOfGood.'", town="'.$town.'", address="'.$address.'", description="'.$description.'", numberOfPieces="'.$numberOfPieces.'"';
        $queryComplete = $query.' WHERE id ="'.$id.'";';
        return executeQueryInsertUpdate($queryComplete);
    }else{
        $query = 'Update goods';
        $query = $query.' SET title="'.$title.'", picture="'.$picture.'", kindOfGood="'.$kindOfGood.'", town="'.$town.'", address="'.$address.'", description="'.$description.'", numberOfPieces="'.$numberOfPieces.'"';
        $queryComplete = $query.' WHERE id ="'.$id.'";';
        return executeQueryInsertUpdate($queryComplete);
    }

}

function adChangeActive($id){
    $query = 'SELECT active from goods';
    $queryComplete = $query.' WHERE id ="'.$id.'";';
    $result = executeQuerySelect($queryComplete);
    if ($result[0]['active'] == 1){
        $query = 'Update goods';
        $query = $query. " SET active = 0";
        $queryComplete = $query. " WHERE id =".$id.";";
        return executeQueryInsertUpdate($queryComplete);
    } else{
        $query = 'Update goods';
        $queryComplete = $query. " SET active = 1 WHERE id =".$id."  ;";
        return executeQueryInsertUpdate($queryComplete);
    }
}