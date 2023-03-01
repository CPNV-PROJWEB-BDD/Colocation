<?php
/**
 * @file   formRegister.php
 * @brief  File description
 * @author Created by Ahmed.MUJANOVIC
 * @file  22.02.2023
 */


ob_start();
$title = "RentASnow - Accueil";
?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <title>Title of the document</title>
        <link rel="stylesheet" href="/view/bootstrap/css/bootstrap.css">
    </head>

    <body>
    <form method="post" name="formRegister" action="../index.php?action=register">

        <div class="form-group">
            <label for="adTitle">Ad Title </label>
            <input type="text" class="form-control" id="adTitle" name="inputAdTitle" aria-describedby="adTitleHelp"
                   placeholder="Entrer le titre de votre annonce" required>
            <small id="adTitleHelp" class="form-text text-muted">Entrez le titre de votre annonce</small>
        </div>
<!--        TODO make image insert work-->
        <div class="profile-pic">
            <script type="javascript" src="insertAdImage.js"></script>
            <label class="-label" for="file">
                <span class="glyphicon glyphicon-camera"></span>
                <span>Change Image</span>
            </label>
            <input id="file" type="file" onchange="loadFile(event)"/>
            <img src="https://cdn.pixabay.com/photo/2017/08/06/21/01/louvre-2596278_960_720.jpg" id="output" width="200" />
        </div>
        <!--        TODO make image insert work-->

        <div class="form-group">
            <label for="inputEmail">Email address </label>
            <input type="email" class="form-control" id="inputEmail" name="inputEmailAddress" aria-describedby="emailHelp"
                   placeholder="firstname@domain.ch" required>
            <small id="emailHelp" class="form-text text-muted">Entrez votre email</small>
        </div>
        <div class="form-group">
            <label for="inputPassword">Password</label>
            <input type="password" class="form-control" id="inputPassword" name="inputPassword" placeholder="Password"
                   required>
        </div>
        <div class="form-group">
            <label for="inputPhoneNumber">Phone number</label>
            <input type="tel" class="form-control" id="inputPhoneNumber" name="inputPhoneNumber"
                   placeHolder="+41 21 786 78 78">
        </div>
        <button type="submit" class="btn btn-primary" onclick="function home()">Submit</button>
    </form>
    </body>
    </html>

<?php
$content = ob_get_clean();
require "gabarit.php";
