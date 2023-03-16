<?php
/**
 * @file   dataDetail.php
 * @brief  description
 * @author Created by Jonathan.PENARANDA-G
 * @version 16.03.2023
 */

function getDetail($id){
    //Cherche les données
    $path = 'data/location.json';
    $json = file_get_contents($path);
    $colocation = json_decode($json, true);

    foreach (array_keys($colocation) as $key){
        $temp[$key] = $colocation[$key]['Id'];
        if ($temp[$key] == $id){
            $colocationFilter[$key] = $colocation[$key];
        }
    }
    return $colocationFilter;
}