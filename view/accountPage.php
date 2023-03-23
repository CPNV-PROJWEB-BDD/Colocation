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
    <script src="adButtonFunction.js"></script>

</head>
<body>
    <a href="../index.php?action=Account"></a>
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
                                    
                                    <button onclick="window.location.href='../index.php?action=insertAdJSON'">crée annonce</button>  
                                    <button onclick="">modifier annonce</button>  
                                    <button onclick="askId()">supprimer annonce</button>               
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
                        <div class="col-sm-12">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h6 class="d-flex align-items-center mb-6"><i class="material-icons text-info mr-2">Current ad offer</h6>
                                </div>
                                <div class="sale_container">
                                    <table id="data-table">
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