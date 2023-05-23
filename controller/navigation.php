<?php


function home(){
    try {
        require_once "model/dataBrowseAd.php";
        $biens = addFullLocation();
        $develop = addFullDevelop();
    }
    finally {
        require "view/home.php";
    }
}


function displayLocation($values){
    try{
        require_once "model/dataBrowseAd.php";
        $filter = filter($values);
        if ($filter == null){
            $errorMessage = "Nous n'avons pas trouvé de bien à vos critères ! Voici nos biens actuels :";
            $filter = addFullLocation();
        }
    } finally {
        require "view/location.php";
    }
}


function account(){
    require_once 'model/account.php';
    $biens = getColocations();
    require_once 'view/accountPage.php';
}

function insertAdJSON($dataAdCreation){
    
    if (count($dataAdCreation) == 0) {
        require 'view/adCreationForm.php';
    } else {
        if (isset($dataAdCreation['inputAdTitle']) && isset($dataAdCreation['inputPhoto']) &&
            isset($dataAdCreation['inputLocalisation']) && isset($dataAdCreation['inputAdresse']) &&
            isset($dataAdCreation['inputHabitation']) && isset($dataAdCreation['inputNbPieces']) &&
            isset($dataAdCreation['inputDescription']))
        {
            $title = $dataAdCreation['inputAdTitle'];
            $picture = $dataAdCreation['inputPhoto'];
            $town = $dataAdCreation['inputLocalisation'];
            $kindOfGood = $dataAdCreation['inputHabitation'];
            $address = $dataAdCreation['inputAdresse'];
            $description = $dataAdCreation['inputDescription'];
            $numberOfPieces = $dataAdCreation['inputNbPieces'];
            $active = 1;

            require_once 'model/account.php';
            if (newAd($title, $picture, $kindOfGood, $address, $description, $numberOfPieces, $active))

        }
        require 'model/adFileRegister.php';
        $biens = addColocation($dataAdCreation);
        require 'view/accountPage.php';
    }
}

