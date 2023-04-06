<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Teaser</title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="../view/content/css/bootstrap.css" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Raleway:400,700&display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../view/content/css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="../view/content/css/responsive.css" rel="stylesheet" />
</head>

<body>
<div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg custom_nav-container">
                <a class="navbar-brand" href="index.php?action=home">
                    <img src="../view/content/images/logo.png" alt="" />
                </a>


                <div class="navbar-collapse" id="">
                    <ul class="navbar-nav justify-content-between ">
                    </ul>



                    <div class="custom_menu-btn">
                        <button onclick="openNav()">
                <span class="s-1">

                </span>
                            <span class="s-2">

                </span>
                            <span class="s-3">

                </span>
                        </button>
                    </div>

                    <div class="topbar-child2">
					<span class="topbar-email">
                        <?php if (isset($_SESSION['username'])) : ?>
                            <?=$_SESSION['username']; ?>
                        <?php endif;?>
					</span>
                    </div>


                    <div id="myNav" class="overlay">
                        <div class="overlay-content">
                            <a href="../index.php?action=home">ACCUEIL</a>
                            <?php if(!isset($_SESSION['username'])) :?>
                            <a href="../index.php?action=signUp">S'ENREGISTRER</a>
                            <a href="../index.php?action=displayLogin">SE CONNECTER</a>
                            <?php else:?>
                                <a href="../index.php?action=Account">COMPTE</a>
                            <a href="../index.php?action=logout">SE DECONNECTER</a>
                            <?php endif;?>
                        </div>
                    </div>
                </div>
            </nav>
        </div>


    </header>
    <section class="slider_section ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 offset-md-1">
                    <div class="detail-box">
                        <h1>
                            <span> Colocation</span> <br>
                            Appartement <br>
                            Maison
                        </h1>
                        <p>
                            Plein de biens mis à disposition rien que pour vous
                        </p>
                        <div class="btn-box">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

                    <!--__________CONTENU__________-->

                    <div class="span12" id="divMain">
                        <?=$content; ?>
                    </div>

                    <!--________FIN CONTENU________-->

    <!-- footer section -->
    <section class="container-fluid footer_section ">
        <div class="container">
            <p>
                &copy; <span id="displayYear"></span> All Rights Reserved By
                <a href="https://html.design/">Free Html Templates</a>
            </p>
        </div>
    </section>
    <!-- end  footer section -->

    <script type="text/javascript" src="../view/content/js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="../view/content/js/bootstrap.js"></script>
    <script type="text/javascript" src="../view/content/js/custom.js"></script>
</div>

</body>
</html>