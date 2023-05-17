<?php
/**
 * @file   adModify.php
 * @brief  description
 * @author Created by Jonathan.PENARANDA-G
 * @version 15.05.2023
 */

require_once "model/dataDetail.php";
function adModify($id, $titre, $image, $habitation, $localisation, $adresse, $description, $pieces){
    $colocations = addFullLocation();

    if ($image != null){
        foreach ($colocations as $colocation){
            if ($colocation['Id'] == $id){
                $colocation['Titre'] = $titre;
                $colocation['Image'] = $image;
                $colocation['Habitation'] = $habitation;
                $colocation['Localisation'] = $localisation;
                $colocation['Adresse'] = $adresse;
                $colocation['Description'] = $description;
                $colocation['Pièces'] = $pieces;

                break;
            }
        }
    }else{
        foreach ($colocations as $colocation){
            if ($colocation['Id'] == $id){
                $colocation['Titre'] = $titre;
                $colocation['Habitation'] = $habitation;
                $colocation['Localisation'] = $localisation;
                $colocation['Adresse'] = $adresse;
                $colocation['Description'] = $description;
                $colocation['Pièces'] = $pieces;

                break;
            }
        }
    }
    file_put_contents('data/location.json', json_encode($colocations), JSON_PRETTY_PRINT);
    return true;
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