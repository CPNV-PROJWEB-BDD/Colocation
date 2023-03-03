<?php

require 'model/DataRegister.php';

function home(){
    require "view/home.php";
}

function displayLocation($value){

    if(isset($value)){
        require "model/dataBrowseAd.php";
        $filter = extractFilter($value);
        search($filter,);
    }
    require "view/location.php";
}
function registerProcess($array){
    saveRegister($array);
    require 'view/home.php';
}