<?php
ob_start();
$title = "adCreationForm";
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
    <form class="modal-content" method="post" name="adCreationForm" action="../index.php?action=adAdd">

        <div class="container">
            <h1>créer une annonce</h1>
            <p>Pour créer une annonce remplissez les champs ci-dessus</p>
            <hr>

            <label for="adTitle"><b>titre annonce </b></label>
            <input type="text" placeholder="Entrez le titre de votre annonce" id="adTitle" name="inputAdTitle" required>

            <label for="previewPhoto"><b>Image de colocation </b></label>
            <input type="file" id="inputPhoto" name="inputPhoto" accept="image/jpeg, image/png, image/jpg" onchange="previewImage(event)">
            <img id="preview" src="#" alt="Preview Image" width="500px" height="500px" >

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
            <input type="text" placeholder="Entrez le lieu de la colocation" id="Localisation" name="inputLocalisation" required>
            
            <label for="adresse"><b>Adresse</b></label>
            <input type="text" placeholder="chemin de Gransson" id="adresse" name="inputAdresse" required>

            <fieldset>
                <legend>Type d'habitation</legend>

                <div>
                    <input type="radio" id="Habitation" name="inputHabitation" value="Maison">
                    <label for="Habitation">Maison</label>
                </div>

                <div>
                    <input type="radio" id="Habitation" name="inputHabitation" value="Appartement">
                    <label for="Habitation">Appartement</label>
                </div>
            </fieldset>
            <br>

            <label for="nbPieces"><b>Nombre de pièces</b></label>
            <input type="number" placeholder="Nombres de pieces" id="nbPieces" name="inputNbPieces" required>
            <br><br>

            <label for="description"><b>Detail</b></label>
            <input type="text" placeholder="Loyer, condition, etc..." id="detail" name="inputDescription" required>


        </div>
        <button type="submit" class="signupbtn">Envoyer</button>
    </form>
    </body>
    </html>

<?php
$content = ob_get_clean();
require "gabarit.php";
