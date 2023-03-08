<?php
/**
 * @file   location.php
 * @brief  description
 * @author Created by Jonathan.PENARANDA-G
 * @version 22.02.2023
 */
ob_start();
$title = "Colocation - Location"
?>

<section class="find_section ">
    <div class="container">
        <form action="../index.php?action=displayLocation" method="post">
            <div class=" form-row">
                <div class="col-md-5">
                    <select name="habitation" id="habitation-select" class="form-control">
                        <option value="">Tout type d'habitation</option>
                        <option value="Maison">Maison</option>
                        <option value="Appartement">Appartement</option>
                    </select>
                </div>
                <div class="col-md-5">
                    <select name="localisation" id="localisation-select" class="form-control">
                        <option value="">Tout localisation</option>
                        <option value="Yverdon">Yverdon</option>
                        <option value="Ste-Croix">Ste-Croix</option>
                        <option value="Grandson">Grandson</option>
                        <option value="Fribourg">Fribourg</option>
                        <option value="Renens">Renens</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <button type="submit" class="">
                        search
                    </button>
                </div>
            </div>
        </form>
    </div>
</section>

<section class="sale_section layout_padding">
    <div class="container-fluid">
        <div class="heading_container">
            <h2>
                House For Sale
            </h2>
            <p>
                There are many variations of passages of Lorem Ipsum available, but the
            </p>
        </div>
        <div class="sale_container">
            <?foreach ($colocation as $item) :?>
            <?foreach ($item as $value) :?>
            <?if($value['habitation'] == $resultFilter[0] || $value['localisation'] == $resultFilter[1])?>
            <div class="box">
                <div class="img-box">
                    <img src="../view/content/images/s-1.jpg" alt="">
                </div>
                <div class="detail-box">
                    <h6>
                        <?=$value['Habitation']?>
                    </h6>
                    <p>
                        <?=$value['Localisation']?>
                    </p>
                    <p>
                        <?=$value['Pièces']?>
                    </p>
                </div>
            </div>
            <?endforeach;?>
            <?endforeach;?>
            <div class="box">
                <div class="img-box">
                    <img src="../view/content/images/s-2.jpg" alt="">
                </div>
                <div class="detail-box">
                    <h6>
                        Appartement
                    </h6>
                    <p>
                        Ste-Croix
                    </p>
                    <p>
                        2 pièces
                    </p>
                </div>
            </div>
            <div class="box">
                <div class="img-box">
                    <img src="../view/content/images/s-3.jpg" alt="">
                </div>
                <div class="detail-box">
                    <h6>
                        Maison
                    </h6>
                    <p>
                        Yverdon
                    </p>
                    <p>
                        4 pièces
                    </p>
                </div>
            </div>
            <div class="box">
                <div class="img-box">
                    <img src="../view/content/images/s-4.jpg" alt="">
                </div>
                <div class="detail-box">
                    <h6>
                        Appartement
                    </h6>
                    <p>
                        Grandson
                    </p>
                    <p>
                        3 pièces
                    </p>
                </div>
            </div>
            <div class="box">
                <div class="img-box">
                    <img src="../view/content/images/s-5.jpg" alt="">
                </div>
                <div class="detail-box">
                    <h6>
                        Maison
                    </h6>
                    <p>
                        Fribourg
                    </p>
                    <p>
                        3 pièces
                    </p>
                </div>
            </div>
            <div class="box">
                <div class="img-box">
                    <img src="../view/content/images/s-6.jpg" alt="">
                </div>
                <div class="detail-box">
                    <h6>
                        Appartement
                    </h6>
                    <p>
                        Renens
                    </p>
                    <p>
                        2.5 pièces
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>
