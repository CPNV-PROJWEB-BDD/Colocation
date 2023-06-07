<?php

/**
 * @file   membersManager.php
 * @brief  File description
 * @author Created by Ahmed.MUJANOVIC
 * @file  15.05.2023
 */

require "model/dbConnector.php";
require "model/dataBrowseAd.php";
function CreateSession($email, $prenom, $nom)
{
    if ($prenom == null || $nom == null){
        $user = getUser($email);
        foreach ($user as $key){
            $_SESSION['prenom'] = $key['firstname'];
            $_SESSION['nom'] = $key['lastname'];
            $_SESSION['username'] = $email;
        }
    }else{
        $_SESSION['prenom'] = $prenom;
        $_SESSION['nom'] = $nom;
        $_SESSION['username'] = $email;
    }
    return true;
}

function getUser($email){
    $query = 'SELECT * FROM members WHERE email="'. $email .'"';
    $result = executeQuerySelect($query);
    return $result;
}
function verifyEmailAdress($email)
{
    $queryCheck = 'SELECT email FROM members WHERE email="' . $email . '"';
    $check = executeQuerySelect($queryCheck);
    if (isset($check[0])) {
        $result = false;
    } else {
        $result = true;
    }
    return $result;
}

function registerUser($userFirstname, $userLastname, $userMail, $userPwd)
{

    $userPwdHash = password_hash($userPwd, PASSWORD_DEFAULT);

    $query = "insert into members (firstname, lastname, email, passwordHash)";
    $queryComplete = $query . " Values ('" . $userFirstname . "','" . $userLastname . "','" . $userMail . "','" . $userPwdHash . "');";
    $result = executeQueryInsertUpdate($queryComplete);
    return $result;
}

function IsLoginCorrect($userMail, $userPwd)
{
    $result = false;

    $query = "SELECT passwordHash from members where email = '$userMail'";
    $queryResult = executeQuerySelect($query);

    if (count($queryResult) == 1) {
        $userHashPwd = $queryResult[0]['passwordHash'];
        $result = password_verify($userPwd, $userHashPwd);
    }
    return $result;
}