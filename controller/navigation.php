<?php


function home(){
    require "view/home.php";
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

function Account(){
    require'view/accountPage.php';
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



function displayLogin(){
    require "view/loginForm.php";
}

