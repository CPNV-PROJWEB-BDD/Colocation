<?php

require_once "model/goodsManager.php";
require_once "model/dataVerification.php";

function home()
{
    try {
        $goods = getGoods();//TODO frenglish
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
            $goods = getGoods();
        }
    } finally {
        require "view/location.php";
    }
}


function account()
{
    $goods = getGoods();
    require_once 'view/accountPage.php';
}

function sendAFormRequest($sendAFormData)
{

    if (count($sendAFormData) == 0) {
        require 'view/sendAFormRequest.php';
    } else {
        try {
            if (isset($sendAFormData['inputText']) && isset($sendAFormData['inputDateDebut'])
                && isset($sendAFormData['inputDateFin'])) {

                $text = $sendAFormData['inputText'];
                $dateDebut = $sendAFormData['inputDateDebut'];
                $dateFin = $sendAFormData['inputDateFin'];

                if ($dateFin>$dateDebut) {
                    $goods = getGoods();
                    $develop = addFullDevelop();
                    require "view/home.php";
                }else{
                    require 'view/loginForm.php';
                }
            }

        } catch (ModelDataBaseException $ex) {
            $articleErrorMessage = "Nous rencontrons des problèmes";
            require "view/home.php";
        }
    }
}





