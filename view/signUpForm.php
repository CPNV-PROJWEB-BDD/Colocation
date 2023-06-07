<?php
/**
 * @file   signUpForm.php
 * @brief  File description
 * @author Created by Ahmed.MUJANOVIC
 * @file  22.02.2023
 */


ob_start();
$title = "signUp";
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
    <form class="modal-content" method="post" name="signUpForm" action="../index.php?action=signUp">

        <?php if (isset($ErrorMessage)) : ?>
            <h5><span style="color:red"><?= $ErrorMessage; ?></span></h5>
        <?php endif; ?>

        <div class="container">
            <h1>créer un compte</h1>
            <p>Pour créer un compte remplissez le formulaire ci-dessus</p>
            <hr>

            <label for="prenom"><b>Prénom </b></label>
            <input type="text" placeholder="Entrez-votre prénom" id="prenom" name="inputFirstName" required>

            <label for="nom"><b>Nom </b></label>
            <input type="text" placeholder="Entrez-votre nom" id="nom" name="inputLastName" required>

            <label for="email"><b>Email</b></label>
            <input type="email" placeholder="Entrez-votre Email" id="email" name="inputEmailAddress" required>

            <label for="inputPassword"><b>Password</b></label>
            <input type="password" placeholder="Entrez-votre mot de passe" id="inputPassword" name="inputPassword"
                   required>

            <label for="inputPassword"><b>Password</b></label>
            <input type="password" placeholder="Entrez de nouveau votre mot de passe" id="inputPasswordCheck"
                   name="inputPasswordCheck" required>

        </div>
        <div>
        <button type="submit" class="signupbtn">Envoyer</button>
        <a href="../index.php?action=login">
        <button type="button" class="changeButton" style="color: black">se connecter</button>
        </a>
        </div>
    </form>
    </body>
    </html>

<?php
$content = ob_get_clean();
require "gabarit.php";
