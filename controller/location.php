<?php
/**
 * @file   location.php
 * @brief  description
 * @author Created by Jonathan.PENARANDA-G
 * @version 15.03.2023
 */
function displayDetail($id){
    if(isset($id)){
        require_once "model/dataDetail.php";
        $detail = getDetail($id);
    }
    require "view/adDetail.php";
}