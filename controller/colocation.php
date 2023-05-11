<?php
/**
 * @file   colocation.php
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

function displayModifyForm($colocation){
    if (isset($colocation['Id']))
    {
        $id = $colocation['Id'];
        require_once "model/dataDetail.php";
        $colocation = getDetail($id);
    }
    require "view/adModifyForm.php";
}

function adModifyForm($colocation){
    if (isset($colocation['Titre']) && isset($colocation['Image']) && isset($colocation['Habitation'])
    && isset($colocation['Localisation']) && isset($colocation['Adresse']) && isset($colocation['Description'])
    && isset($colocation['Pièces']))
    {

    }
}