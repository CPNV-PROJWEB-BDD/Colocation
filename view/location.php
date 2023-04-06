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
            <?php if (isset($errorMessage)) :?>
                <h5><span style="color:red"><?=$errorMessage; ?></span></h5>
            <?php else:?>
            <h2>
                Colocation disponible
            </h2>
            <p>
                Voici les différents colocations mis à disposition
            </p>
            <?php endif;?>
        </div>
        <div class="sale_container">
            <?php foreach($filter as $item) :?>
            <div class="box">
                <div class="img-box">
                    <a href="../index.php?action=displayDetail&Id=<?=$item['Id']?>&Habitation=<?=$item['Habitation']?>&Localisation=<?=$item['Localisation']?>">
                    <img src="<?=$item['Image']?>" alt="">
                    </a>
                </div>
                <div class="detail-box">
                    <h6>
                        <?=$item['Titre']?>
                    </h6>
                    <p>
                        <?=$item['Localisation']?>
                    </p>
                    <p>
                        <?=$item['Pièces']?> pièces
                    </p>
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
