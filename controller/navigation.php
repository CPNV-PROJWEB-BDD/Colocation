<?php


function home(){
    require "view/home.php";
}

function displayLocation($values){

    if(isset($values)){
        require_once "model/dataBrowseAd.php";
        $filter = filter($values);
    }
    require "view/location.php";
}