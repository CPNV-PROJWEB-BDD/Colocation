<?php
/**
 * @file   dataBrowseAd.php
 * @brief  description
 * @author Created by Jonathan.PENARANDA-G
 * @version 23.02.2023
 */

$colocation = array(
    array(
        'Habitation' => 'Appartement',
        'Localisation' => 'Yverdon',
        'Pièces' => 3.5
    ),
    array(
        'Habitation' => 'Appartement',
        'Localisation' => 'Ste-Croix',
        'Pièces' => 3.5
    ),
    array(
        'Habitation' => 'Maison',
        'Localisation' => 'Yverdon',
        'Pièces' => 3.5
    ),
    array(
        'Habitation' => 'Appartement',
        'Localisation' => 'Grandson',
        'Pièces' => 3.5
    ),
    array(
        'Habitation' => 'Maison',
        'Localisation' => 'Fribourg',
        'Pièces' => 3.5
    ),
    array(
        'Habitation' => 'Appartement',
        'Localisation' => 'Renens',
        'Pièces' => 3.5
    )
);



function extractFilter($filter){
    $habitation = $filter['habitation'];
    $localisation = $filter['localisation'];

    $resultFilter = [];

    array_push($resultFilter, $localisation, $habitation);

    return $resultFilter;
}
function filter($filter){
    $detailFilter = extractFilter($filter);

    return $detailFilter;
}





