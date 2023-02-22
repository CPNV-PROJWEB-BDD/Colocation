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
                    <img src="images/s-1.jpg" alt="">
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
                    <img src="images/s-2.jpg" alt="">
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
                    <img src="images/s-3.jpg" alt="">
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
                    <img src="images/s-4.jpg" alt="">
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
                    <img src="images/s-5.jpg" alt="">
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
                    <img src="images/s-6.jpg" alt="">
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
        <div class="btn-box">
            <a href="">
                Find More
            </a>
        </div>
    </div>
</section>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>
