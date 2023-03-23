<?php


function home(){
    require "view/home.php";
}

function displayLocation($values)
{

    if (isset($values)) {
        require_once "model/dataBrowseAd.php";
        $filter = filter($values);
    }
    require "view/location.php";
}

function Account(){
    require'view/accountPage.php';
}

function insertAdJSON($dataAdCreation){
    
    if (count($dataAdCreation) == 0) {
        require 'view/adCreationForm.php';
    } else {
        require "model/adFileRegister.php";
        signUp($dataAdCreation);
        require 'view/home.php';
    }
}

