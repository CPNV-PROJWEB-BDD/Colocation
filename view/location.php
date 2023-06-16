<?php
/**
 * @file   account.php
 * @brief  description
 * @author Created by Jonathan.PENARANDA-G
 * @version 22.02.2023
 */
ob_start();
$title = "Colocation - Location"
?>

<section class="find_section ">
    <div class="container">
        <form action="index.php?action=displayLocation" method="post">
            <div class=" form-row">
                <div class="col-md-5">
                    <select name="kindOfGood" id="habitation-select" class="form-control">
                        <option value="">Tout type d'habitation</option>
                        <option value="Maison">Maison</option>
                        <option value="Appartement">Appartement</option>
                    </select>
                </div>
                <div class="col-md-5">
                    <select name="town" id="localisation-select" class="form-control">
                        <option value="">Tout localisation</option>
                        <?php foreach ($good_town as $item) :?>
                            <option value="<?=$item['town']?>"><?=$item['town']?> (<?=$item['number_goods']?>)</option>
                        <?php endforeach;?>
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
            <?php foreach($goods as $item) :?>
            <?php if ($item['active'] == 1) :?>
            <div class="box">
                <div class="img-box">
                    <a href="index.php?action=displayDetail&id=<?=$item['id']?>&kindOfGood=<?=$item['kindOfGood']?>&town=<?=$item['town']?>">
                    <img src="<?=$item['picture']?>" alt="">
                    </a>
                </div>
                <div class="detail-box">
                    <h6>
                        <?=$item['title']?>
                    </h6>
                    <p>
                        <?=$item['town']?>
                    </p>
                    <p>
                        <?=$item['numberOfPieces']?> pièces
                    </p>
                </div>
            </div>
            <?php endif;?>
            <?php endforeach;?>
        </div>
    </div>
</section>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>
