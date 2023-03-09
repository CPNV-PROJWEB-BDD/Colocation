<?php

require 'model/DataRegister.php';

function home(){
    require "view/home.php";
}

function displayLocation($value){

    if(isset($value)){
        require_once "model/dataBrowseAd.php";
        $filter = filter($value);
    }else{
        require "view/home.php";
    }
    require "view/location.php";
}
function registerProcess($array){
    saveRegister($array);
    require 'view/home.php';
}