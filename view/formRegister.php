<?php
/**
 * @file   formRegister.php
 * @brief  File description
 * @author Created by Ahmed.MUJANOVIC
 * @file  22.02.2023
 */


ob_start();
$title = "register";
?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <title>Title of the document</title>
        <link rel="stylesheet" href="/view/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="../view/bootstrap/css/FormRegister.css">
    </head>

    <body>

    <form class="modal-content" method="post" name="formRegister" action="../index.php?action=register">

        <div class="container">
            <h1>créer un compte</h1>
            <p>Pour créer un compte remplissez le formulaire ci-dessus</p>
            <hr>

            <label for="lastName"><b>Prénom </b></label>
            <input type="text" placeholder="Entrez-votre prénom" id="LastName" name="inputFirstName" required>

            <label for="lastName"><b>Nom </b></label>
            <input type="text" placeholder="Entrez-votre nom" id="LastName" name="inputLastName" required>

            <label for="email"><b>Email</b></label>
            <input type="email" placeholder="Entrez-votre Email" id="email" name="inputEmailAddress" required>
            <!--input type="email" id="email" size="30" required -->

            <label for="inputPassword"><b>Password</b></label>
            <input type="password" placeholder="Entrez-votre mot de passe" id="inputPassword" name="inputPassword" required>

        </div>


        <button type="submit" class="signupbtn">Envoyer</button>
    </form>
    </body>
    </html>

<?php
$content = ob_get_clean();
require "gabarit.php";
