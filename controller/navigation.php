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



function displayLogin(){
    require "view/loginForm.php";
}

