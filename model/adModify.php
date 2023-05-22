<?php
/**
 * @file   adModify.php
 * @brief  description
 * @author Created by Jonathan.PENARANDA-G
 * @version 15.05.2023
 */

require_once "model/dataDetail.php";
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