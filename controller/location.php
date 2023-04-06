<?php
/**
 * @file   location.php
 * @brief  description
 * @author Created by Jonathan.PENARANDA-G
 * @version 15.03.2023
 */
function displayDetail($id, $habitation, $localisation){
    if(isset($id)){
        require_once "model/dataDetail.php";
        $detail = getDetail($id);
        $adSimilar = getAdSimilar($habitation, $localisation);

        $adSimilar = extractAd($detail, $adSimilar);

    }
    require "view/adDetail.php";
}