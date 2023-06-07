<?php
/**
 * @file   account.php
 * @brief  description
 * @author Created by Jonathan.PENARANDA-G
 * @version 15.03.2023
 */

require_once "model/accountManager.php";
require_once "model/dataVerification.php";
require_once "ModelDataBaseException.php";
function adAdd($dataAd)
{
    if (count($dataAd) == 0) {
        require 'view/adCreationForm.php';
    } else {
        try {
            list($title, $picture, $kindOfGood, $town, $address, $description, $numberOfPieces) = verifyDataAd($dataAd);
            if (addAd($title, $picture, $kindOfGood, $town, $address, $description, $numberOfPieces)) {
                $goods = getGoods();
                require "view/accountPage.php";
            } else {
                require "view/adCreationForm.php";
            }
        } //TODO Missing exception type
        catch
        (ModelDataBaseException $ex) {
            $loginErrorMessage = "Nous rencontrons actuellement un problème technique. Il est temporairement impossible de s'annoncer. Désolé du dérangement !";
            require "view/adCreationForm.php";
        }
    }

}
function adModifyForm($dataAd)
{
    if (isset($_SERVER["REQUEST_METHOD"]) == $_POST) {
        try {
            list($title, $picture, $kindOfGood, $town, $address, $description, $numberOfPieces) = verifyDataAd($_POST);
            $id = verifyIdAd($_POST);
            if (adModify($id, $title, $picture, $kindOfGood, $town, $address, $description, $numberOfPieces)) {
                $goods = getGoods();
                require "view/accountPage.php";
            } else {
                $errorMessage = "Désolé mais il y a une erreur quelque part là";
                require "view/adModifyForm.php";
            }
        } catch (ModelDataBaseException $ex) {
            $loginErrorMessage = "Nous rencontrons actuellement un problème technique. Il est temporairement impossible de s'annoncer. Désolé du dérangement !";
            require "view/adModifyForm.php";
        }
    }else{
        $id = verifyIdAd($dataAd);
        $good = getGood($id);
        require "view/adModifyForm.php";
    }

}
function adActiveModify($idAd){
    try {
        $id = verifyIdAd($idAd);
        if (adChangeActive($id)){
            $goods = getGoods();
            require_once 'view/accountPage.php';
        }
    }catch (ModelDataBaseException $ex){
        require_once 'view/accountPage.php';
    }
}