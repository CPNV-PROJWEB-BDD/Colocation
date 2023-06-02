<?php


function home(){
    try {
        require_once "model/goodsManager.php";
        $biens = addFullLocation();//TODO frenglish
        $develop = addFullDevelop();//TODO meaning of develop ?
    }
    finally {
        require "view/home.php";
    }
}


function displayLocation($valueFilter){
    try{
        require_once "model/goodsManager.php";
        list($kindOfGood, $town) = filter($valueFilter);
        if (goodsFilter($kindOfGood, $town)){

        }
        if ($filter == null){
            $errorMessage = "Nous n'avons pas trouvé de bien à vos critères ! Voici nos biens actuels :";
            $filter = addFullLocation();
        }
    } finally {
        require "view/location.php";
    }
}


function account(){
    require_once 'model/accountManager.php';
    $goods = getColocations();
    require_once 'view/accountPage.php';
}

