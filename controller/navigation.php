<?php

require 'model/DataRegister.php';

function home(){
    require "view/home.php";
}

function displayLocation(){

    require "view/location.php";
}
function registerProcess($array){
    saveRegister($array);
    require 'view/home.php';
}