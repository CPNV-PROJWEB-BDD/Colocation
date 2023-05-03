<?php
ob_start();
?>
    <link rel="stylesheet" type="text/css" href="content/css/userPage.css">
    <script src="../view/content/js/adButtonFunction.js"></script>
    
    <div class="container-box">
        <div class="main-body">
            <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                                <div class="mt-3">
                                    <h4>Bonjour <?=$_SESSION['prenom']?></h4>
                                    
                                    <button onclick="window.location.href='../index.php?action=insertAdJSON'">crée annonce</button>  
                                    <button onclick="askId()" id="modify-ad">modifier annonce</button>  
                                    <button onclick="askId()" id="delete-ad">supprimer annonce</button>               
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
                                    <?=$_SESSION['prenom']?> <?=$_SESSION['nom']?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <?=$_SESSION['username']?>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                    <div class="row gutters-sm">
                        <div class="col-sm-12">
                            <div class="card h-100">
                                <div class="sale_container">
                                    <table id="data-table">
                                        <tbody>
                                        <?php foreach ($biens as $item) :?>
                                            <tr>
                                                <td>
                                                    <?=$item['Id']?>
                                                </td>
                                                <td>
                                                    <?=$item['Titre']?>
                                                </td>
                                                <td>
                                                   <img src="<?=$item['Image']?>">
                                                </td>
                                                <td>
                                                    <?=$item['Habitation']?>
                                                </td>
                                                <td>
                                                    <?=$item['Localisation']?>
                                                </td>
                                                <td>
                                                    <?=$item['Description']?>
                                                </td>
                                                <td>
                                                    <?=$item['Pièces']?>
                                                </td>
                                                <?php endforeach;?>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
$content = ob_get_clean();
require "gabarit.php";