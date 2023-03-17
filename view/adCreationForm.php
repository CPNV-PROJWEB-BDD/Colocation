<?php

ob_start();
?>
    <!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title>Title of the document</title>

            <link rel="stylesheet" href="content/css/AdCreationForm.css">
        </head>

        <body>
            <form method="post" name="formRegister" action="../index.php?action=insertAdJSON">

                <div class="form-group">
                    <label for="adTitle">Ad Title </label>
                    <input type="text" class="form-control" id="adTitle" name="inputAdTitle" aria-describedby="adTitleHelp"
                           placeholder="Entrer le titre de votre annonce" required>
                    <small id="adTitleHelp" class="form-text text-muted">Entrez le titre de votre annonce</small>
                </div>
                <br>
                <div class="image">
                    <input type="file" id="inputPhoto" accept="image/jpeg, image/png, image/jpg" onchange="previewImage(event)">
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
                </div>
                <br>
                <div class="form-group">
                    <label for="inputLieu">Lieu </label>
                    <input type="text" class="form-control" id="inputLieu" name="inputLieu"
                           placeholder="Rue de X 1003 lausanne" required>
                    <small id="inputLieu" class="form-text text-muted">Entrez le lieu de la location</small>
                </div>
                <br>
                <div class="form-group">
                    <label for="inputDetail">Detail</label>
                    <input type="text" class="form-control" id="inputDetail" name="inputDetail" placeholder="Detail"
                           required>
                </div>
                <br>
                <div class="form-group">
                    <label for="inputContact">Contact</label>
                    <input type="text" class="form-control" id="inputContact" name="inputContact"
                           placeHolder="Num° téléphone, Email, etc...">
                </div>
                <br>
                <button type="submit" class="btn btn-primary" >Submit</button>
            </form>
        </body>
    </html>

<?php
$content = ob_get_clean();
require "gabarit.php";
