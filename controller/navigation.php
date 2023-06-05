<?php
require_once "model/goodsManager.php";
require_once "model/dataVerification.php";
function home()
{
    try {
        $goods = getColocations();//TODO frenglish
        $develop = addFullDevelop();//TODO meaning of develop ?
    } finally {
        require "view/home.php";
    }
}


function displayLocation($valueFilter)
{
    try {
        list($kindOfGood, $town) = filter($valueFilter);
        $goods = goodsFilter($kindOfGood, $town);
        if ($goods == null) {
            $errorMessage = "Nous n'avons pas trouvé de bien à vos critères ! Voici nos biens actuels :";
            $goods = getColocations();
        }
    } finally {
        require "view/location.php";
    }
}


function account()
{
    $goods = getColocations();
    require_once 'view/accountPage.php';
}

