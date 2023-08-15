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

    <title>Plotlist - Listing HTML5 Template</title>

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
                            <li><a href="category.php" class="active">Nos véhicules</a></li>
                            <li><a href="professionnels.php">Professionels</a></li>
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
                        <h6>Decouvrir Nos Vehicules</h6>
                        <h2>Nous avons une large gamme de catégories de voitures pour vous</h2>
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
                                <div class="col-lg-12">
                                    <div class="menu">
                                        <div class="first-thumb active">
                                            <div class="thumb">
                                                <span class="icon"><img src="assets/images/suv-de-voiture.png" alt="">
                                                    <h4>Familiale</h4>
                                                </span>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="thumb">
                                                <span class="icon"><img src="assets/images/voiture-compacte.png" alt="">
                                                    <h4>Compacte</h4>
                                                </span>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="thumb">
                                                <span class="icon"><img src="assets/images/star.png" alt="">
                                                    <h4>Premium</h4>
                                                </span>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="thumb">
                                                <span class="icon"><img src="assets/images/voiture-ecologique.png"
                                                        alt="">
                                                    <h4>Hybride</h4>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="last-thumb">
                                            <div class="thumb">
                                                <span class="icon"><img src="assets/images/suv.png" alt="">
                                                    <h4>SUV & 4x4</h4>
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
                                                        <div class="album py-5 bg-body-tertiary">
                                                            <div class="container">


                                                                <div
                                                                    class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                                                                    <?php
                                                                    include("./assets/php/connection.php");
                                                                    include("./assets/php/commandes.php");
                                                                    $cat1 = "Familiale";
                                                                    $result1 = rechercher_vechicule_categorie($cat1);
                                                                    while (null !== ($row1 = mysqli_fetch_assoc($result1))) {
                                                                        $image = base64_encode($row1["image"]);
                                                                        $marque = $row1["marque"];
                                                                        $modele = $row1["modele"];
                                                                        $prix = $row1["dailyPrice"];
                                                                        $categorie = $row1["categorie"];
                                                                        $fuelType = $row1["fuelType"];
                                                                        $idvehicule = $row1["IDvehicule"];
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
                                                        <div class="album py-5 bg-body-tertiary">
                                                            <div class="container">


                                                                <div
                                                                    class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                                                                    <?php
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
                                                        <div class="col-lg-12">
                                                            <div class="general-info">
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <h4>General Info. about cars</h4>
                                                                        <p>Lorem ipsum dolor sit amet, consectetur
                                                                            adipiscing elit, sed do eiusmod tempor ak
                                                                            incididunt ut labore et dolore magna aliqua.
                                                                            Quis ipsum suspendisse ultrices gravidat
                                                                            doerski. Sed ut perspiciatis unde omnis iste
                                                                            natus error sit voluptatem accusantium
                                                                            doloremque.</p>
                                                                        <span class="list-item">* Listing should have
                                                                            all the proper documents before being
                                                                            checked in.
                                                                            <br>** Listing will be checked by our team
                                                                            members.
                                                                            <br>*** After being sold, it should
                                                                            imediately be removed from our site and
                                                                            properly monitored.</span>
                                                                    </div>
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
                                                        <div class="album py-5 bg-body-tertiary">
                                                            <div class="container">


                                                                <div
                                                                    class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                                                                    <?php

                                                                    $req = $mysqli->prepare("SELECT * FROM vehicle WHERE  fuelType = 'Hybride' GROUP BY modele ORDER BY IDvehicule;");
                                                                    $req->execute();
                                                                    $result = $req->get_result();
                                                                    while (null !== ($vehicule = mysqli_fetch_assoc($result))) {
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
                                                        <div class="album py-5 bg-body-tertiary">
                                                            <div class="container">


                                                                <div
                                                                    class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                                                                    <?php
                                                                    $cat2 = "SUV & 4x4";
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