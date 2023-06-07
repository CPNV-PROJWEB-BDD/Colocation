<?php

/**
 * @file   sendAFormRequest.php
 * @brief  File description
 * @author Created by Ahmed.MUJANOVIC
 * @file  17.05.2023
 */
ob_start();
$title = "sendAFormRequest";
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
    <form class="modal-content" method="post" name="sendAformRequest" action="../index.php?action=sendAFormRequest">

        <div class="container">
            <h1>Envoyer une demande</h1>
            <p>Pour envoyer une demande de colocations remplissez le formulaire ci-dessus</p>
            <hr>

            <label for="prenom"><b>Prénom </b></label>
            <input type="text" placeholder="Entrez-votre prénom" id="prenom" name="inputFirstName" required>

            <label for="nom"><b>Nom </b></label>
            <input type="text" placeholder="Entrez-votre nom" id="nom" name="inputLastName" required>

            <label for="text"><b>petit text  </b></label>
            <input type="text" placeholder="Entrez un petit message" id="nom" name="inputText" required>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Entrez-votre Email" id="email" name="inputEmailAddress" required>

            <label for="inputPassword"><b>Password</b></label>
            <input type="password" placeholder="Entrez-votre mot de passe" id="inputPassword" name="inputPassword"
                   required>

            <label for="date"><b>date de début de la colocations</b></label>
            <input type="date" placeholder="Entrez la date de début ex:2018-04-13" id="dateDébut" name="inputDateDebut" required>

            <label for="date"><b>date de fin de la colocations</b></label>
            <input type="date" placeholder="Entrez la date de fin ex:2018-04-13" id="dateFin" name="inputDateFin" required>


        </div>
        <button type="submit" class="signupbtn">Envoyer</button>
    </form>
    </body>
    </html>

<?php
$content = ob_get_clean();
require "gabarit.php";