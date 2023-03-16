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
    <div class="square-box">
        <img src="content/images/square.png" alt="">
    </div>
    <div class="container">
        <div class="row">
            <?php foreach ($detail as $item) :?>
            <div class="col-md-6">
                <div class="img-box">
                    <img src="<?=$item['Image']?>" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="detail-box">
                    <div class="heading_container">
                        <h2>
                            <?=$item['Habitation']?> <?=$item['Localisation']?>
                        </h2>
                    </div>
                    <p>
                        There are many variations of passages of Lorem Ipsum available, but the majority have
                        suffered alteration
                        in
                        some form, by injected humour, or randomised words
                    </p>
                    <a href="">
                        Read More
                    </a>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>
</section>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>
