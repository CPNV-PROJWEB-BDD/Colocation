<?php
require_once "model/goodsManager.php";
require_once "model/dataVerification.php";
function home()
{
    //try {
        $goods = getGoods();
        $good_town = goodsTown();
        $develop = addFullDevelop();
    //} finally {
        require "view/home.php";
    //}
}


function displayLocation($valueFilter)
{
    try {
        list($kindOfGood, $town) = filter($valueFilter);
        $goods = goodsFilter($kindOfGood, $town);
        if ($goods == null) {
            $errorMessage = "Nous n'avons pas trouvé de bien à vos critères ! Voici nos biens actuels disponible :";
            $goods = getGoods();
        }
        $good_town = goodsTown();
    } finally {
        require "view/location.php";
    }
}

function account()
{
    $goods = getGoods();
    require_once 'view/accountPage.php';
}

