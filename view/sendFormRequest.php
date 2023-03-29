<?php

/**
 * @file   sendFormRequest.php
 * @brief  File description
 * @author Created by Ahmed.MUJANOVIC
 * @file  29.03.2023
 */
ob_start();
$title = "Colocation - Send a form request"
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Title of the document</title>
    <link rel="stylesheet" href="../view/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../view/bootstrap/css/signUpForm.css">
</head>
<body>
<form class="modal-content" method="post" name="signUpForm" action="../index.php?action=sendFormRequest">

    <div class="container">
        <h1>créer un compte</h1>
        <p>Pour créer un compte remplissez le formulaire ci-dessus</p>
        <hr>

        <label for="prenom"><b>Prénom </b></label>
        <input type="text" placeholder="Entrez-votre prénom" id="prenom" name="inputFirstName" required>

        <label for="nom"><b>Nom </b></label>
        <input type="text" placeholder="Entrez-votre nom" id="nom" name="inputLastName" required>

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Entrez-votre Email" id="email" name="inputEmailAddress" required>

        <label for="inputPassword"><b>Password</b></label>
        <input type="password" placeholder="Entrez-votre mot de passe" id="inputPassword" name="inputPassword"
               required>

        <label for="inputPassword"><b>Password</b></label>
        <input type="password" placeholder="Entrez de nouveau votre mot de passe" id="inputPasswordCheck"
               name="inputPasswordCheck" required>

    </div>
    <button type="submit" class="signupbtn">Envoyer</button>
</form>
</body>
</html>







<?php
$content = ob_get_clean();
require "gabarit.php";
?>
