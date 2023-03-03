<?php
/**
 * @file   dataBrowseAd.php
 * @brief  description
 * @author Created by Jonathan.PENARANDA-G
 * @version 23.02.2023
 */

$Colocation = array(
    array(
        'Habitation' => 'Appartement',
        'Localisation' => 'Yverdon'
    ),
    array(
        'Habitation' => 'Appartement',
        'Localisation' => 'Ste-Croix'
    ),
    array(
        'Habitation' => 'Maison',
        'Localisation' => 'Yverdon'
    ),
    array(
        'Habitation' => 'Appartement',
        'Localisation' => 'Grandson'
    ),
    array(
        'Habitation' => 'Maison',
        'Localisation' => 'Fribourg'
    ),
    array(
        'Habitation' => 'Appartement',
        'Localisation' => 'Renens'
    )
);

function extractFilter($filter){
    $habitation = $filter['habitation-select'];
    $localisation = $filter['localisation-select'];

    $infoFilter = array($habitation, $localisation);
    return $infoFilter;
}

function search($habitation, $Colocation){
    return (array_search($habitation, $Colocation));
}



