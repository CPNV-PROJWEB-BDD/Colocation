<?php
/**
 * @file   dataDetail.php
 * @brief  description
 * @author Created by Jonathan.PENARANDA-G
 * @version 16.03.2023
 */

function getDetail($id)
{
    //Cherche les données
    $path = 'data/location.json';
    $json = file_get_contents($path);
    $colocation = json_decode($json, true);

    foreach (array_keys($colocation) as $key) {
        $temp[$key] = $colocation[$key]['Id'];
        if ($temp[$key] == $id) {
            $colocationFilter[$key] = $colocation[$key];
        }
    }
    return $colocationFilter;
}

function getAdSimilar($habitation, $localisation)
{
    //Cherche les données
    $path = 'data/location.json';
    $json = file_get_contents($path);
    $colocation = json_decode($json, true);

    $detaiAd = [];

    array_push($detaiAd, $localisation, $habitation);

    $adSimilar = filterArrayByKeyValue($colocation, $detaiAd);

    return $adSimilar;
}

function filterArrayByKeyValue($colocation, $detailFilter)
{
    $colocationFilter = [];
    if (is_array($colocation)) {
        foreach (array_keys($colocation) as $key) {
            $temp[$key] = $colocation[$key]['Localisation'];
            if ($temp[$key] == $detailFilter[0]) {
                $colocationFilter[$key] = $colocation[$key];
            } else {
                $temp[$key] = $colocation[$key]['Habitation'];
                if ($temp[$key] == $detailFilter[1]) {
                    $colocationFilter[$key] = $colocation[$key];
                }
            }
        }
        return $colocationFilter;
    }
}

function extractAd($detail, $adSimilar){
    $adperfect = [];
    foreach (array_keys($detail) as $key){
        foreach (array_keys($adSimilar) as $item){
            $temp[$key] = $adSimilar[$item];
            if ($temp[$key] != $detail[$key]){
                $adperfect[$item] = $adSimilar[$item];
            }
        }

    }
    return $adperfect;
}