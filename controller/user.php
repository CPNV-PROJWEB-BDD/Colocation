<?php

/**
 * @file   user.php
 * @brief  File description
 * @author Created by Ahmed.MUJANOVIC
 * @file  24.02.2023
 */

require 'model/membersManager.php';

function logout()
{
    $_SESSION = array();
    session_destroy();
    $biens = addFullLocation();
    $develop = addFullDevelop();
    require 'view/home.php';
}

function signUp($signUpDataUser)
{
    if (count($signUpDataUser) == 0) {
        require 'view/signUpForm.php';
    } else {
        try {
            if (isset($signUpDataUser['inputFirstName']) && isset($signUpDataUser['inputLastName']) && isset($signUpDataUser['inputEmailAddress']) && isset($signUpDataUser['inputPassword']) && isset($signUpDataUser['inputPasswordCheck'])) {

                $userFirstname = $signUpDataUser['inputFirstName'];
                $userLastname = $signUpDataUser['inputLastName'];
                $userEmailAdress = $signUpDataUser['inputEmailAddress'];
                $userPwd = $signUpDataUser['inputPassword'];
                $userPwdConfirm = $signUpDataUser['inputPasswordCheck'];

                if (verifyEmailAdress($userEmailAdress)) {
                    if ($userPwd == $userPwdConfirm) {
                        if (registerUser($userFirstname, $userLastname, $userEmailAdress, $userPwd)) {
                            $biens = addFullLocation();
                            $develop = addFullDevelop();
                            CreateSession($userEmailAdress, $userFirstname, $userLastname);
                            require "view/home.php";
                        } else {
                            $ErrorMessage = "Zebi il y a une erreur";
                            require "view/SignUpForm.php";
                        }
                    } else {
                        $ErrorMessage = "c'est pas le même mot de passe, remplissez à nouveau le formulaire avec le même mot de passe";
                        require "view/SignUpForm.php";
                    }
                } else {
                    $ErrorMessage = "l'adresse mail est déjà utilisé, remplissez à nouveau le formulaire";
                    require 'view/SignUpForm.php';
                }
            }
        } catch (ModelDataBaseException $ex) {
            $articleErrorMessage = "Nous rencontrons des problèmes";
            require "view/home.php";
        }

    }
}

function login($loginDataUser)
{
    if (count($loginDataUser) == 0) {
        require 'view/loginForm.php';
    } else {
        try {
            if (isset($loginDataUser['inputEmailAddress']) && isset($loginDataUser['inputPassword'])) {

                $userEmailAdress = $loginDataUser['inputEmailAddress'];
                $userPwd = $loginDataUser['inputPassword'];

                if (IsLoginCorrect($userEmailAdress, $userPwd)) {
                    CreateSession($userEmailAdress, $prenom = null, $nom = null);
                    $biens = addFullLocation();
                    $develop = addFullDevelop();
                    require "view/home.php";
                } else {
                    $ErrorMessage = "l'email ou le mot de passe est faux";
                    require "view/loginForm.php";
                }
            }
        } catch (ModelDataBaseException $ex) {
            $articleErrorMessage = "Nous rencontrons des problèmes";
            require "view/home.php";
        }
    }
}



