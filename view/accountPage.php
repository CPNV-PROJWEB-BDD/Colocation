<?php
ob_start();
?>
    <link rel="stylesheet" type="text/css" href="content/css/userPage.css">
    <script src="../view/content/js/adButtonFunction.js"></script>
    <link rel="stylesheet" type="text/css" href="../view/bootstrap/css/css.css"/>

    <div class="container-box">
        <div class="main-body">
            <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin"
                                     class="rounded-circle" width="150">
                                <div class="mt-1">
                                    <h4>Bonjour <?= $_SESSION['prenom'] ?></h4>
                                    <button onclick="window.location.href='../index.php?action=insertAdJSON'">crée
                                        annonce
                                    </button>
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
                                    <?= $_SESSION['prenom'] ?> <?= $_SESSION['nom'] ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <?= $_SESSION['username'] ?>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center gutters-sm">
                <div class="col-sm-12">
                    <div class="card h-100">
                        <div class="sale_container" style="padding-left: 12.5%;padding-right: 12.5%">
                            <table id="data-table" class="table table-bordered table-spacing">
                                <thead>
                                <tr>
                                    <th>
                                        Id
                                    </th>
                                    <th>
                                        Titre
                                    </th>
                                    <th>
                                        Image
                                    </th>
                                    <th>
                                        Habitation
                                    </th>
                                    <th>
                                        Localisation/Adresse
                                    </th>
                                    <th>
                                        Description
                                    </th>
                                    <th>
                                        Pièces
                                    </th>
                                    <th>
                                        Option
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($biens

                                as $item) : ?>
                                <tr>
                                    <td>
                                        <?= $item['Id'] ?>
                                    </td>
                                    <td>
                                        <?= $item['Titre'] ?>
                                    </td>
                                    <td>
                                        <a href="../index.php?action=displayDetail&Id=<?= $item['Id'] ?>&Habitation=<?= $item['Habitation'] ?>&Localisation=<?= $item['Localisation'] ?>">
                                            <img src="<?= $item['Image'] ?>" alt="" style="width: 400px; height: 250px">
                                        </a>
                                    </td>
                                    <td>
                                        <?= $item['Habitation'] ?>
                                    </td>
                                    <td>
                                        <?= $item['Localisation'] ?><br><?= $item['Adresse'] ?>
                                    </td>
                                    <td>
                                        <?= $item['Description'] ?>
                                    </td>
                                    <td>
                                        <?= $item['Pièces'] ?>
                                    </td>
                                    <td><a href="../index.php?action=displayModifyForm&Id=<?=$item['Id']?>">
                                            <button id="modify-ad">modifier annonce</button>
                                        </a>
                                        <br><br>
                                        <a href="../index.php?action=deleteColocation&id=<?=$item['Id']?>">
                                            <button id="delete-ad">supprimer annonce</button>
                                        </a>
                                    </td>
                                    <?php endforeach; ?>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
$content = ob_get_clean();
require "gabarit.php";