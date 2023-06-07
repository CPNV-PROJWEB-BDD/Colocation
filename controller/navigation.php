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
            if (isset($sendAFormData['inputFirstName']) && isset($sendAFormData['inputLastName'])
                && isset($sendAFormData['inputText']) && isset($sendAFormData['inputEmailAddress'])
                && isset($sendAFormData['inputPassword']) && isset($sendAFormData['inputDateDebut'])
                && isset($sendAFormData['inputDateFin'])) {


                $userEmailAdress = $sendAFormData['inputEmailAddress'];
                $password = $sendAFormData['inputPassword'];
                $text = $sendAFormData['inputText'];
                $dateDebut = $sendAFormData['inputDateDebut'];
                $dateFin = $sendAFormData['inputDateFin'];

                if (IsLoginCorrect($userEmailAdress, $password)) {

                    $goods = getGoods();
                    $develop = addFullDevelop();
                    require "view/home.php";
                } else {
                    $ErrorMessage = "l'email ou le mot de passe est faux";
                }
            }

        } catch (ModelDataBaseException $ex) {
            $articleErrorMessage = "Nous rencontrons des problèmes";
            require "view/home.php";
        }
    }
}





