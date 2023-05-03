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
    require_once 'model/dataBrowseAd.php';
    $biens = addFullLocation();
    require_once 'view/accountPage.php';
}

function insertAdJSON($dataAdCreation){
    
    if (count($dataAdCreation) == 0) {
        require 'view/adCreationForm.php';
    } else {
        require "model/adFileRegister.php";
        signUp($dataAdCreation);
        require 'view/home.php';
    }
}


