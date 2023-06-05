<?php
/**
 * @file   goodDetail.php
 * @brief  description
 * @author Created by Jonathan.PENARANDA-G
 * @version 15.03.2023
 */
require_once "model/goodsManager.php";
require_once "model/dataVerification.php";

function displayDetail($filter)
{
    //TODO Uppercase, lowercase
    try {
        $id = verifyIdAd($filter);
        list($kindOfGood, $town) = filter($filter);
        $good = getColocationsId($id);
        $goodSimilar = getGoodSimilar($kindOfGood, $town);
    } finally {
        require "view/adDetail.php";
    }
}