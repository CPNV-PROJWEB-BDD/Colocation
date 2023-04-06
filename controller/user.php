<?php

/**
 * @file   user.php
 * @brief  File description
 * @author Created by Ahmed.MUJANOVIC
 * @file  24.02.2023
 */

require 'model/dataBrowseAd.php';

function signUp($signUpDataUser)
{
    if (count($signUpDataUser) == 0) {
        require 'view/signUpForm.php';
    } else {
        require 'model/signUp.php';
        $biens = addFullLocation();
        $develop = addFullDevelop();
        require 'view/home.php';
    }

}

function login($loginDataUser)
{
    if (count($loginDataUser) == 0) {
        require 'view/loginForm.php';
    } else {
        require 'model/login.php';
        $biens = addFullLocation();
        $develop = addFullDevelop();
        require 'view/home.php';
    }

}

function logout()
{
    $_SESSION = array();
    session_destroy();
    $biens = addFullLocation();
    $develop = addFullDevelop();
    require 'view/home.php';
}





