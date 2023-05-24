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
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin"
                                     class="rounded-circle" width="150">
                                <div class="mt-1">
                                    <h4>Bonjour <?= $_SESSION['prenom'] ?></h4>
                                    <button style="background-color: green; color: white" onclick="window.location.href='../index.php?action=colocationAdd'">crée
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
                                    <?php if ($item['active'] == 1) :?>
                                    <td>
                                        <?= $item['id'] ?>
                                    </td>
                                    <?php else:?>
                                    <td style="background-color: red">
                                        <?= $item['id'] ?>
                                    </td>
                                    <?php endif;?>
                                    <td>
                                        <?= $item['title'] ?>
                                    </td>
                                    <td>
                                        <a href="../index.php?action=displayDetail&Id=<?= $item['id'] ?>&Habitation=<?= $item['kindOfGood'] ?>&Localisation=<?= $item['town'] ?>">
                                            <img src="<?= $item['picture'] ?>" alt="" style="width: 400px; height: 250px">
                                        </a>
                                    </td>
                                    <td>
                                        <?= $item['kindOfGood'] ?>
                                    </td>
                                    <td>
                                        <?= $item['town'] ?><br><?= $item['address'] ?>
                                    </td>
                                    <td>
                                        <?= $item['description'] ?>
                                    </td>
                                    <td>
                                        <?= $item['numberOfPieces'] ?>
                                    </td>
                                    <td><a href="../index.php?action=displayModifyForm&Id=<?=$item['id']?>">
                                            <button style="background-color: green; color: white" id="modify-ad">modifier annonce</button>
                                        </a>
                                        <br><br>
                                        <?php if ($item['active'] == 1) :?>
                                        <a href="../index.php?action=adDesactive&id=<?=$item['id']?>">
                                            <button style="background-color: green; color: white" id="delete-ad">supprimer annonce</button>
                                        </a>
                                        <?php else:?>
                                        <a href="../index.php?action=adActive&id=<?=$item['id']?>">
                                            <button style="background-color: Red; color: white" id="delete-ad">Activer annonce</button>
                                        </a>
                                        <?php endif;?>
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