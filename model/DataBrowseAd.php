<?php
/**
 * @file   dataBrowseAd.php
 * @brief  description
 * @author Created by Jonathan.PENARANDA-G
 * @version 23.02.2023
 */


function extractFilter($filter){
    $habitation = $filter['habitation'];
    $localisation = $filter['localisation'];

    $resultFilter = [];

    array_push($resultFilter, $habitation, $localisation);

    return $resultFilter;
}
function filter($filter){

    $colocation = array(
        array(
            'Habitation' => 'appartement',
            'Localisation' => 'Yverdon',
            'Pièces' => 3.5
        ),
        array(
            'Habitation' => 'appartement',
            'Localisation' => 'Ste-Croix',
            'Pièces' => 4
        ),
        array(
            'Habitation' => 'maison',
            'Localisation' => 'Yverdon',
            'Pièces' => 3.5
        ),
        array(
            'Habitation' => 'appartement',
            'Localisation' => 'Grandson',
            'Pièces' => 2
        ),
        array(
            'Habitation' => 'maison',
            'Localisation' => 'Fribourg',
            'Pièces' => 3.5
        ),
        array(
            'Habitation' => 'appartement',
            'Localisation' => 'Yverdon',
            'Pièces' => 2.5
        )
    );

    $detailFilter = extractFilter($filter);
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

function filterArrayByKeyValueHabitation($colocation, $index, $detailFilter){
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




