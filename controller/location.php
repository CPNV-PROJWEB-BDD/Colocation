<?php
/**
 * @file   location.php
 * @brief  description
 * @author Created by Jonathan.PENARANDA-G
 * @version 15.03.2023
 */


function displayDetail($filter){
    if(isset($filter['id']) && isset($filter['Habitation']) && isset($filter['Localisation'])){

        $id = $filter['Id'];
        $habitation = $filter['Habitation'];
        $localisation = $filter['Localisation'];

        require_once "model/dataDetail.php";
        $detail = getDetail($id);
        $adSimilar = getAdSimilar($habitation, $localisation);

        $adSimilar = extractAd($detail, $adSimilar);
    }
    require "view/adDetail.php";
}

function sendAFormRequest(){

}