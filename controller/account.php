<?php
/**
 * @file   account.php
 * @brief  description
 * @author Created by Jonathan.PENARANDA-G
 * @version 15.03.2023
 */

require_once "model/accountManager.php";
function adAdd($dataAd)
{
    if (count($dataAd) == 0) {
        require 'view/adCreationForm.php';
    } else {
        try {
            list($title, $picture, $kindOfGood, $town, $address, $description, $numberOfPieces) = verifyDataAd($dataAd);
            if (addColocation($title, $picture, $kindOfGood, $town, $address, $description, $numberOfPieces)) {
                $goods = getColocations();
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
                $goods = getColocations();
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
        $good = getColocationsId($id);
        require "view/adModifyForm.php";
    }

}

function adDesactive($idColocation)
{
    if (isset($idColocation['id'])) {
        $id = $idColocation['id'];

        require_once 'model/accountManager.php';
        if (adModifyActiveOff($id)) {
            $biens = getColocations();
            require_once 'view/accountPage.php';
        }
    }
}

function adActive($idColocation)
{
    if (isset($idColocation['id'])) {
        $id = $idColocation['id'];

        require_once 'model/accountManager.php';
        if (adModifyActiveOn($id)) {
            $biens = getColocations();
            require_once 'view/accountPage.php';
        }
    }
}