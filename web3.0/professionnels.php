<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <title>Plot Listing Page</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-plot-listing.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <!--

TemplateMo 564 Plot Listing

https://templatemo.com/tm-564-plot-listing

-->
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.php" class="logo">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="index.php">Accueil</a></li>
                            <li><a href="category.php">Nos véhicules</a></li>
                            <li><a href="professionnels.php" class="active">Professionels</a></li>
                            <li><a href="contact.php">Contactez-nous! </a></li>
                            <li>
                                <div class="main-white-button"><a href="#">Login</a></div>
                            </li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <div class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="top-text header-text">
                        <h2>Découvrez notre gamme de véhicules utilitaires </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="category-post">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="naccs">
                        <div class="grid">
                            <div class="row">
                                <div class="col-lg-12 align-items-center">
                                    <div class="menu d-flex justify-content-center">
                                        <div class="first-thumb active">
                                            <div class="thumb">
                                                <span class="icon"><img src="assets/images/voiture-de-livraison.png"
                                                        alt="">
                                                    <h4>vehicules-utilitaires</h4>
                                                </span>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="thumb">
                                                <span class="icon"><img src="assets/images/cars.png" alt="">
                                                    <h4>Plusieurs voitures</h4>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="last-thumb">
                                            <div class="thumb">
                                                <span class="icon"><img src="assets/images/vehicule.png" alt="">
                                                    <h4> pick up</h4>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <ul class="nacc">
                                        <li class="active">
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-12" style="margin-top: 30px;">
                                                            <h1 style="text-align: center;">Location
                                                                utilitaire LLD pour ENTREPRISES</h1>
                                                            <hr>
                                                            <p>Leadeur de la location de véhicules utilitaires pour
                                                                entreprises au Maroc, GetCarNow accompagne au
                                                                quotidien les TPE, PME et grandes entreprises dans la
                                                                gestion de leurs parc de véhicules utilitaires type
                                                                fourgon, pick-up ou camion.
                                                                GetCarNow vous propose des formules de locations de
                                                                1é à 60 mois pour vos besoins en fourgonnettes ou
                                                                camionnettes jusqu'a 3,5 T </p>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="album py-5 bg-body-tertiary">
                                                            <div class="container">


                                                                <div
                                                                    class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                                                                    <?php
                                                                    include("./assets/php/connection.php");
                                                                    include("./assets/php/commandes.php");
                                                                    $cat2 = "Citadine";
                                                                    $result2 = rechercher_vechicule_categorie($cat2);
                                                                    while (null !== ($vehicule = mysqli_fetch_assoc($result2))) {
                                                                        $image = base64_encode($vehicule["image"]);
                                                                        $marque = $vehicule["marque"];
                                                                        $modele = $vehicule["modele"];
                                                                        $prix = $vehicule["dailyPrice"];
                                                                        $categorie = $vehicule["categorie"];
                                                                        $fuelType = $vehicule["fuelType"];
                                                                        $idvehicule = $vehicule["IDvehicule"];
                                                                    ?>


                                                                    <div class="col">
                                                                        <div class="card shadow-sm">
                                                                            <img src="data:image/jpeg;base64,<?php echo $image; ?>"
                                                                                alt="Image"
                                                                                class="bd-placeholder-img card-img-top"
                                                                                width="255" height="225">
                                                                            <div class="card-body">
                                                                                <h4><?php echo  $marque . '  ' . $modele; ?>
                                                                                </h4>
                                                                                <p><?php echo  $categorie . ' | ' . $modele . ' | ' . $fuelType; ?>
                                                                                </p>
                                                                                <span
                                                                                    class="text-body-secondary"><?php echo $prix; ?>
                                                                                    MAD / Jour</span>
                                                                                <div
                                                                                    class="d-flex justify-content-between align-items-center">
                                                                                    <div class="btn-group" role="group"
                                                                                        aria-label="Default button group">
                                                                                        <button type="submit"
                                                                                            name="reserver"
                                                                                            class="btn btn-sm btn-outline-secondary"
                                                                                            onclick="location.href='../resume.php/+<?php echo $idvehicule; ?>'">Réserver
                                                                                            ce véhicule</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <?php } ?>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="general-info">
                                                                <div class="row">
                                                                    <div class="col-lg-12" style="margin-top: 30px;">
                                                                        <h1 style=" text-align: center;">LOUEZ VOTRE
                                                                            PICK-UP AU MAROC À LA JOURNÉE, À
                                                                            LA SEMAINE, AU MOIS,</h1>
                                                                        <hr>
                                                                        <p>Offre de location de Pick up à Casablanca et
                                                                            partout au Maroc pour les professionnels et
                                                                            particuliers.
                                                                            GetCarNow leader marocain de la location de
                                                                            véhicules utilitaires vous propose un
                                                                            catalogue de Pick-up en simple cabine ou en
                                                                            double cabine 4X4. Avec leurs Puissances,
                                                                            robustesses et leur grand volume de
                                                                            chargement, les Pick Up simple ou double
                                                                            cabine 4x4 sont des véhicules adéquats pour
                                                                            vous accompagner dans toutes vos tâches
                                                                            quotidiennes, même les plus extrêmes ! </p>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="album py-5 bg-body-tertiary">
                                                            <div class="container">


                                                                <div
                                                                    class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                                                                    <?php
                                                                    $cat2 = "Premium";
                                                                    $result2 = rechercher_vechicule_categorie($cat2);
                                                                    while (null !== ($vehicule = mysqli_fetch_assoc($result2))) {
                                                                        $image = base64_encode($vehicule["image"]);
                                                                        $marque = $vehicule["marque"];
                                                                        $modele = $vehicule["modele"];
                                                                        $prix = $vehicule["dailyPrice"];
                                                                        $categorie = $vehicule["categorie"];
                                                                        $fuelType = $vehicule["fuelType"];
                                                                        $idvehicule = $vehicule["IDvehicule"];
                                                                    ?>


                                                                    <div class="col">
                                                                        <div class="card shadow-sm">
                                                                            <img src="data:image/jpeg;base64,<?php echo $image; ?>"
                                                                                alt="Image"
                                                                                class="bd-placeholder-img card-img-top"
                                                                                width="255" height="225">
                                                                            <div class="card-body">
                                                                                <h4><?php echo  $marque . '  ' . $modele; ?>
                                                                                </h4>
                                                                                <p><?php echo  $categorie . ' | ' . $modele . ' | ' . $fuelType; ?>
                                                                                </p>
                                                                                <span
                                                                                    class="text-body-secondary"><?php echo $prix; ?>
                                                                                    MAD / Jour</span>
                                                                                <div
                                                                                    class="d-flex justify-content-between align-items-center">
                                                                                    <div class="btn-group" role="group"
                                                                                        aria-label="Default button group">
                                                                                        <button type="submit"
                                                                                            name="reserver"
                                                                                            class="btn btn-sm btn-outline-secondary"
                                                                                            onclick="location.href='../resume.php/+<?php echo $idvehicule; ?>'">Réserver
                                                                                            ce véhicule</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <?php } ?>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="about">
                        <div class="logo">
                            <img src="assets/images/black-logo.png" alt="">
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adicingi elit, sed do eiusmod tempor incididunt ut et
                            dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="helpful-links">
                        <h4>Helpful Links</h4>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    <li><a href="#">Categories</a></li>
                                    <li><a href="#">Reviews</a></li>
                                    <li><a href="#">Listing</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Awards</a></li>
                                    <li><a href="#">Useful Sites</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-us">
                        <h4>Contact Us</h4>
                        <p>27th Street of New Town, Digital Villa</p>
                        <div class="row">
                            <div class="col-lg-6">
                                <a href="#">010-020-0340</a>
                            </div>
                            <div class="col-lg-6">
                                <a href="#">090-080-0760</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="sub-footer">
                        <p>Copyright © 2021 Plot Listing Co., Ltd. All Rights Reserved.
                            <br>
                            Design: <a rel="nofollow" href="https://templatemo.com" title="CSS Templates">TemplateMo</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/animation.js"></script>
    <script src="assets/js/imagesloaded.js"></script>
    <script src="assets/js/custom.js"></script>

</body>

</html>