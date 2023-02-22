<?php


require "model/dataRegister.php";

function home(){
    require "view/home.php";
}


function registerProcess($arrayOfUserInputs)
{
    saveRegister($arrayOfUserInputs);
    displayRegisterForm();
}


function displayRegisterForm()
{
    require "view/formRegister.php";
}