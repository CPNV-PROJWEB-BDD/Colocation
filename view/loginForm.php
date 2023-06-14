<?php

/**
 * @file   loginForm.php
 * @brief  File description
 * @author Created by Ahmed.MUJANOVIC
 * @file  29.03.2023
 */
ob_start();
$title = "Colocation - login"
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Title of the document</title>
    <link rel="stylesheet" href="view/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="view/bootstrap/css/signUpForm.css">
</head>
<body>
<form class="modal-content" method="post" name="loginForm" action="index.php?action=login">


    <?php if (isset($ErrorMessage)) : ?>
        <h5><span style="color:red"><?= $ErrorMessage; ?></span></h5>
    <?php endif;?>

    <div class="container">
        <h1>se connecter</h1>
        <p>Pour se connecter remplissez le formulaire ci-dessus</p>
        <hr>

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Entrez-votre Email" id="email" name="inputEmailAddress" required>

        <label for="inputPassword"><b>Password</b></label>
        <input type="password" placeholder="Entrez-votre mot de passe" id="inputPassword" name="inputPassword"
               required>


    </div>
    <button type="submit" class="signupbtn">se connecter</button>
</form>
</body>
</html>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>
