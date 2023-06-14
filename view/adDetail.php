<?php
/**
 * @file   adDetail.php
 * @brief  description
 * @author Created by Jonathan.PENARANDA-G
 * @version 15.03.2023
 */
ob_start();
$title = "Colocation - Detail"
?>
<section class="about_section layout_padding-bottom">
    <div class="container">
        <div class="row">
            <?php foreach ($good as $item) : ?>
            <div class="col-md-6">
                <div class="img-box">
                    <img src="<?= $item['picture'] ?>" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="detail-box">
                    <div class="heading_container">
                        <h2>
                            <?= $item['title'] ?>
                        </h2>
                    </div>
                    <p>
                        <strong>Habitation :</strong> <?= $item['kindOfGood'] ?>
                    </p>
                    <p>
                        <strong>Description :</strong> <?= $item['description'] ?>
                    </p>
                    <p>
                        <strong>Pièces :</strong> <?= $item['numberOfPieces'] ?>
                    </p>
                    <p>
                        <strong>Adresse :</strong> <?= $item['address'] ?> <?= $item['town'] ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
    <section class="client_section layout_padding">
        <div class="container-fluid">
            <div class="heading_container">
                <h2>
                    Lieu google maps
                </h2>
            </div>
            <div class="align-content-center">
                <div class="map_container">
                    <div class="map-responsive ">
                        <center>
                            <iframe src="https://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=<?= $item['address'] ?> <?= $item['town'] ?>&z=14&output=embed"
                                    width="600" height="1800" frameborder="0" style="border:1px; width: 100%; height:400px"
                                    allowfullscreen></iframe>
                        </center>
                    </div>
            </div>
        </div>
    </section>
<?php endforeach; ?>
<section class="sale_section layout_padding">
    <div class="container-fluid">
        <div class="heading_container">
            <h2>
                Voici les similaires colocations mis à disposition
            </h2>
        </div>
        <div class="sale_container">
            <?php foreach ($goodSimilar as $item) : ?>
                <div class="box">
                    <div class="img-box">
                        <a href="../index.php?action=displayDetail&id=<?= $item['id'] ?>&kindOfGood=<?= $item['kindOfGood'] ?>&town=<?= $item['town'] ?>">
                            <img src="<?= $item['picture'] ?>" alt="">
                        </a>
                    </div>
                    <div class="detail-box">
                        <h6>
                            <?= $item['title'] ?>
                        </h6>
                        <p>
                            <?= $item['town'] ?>
                        </p>
                        <p>
                            <?= $item['numberOfPieces'] ?> pièces
                        </p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>
