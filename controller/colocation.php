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
    if (isset($colocation['Id']) &&isset($colocation['Titre']) && isset($colocation['Habitation'])
    && isset($colocation['Localisation']) && isset($colocation['Adresse'])
    && isset($colocation['Description']) && isset($colocation['Pièces']))
    {
        if (isset($colocation['Image']) != ""){
            $image = null;
        }
        $Id = $colocation['Id'];
        $titre = $colocation['Titre'];
        $habitation = $colocation['Habitation'];
        $localisation = $colocation['Localisation'];
        $adresse = $colocation['Adresse'];
        $description = $colocation['Description'];
        $pieces = $colocation['Pièces'];

        require_once "model/adModify.php";
        if (adModify($Id, $titre, $image, $habitation, $adresse, $localisation, $description, $pieces)){
            require_once "model/dataBrowseAd.php";
            $biens = addFullLocation();
            require "view/accountPage.php";
        }
        else{
            $errorMessage = "Désolé mais il y a une erreur quelque part là";
            require "view/adModifyForm.php";
        }
    }
    $errorMessage = "Là t'as pas tout les données remplis";
    require_once "model/dataDetail.php";
    $colocation = getDetail($colocation['Id']);
    require "view/adModifyForm.php";
}