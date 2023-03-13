<?php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title><?=$accountPage;?></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="userPage.css">
</head>
<body>
    <div class="container">
        <div class="main-body">
            <!-- /Breadcrumb -->
            <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                                <div class="mt-3">
                                    <h4>User</h4>
                                    <button class="btn btn-primary">Crée annonce</button>
                                    <button class="btn btn-outline-primary">Modifié annonce</button>
                                    <button class="btn btn-outline-primary">Supprimer annonce</button>
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
                                    Kenneth Valdez
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    fip@jukmuh.al
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-12">
                                    <!--TODO JS script to let user modify they're info data-->
                                    <a class="btn btn-info " target="__blank" href="">Edit</a>
                                    <!--TODO JS script to let user modify they're info data-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gutters-sm">
                        <div class="col-sm-6 mb-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">Current ad offer</h6>
                                </div>
<!--                                TODO make the box redirect to the ad offer-->
                                <div class="adBox">
                                    <div class="container">
                                        <h3>Titre annonce</h3>
                                    </div>
                                    <img src="../view/content/images/s-5.jpg" alt="IMG Appartement" style="width:100%;">
                                    <div class="container" style="background-color:white">
                                        <h2><b>Lieu</b></h2>
                                        <p>Details...</p>
                                    </div>
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
