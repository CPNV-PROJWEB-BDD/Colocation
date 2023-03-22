<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title><?=$accountPage;?></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="content/css/userPage.css">
    <link rel="stylesheet" type="text/css" href="content/css/bootstrap.css" />

</head>
<body>
    <div class="container-box">
        <div class="main-body">
            <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                                <div class="mt-3">
                                    <h4>User</h4>
                                    <button onclick="window.location.href='adCreationForm.php';">
                                        crée annonce
                                    <button onclick="window.location.href='#';">
                                        modifier annonce
                                    <button onclick="window.location.href='#';">
                                        supprimer annonce
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Nom complet</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    Nom Prénom
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    email@email.com
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                    <div class="row gutters-sm">
                        <div class="col-sm-12 mb-3">
                            <div class="card h-75">
                                <div class="card-body">
                                    <h6 class="d-flex align-items-center mb-6"><i class="material-icons text-info mr-2">Current ad offer</h6>
                                </div>
                                <!-- example for the card-->
                                <!-- TODO fetch data from JSON file-->
                                <div class="sale_container">
                                    <table>
                                        <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Title</th>
                                            <th>Habitation</th>
                                            <th>Localisation</th>
                                            <th>Pièces</th>
                                            <th>Description</th>
                                        </tr>
                                        </thead>
                                        <tbody id="data-output">
                                        <!-- Prodcuts from javascript file in here. -->
                                        </tbody>
                                    </table>
                                    <script src="content/js/displayAdData.js"></script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php
$content = ob_get_clean();
require "gabarit.php";