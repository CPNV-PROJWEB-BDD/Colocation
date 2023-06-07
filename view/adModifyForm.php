<?php
/**
 * @file   adModifyForm.php
 * @brief  description
 * @author Created by Jonathan.PENARANDA-G
 * @version 11.05.2023
 */
ob_start();
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
    <form class="modal-content" method="post" name="adModifyForm" action="../index.php?action=adModifyForm">
<?php foreach ($colocation as $item) :?>
        <div class="container">
            <h1>Modifier une annonce</h1>
            <?php if(isset($errorMessage)) :?>
            <h5><span style="color:red"><?=$errorMessage; ?></span></h5>
            <?php endif;?>
            <p>Pour modifiez cette annonce, veuillez changer le contenu des champs ci-dessous</p>
            <hr>
            <input type="hidden" name="Id" value="<?=$item['id']?>">

            <label for="adTitle"><b>titre annonce </b></label>
            <input type="text" placeholder="Entrez le titre de votre annonce" id="adTitle" name="Titre" required value="<?=$item['title']?>">

            <label for="previewPhoto"><b>Image de colocation </b></label>
            <input type="file" id="inputPhoto" name="Image" accept="image/jpeg, image/png, image/jpg" onchange="previewImage(event)">
            <img id="preview" src="<?=$item['picture']?>" href="<?=$item['picture']?>" alt="Preview Image" width="500px" height="500px" >

            <script>
                function previewImage(event) {
                    var reader = new FileReader();
                    reader.onload = function(){
                        var preview = document.getElementById('preview');
                        preview.src = reader.result;
                    }
                    reader.readAsDataURL(event.target.files[0]);
                }
            </script>

            <br><br>
            <label for="localisation"><b>Location</b></label>
            <input type="text" placeholder="Entrez le lieu de la colocation" id="Localisation" name="Localisation" required value="<?=$item['town']?>">

            <label for="adresse"><b>Adresse</b></label>
            <input type="text" placeholder="chemin de Gransson" id="adresse" name="Adresse" required value="<?=$item['address']?>">

            <fieldset>
                <legend>Type d'habitation</legend>

                <div>
                    <input type="radio" id="Habitation" name="Habitation" value="Maison" checked>
                    <label for="Habitation">Maison</label>
                </div>

                <div>
                    <input type="radio" id="Habitation" name="Habitation" value="Appartement">
                    <label for="Habitation">Appartement</label>
                </div>
            </fieldset>
            <br>

            <label for="nbPieces"><b>Nombre de pièces</b></label>
            <input type="number" placeholder="Nombres de pieces" id="nbPieces" name="Pièces" required value="<?=$item['numberOfPieces']?>">
            <br><br>

            <label for="description"><b>Detail</b></label>
            <input type="text" placeholder="Loyer, condition, etc..." id="detail" name="Description" required value="<?=$item['description']?>">


        </div>
        <?php endforeach;?>
        <button type="submit" class="signupbtn">Envoyer</button>
    </form>
    </body>
    </html>
<?php
$content = ob_get_clean();
require "view/gabarit.php";