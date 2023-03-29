<?php

/**
 * @file   user.php
 * @brief  File description
 * @author Created by Ahmed.MUJANOVIC
 * @file  24.02.2023
 */


function signUp($signUpDataUser)
{
    if (count($signUpDataUser) == 0) {
        require 'view/signUpForm.php';
    } else {
        require 'model/signUp.php';
        signUp($signUpDataUser);
        require 'view/home.php';
    }

}

function login($loginDataUser)
{
    if (count($loginDataUser) == 0) {
        require 'view/loginForm.php';
    } else {
        require 'model/login.php';
    }

}




