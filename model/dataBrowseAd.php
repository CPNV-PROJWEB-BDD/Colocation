<?php
/**
 * @file   dataBrowseAd.php
 * @brief  description
 * @author Created by Jonathan.PENARANDA-G
 * @version 23.02.2023
 */

//Cette fonction permettra de d'extraire les choix de la barre de la recherche et de les ajoutés dans un tableau
function extractFilter($filter){
    $habitation = $filter['habitation'];
    $localisation = $filter['localisation'];

    $resultFilter = [];

    array_push($resultFilter, $habitation, $localisation);

    return $resultFilter;
}
function filter($filter){
    //Cherche les données
    $path = 'data/location.json';
    $json = file_get_contents($path);
    $colocation = json_decode($json, true);

    //Définir les détails
    $detailFilter = extractFilter($filter);

    //Vérifie si il y a un filtre pré-déterminé
    if ($detailFilter[0] == ""){
        $midDetail = $colocation;
    }else{
        $habitation = "Habitation";
        $midDetail = filterArrayByKeyValueHabitation($colocation, $habitation, $detailFilter[0]);
    }
    if ($detailFilter[1] == ""){
        $fullDetail = $midDetail;
    }else{
        $localisation = "Localisation";
        $fullDetail = filterArrayByKeyValueLocalisation($midDetail, $localisation, $detailFilter[1]);
    }
    return $fullDetail;
}

function addFullLocation(){
    $path = 'data/location.json';
    $json = file_get_contents($path);
    $colocation = json_decode($json, true);

    return $colocation;
}

function filterArrayByKeyValueHabitation($colocation, $index, $detailFilter){
    $colocationFilter = [];
    if(is_array($colocation)){
        foreach (array_keys($colocation) as $key){
            $temp[$key] = $colocation[$key][$index];
            if ($temp[$key] == $detailFilter){
                $colocationFilter[$key] = $colocation[$key];
            }
        }
    }
    return $colocationFilter;
}
function filterArrayByKeyValueLocalisation($colocation, $index, $detailFilter){

    $colocationFilter = [];
    if(is_array($colocation)){
        foreach (array_keys($colocation) as $key){
            $temp[$key] = $colocation[$key][$index];
            if ($temp[$key] == $detailFilter){
                $colocationFilter[$key] = $colocation[$key];
            }
        }
    }
    return $colocationFilter;
}