<?php
/**
 * @file   location.php
 * @brief  description
 * @author Created by Jonathan.PENARANDA-G
 * @version 15.03.2023
 */
function displayDetail($detail){
    if(isset($detail['Id']) && isset($detail['Habitation']) && isset($detail['Localisation'])){

        $id = $detail['Id'];
        $habitation = $detail['Habitation'];
        $localisation = $detail['Localisation'];

        require_once "model/dataDetail.php";
        $detail = getDetail($id);
        $adSimilar = getAdSimilar($habitation, $localisation);

        $adSimilar = extractAd($detail, $adSimilar);
    }
    require "view/adDetail.php";
}