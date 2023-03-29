<?php

/**
 * @file   login.php
 * @brief  File description
 * @author Created by Ahmed.MUJANOVIC
 * @file  29.03.2023
 */


// Récupérer les données du formulaire
$mail = $_POST['inputEmailAddress'];
$password = $_POST['inputPassword'];

// Ouvrir le fichier JSON contenant les informations de connexion
$data = file_get_contents('data/signUp.json');

// Convertir les données JSON en un tableau associatif PHP
$users = json_decode($data, true);

$tableau = array_push($mail, $password);

// Vérifier si l'utilisateur existe dans le tableau et que le mot de passe correspond

if (isset($users[$mail]['email'])== $mail && $users[$mail]['motDePasse'] === $password) {
    // Les informations de connexion sont correctes, créer une session
    session_start();
    $_SESSION['username'] = $mail;
    // Rediriger vers la page d'accueil

    header('Location: home.php');
} else {
    // Les informations de connexion sont incorrectes, afficher un message d'erreur
    echo 'Nom d\'utilisateur ou mot de passe incorrect.';
}

