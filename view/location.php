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
                    <input type="text" class="form-control" placeholder="Search Your Categories ">
                </div>
                <div class="col-md-5">
                    <input type="text" class="form-control" placeholder="Location ">
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
            <div class="box">
                <div class="img-box">
                    <img src="../view/content/images/s-1.jpg" alt="">
                </div>
                <div class="detail-box">
                    <h6>
                        apertments house
                    </h6>
                    <p>
                        There are many variations of passages of Lorem Ipsum available, but
                    </p>
                </div>
            </div>
            <div class="box">
                <div class="img-box">
                    <img src="../view/content/images/s-2.jpg" alt="">
                </div>
                <div class="detail-box">
                    <h6>
                        apertments house
                    </h6>
                    <p>
                        There are many variations of passages of Lorem Ipsum available, but
                    </p>
                </div>
            </div>
            <div class="box">
                <div class="img-box">
                    <img src="../view/content/images/s-3.jpg" alt="">
                </div>
                <div class="detail-box">
                    <h6>
                        apertments house
                    </h6>
                    <p>
                        There are many variations of passages of Lorem Ipsum available, but
                    </p>
                </div>
            </div>
            <div class="box">
                <div class="img-box">
                    <img src="../view/content/images/s-4.jpg" alt="">
                </div>
                <div class="detail-box">
                    <h6>
                        apertments house
                    </h6>
                    <p>
                        There are many variations of passages of Lorem Ipsum available, but
                    </p>
                </div>
            </div>
            <div class="box">
                <div class="img-box">
                    <img src="../view/content/images/s-5.jpg" alt="">
                </div>
                <div class="detail-box">
                    <h6>
                        apertments house
                    </h6>
                    <p>
                        There are many variations of passages of Lorem Ipsum available, but
                    </p>
                </div>
            </div>
            <div class="box">
                <div class="img-box">
                    <img src="../view/content/images/s-6.jpg" alt="">
                </div>
                <div class="detail-box">
                    <h6>
                        apertments house
                    </h6>
                    <p>
                        There are many variations of passages of Lorem Ipsum available, but
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
