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

function adAdd($newData)
{
    if (count($newData) == 0) {
        require 'view/adCreationForm.php';
    } else {
        try {
            if (isset($newData['inputAdTitle']) && isset($newData['inputPhoto']) &&
                isset($newData['inputLocalisation']) && isset($newData['inputAdresse']) &&
                isset($newData['inputHabitation']) && isset($newData['inputNbPieces']) &&
                isset($newData['inputDescription'])) {
                //extract login parameters
                $titre = $newData['inputAdTitle'];
                $picture = "../view/content/images/".$newData['inputPhoto'];
                $habitation = $newData['inputHabitation'];
                $localisation = $newData['inputLocalisation'];
                $adresse = $newData['inputAdresse'];
                $description = $newData['inputDescription'];
                $pieces = $newData['inputNbPieces'];
                require_once "model/account.php";
                if (addColocation($titre, $picture,  $habitation, $localisation, $adresse, $description, $pieces)) {
                    $biens = getColocations();
                    require "view/accountPage.php";
                } else {
                    require "view/adCreationForm.php";
                }

            }
        } catch (ModelDataBaseException $ex) {
            $loginErrorMessage = "Nous rencontrons actuellement un problème technique. Il est temporairement impossible de s'annoncer. Désolé du dérangement !";
            require "view/AddItem.php";

        }
    }
}


function displayModifyForm($colocation){
    if (isset($colocation['Id']))
    {
        $id = $colocation['Id'];
        require_once "model/account.php";
        $colocation = getColocationsId($id);
    }
    require "view/adModifyForm.php";
}

function adModifyForm($colocation){
    if (isset($colocation['Id']) &&isset($colocation['Titre']) && isset($colocation['Habitation'])
    && isset($colocation['Localisation']) && isset($colocation['Adresse'])
    && isset($colocation['Description']) && isset($colocation['Pièces']))
    {
        if (isset($colocation['Image'])){
            if ($colocation['Image'] == "")
            $image = null;
            else{
                $image = "../view/content/images/".$colocation['Image'];
            }
        }
        $Id = $colocation['Id'];
        $titre = $colocation['Titre'];
        $habitation = $colocation['Habitation'];
        $localisation = $colocation['Localisation'];
        $adresse = $colocation['Adresse'];
        $description = $colocation['Description'];
        $pieces = $colocation['Pièces'];

        require_once "model/account.php";
        if (adModify($Id, $titre, $image, $habitation, $adresse, $localisation, $description, $pieces)){
            $biens = getColocations();
            require "view/accountPage.php";
        }
        else{
            $errorMessage = "Désolé mais il y a une erreur quelque part là";
            require "view/adModifyForm.php";
        }
    }
}

function adDesactive($idColocation){
    if (isset($idColocation['id'])){
        $id = $idColocation['id'];

        require_once 'model/adModify.php';
        if(adModifyActiveOff($id)){
            require_once 'model/account.php';
            $biens = getColocations();
            require_once 'view/accountPage.php';
        }
    }
}
function adActive($idColocation){
    if (isset($idColocation['id'])){
        $id = $idColocation['id'];

        require_once 'model/adModify.php';
        if(adModifyActiveOn($id)){
            require_once 'model/account.php';
            $biens = getColocations();
            require_once 'view/accountPage.php';
        }
    }
}