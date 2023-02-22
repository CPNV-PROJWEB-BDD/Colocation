<?php
/**
* @file   formRegister.php
* @brief  File description
* @author Created by Ahmed.MUJANOVIC
* @file  22.02.2023
*/

ob_start();
$title = "Colocation - Register"
?>


<body>
<form method="post" name="formRegister" action="../index.php?action=register">

    <section class="bg-title-page p-t-50 p-b-40 flex-col-c-m "
             style="background-image: url(../view/content/images/d-2.jpg); height: 200px; width: 100%">
        <h2 class="l-text2 t-center">
            Créer un compte
        </h2>

    </section>


    <div class="form-group">
        <label for="firstName">Firstname </label>
        <input type="text" class="form-control" id="firstName" name="inputFirstName" aria-describedby="firstNameHelp"
               placeholder="Enter your firstname" required>
        <small id="firstNameHelp" class="form-text text-muted">Entrez votre prénom</small>
    </div>
    <div class="form-group">
        <label for="lastName">Lastname </label>
        <input type="text" class="form-control" id="lastName" name="inputLastName" aria-describedby="lastNameHelp"
               placeholder="Enter your lastname" required>
        <small id="lastNameHelp" class="form-text text-muted">Entrez votre nom</small>
    </div>
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
<?php
$content = ob_get_clean();
require 'gabarit.php'?>

