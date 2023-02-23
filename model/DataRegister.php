<?php

/**
 * @file   DataRegister.php
 * @brief  File description
 * @author Created by Ahmed.MUJANOVIC
 * @file  22.02.2023
 */



require "fileConnector.php";

//region Global variables
$newRegister;
//endregion Global variables

function saveRegister($arrayInputUserForm)
{
    $newRegisterToWrite = extractRegister($arrayInputUserForm);
    writeRegisterInJSON($newRegisterToWrite);
}

function extractRegister($arrayInputUserForm)
{

    $FirstName = $arrayInputUserForm['inputFirstName'];;
    $Lastname = $arrayInputUserForm['inputLastName'];
    $emailAddress = $arrayInputUserForm['inputEmailAddress'];
    $phoneNumber = $arrayInputUserForm['inputPhoneNumber'];


    $newRegisterTemp = array($FirstName, $Lastname, $emailAddress, $phoneNumber);
    return $newRegisterTemp;
}
