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
    <form class="modal-content" method="post" name="adCreationForm" action="../index.php?action=insertAdJSON">

        <div class="container">
            <h1>créer une annonce</h1>
            <p>Pour créer une annonce remplissez les champs ci-dessus</p>
            <hr>

            <label for="adTitle"><b>titre annonce </b></label>
            <input type="text" placeholder="Entrez le titre de votre annonce" id="adTitle" name="inputAdTitle" required>

            <label for="previewPhoto"><b>Image de colocation </b></label>
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

            <br><br>
            <label for="location"><b>Location</b></label>
            <input type="text" placeholder="Entrez le lieu de la colocation" id="location" name="inputLocation" required>

            <label for="detail"><b>Detail</b></label>
            <input type="text" placeholder="Entrez les informations pertinentes pour cette colocaltion" id="detail" name="inputDetail" required>

            <label for="contact"><b>Contact</b></label>
            <input type="text" placeholder="Entrez votre contact" id="contact" name="inputContact"
                   required>

        </div>
        <button type="submit" class="signupbtn">Envoyer</button>
    </form>
    </body>
    </html>

<?php
$content = ob_get_clean();
require "gabarit.php";

//TODO test if the form will register in the JSON file(waiting for Johnny's JSON file)
