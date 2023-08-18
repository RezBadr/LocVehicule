<?php
include("./assets/php/connection.php");
include("./assets/php/commandes.php");
$link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$idreservation = explode("+", $link)[1];
$idveh = explode("+", $link)[2];
$idreservation = intval($idreservation);
$idveh = intval($idveh);

$resultat = afficher_reservation($idreservation);
$vehicule = rechercher_vechicule($idveh)->fetch_assoc();
$nbrJrs = $resultat['nombreJours'];
$image = base64_encode($vehicule['image']);
$marque = $vehicule["marque"];
$modele = $vehicule["modele"];
$categorie = $vehicule["categorie"];
$fuelType = $vehicule["fuelType"];
$prix_jr = $vehicule["dailyPrice"];

$dateDepart = $resultat["DateDepart"];
$agenceDepart = $resultat["AgenceDepart"];
$dateRetour = $resultat["DateRetour"];
$agenceRetour = $resultat["DateRetour"];
$TTC = $prix_jr * $nbrJrs;
$TVA = $TTC * 0.2;
$HT = $TTC - $TVA;





?>
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Resume</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="../assets/css/fontawesome.css">
    <link rel="stylesheet" href="../assets/css/templatemo-plot-listing.css">
    <link rel="stylesheet" href="../assets/css/animated.css">
    <link rel="stylesheet" href="../assets/css/owl.css">
    <!--

TemplateMo 564 Plot Listing

https://templatemo.com/tm-564-plot-listing

-->
    <style>
    header .col {
        border: #8d99af 2px solid
    }

    header .d-flex {
        color: #8d99af;
        border-bottom: #8d99af 1px solid;
    }

    .info h4 {
        font-size: x-large;
        font-family: Times, serif;
        color: rgba(0, 0, 0, .5);
    }
    </style>
</head>

<body>
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="d-flex justify-content-evenly">
                        <i class="bi bi-check-circle-fill d-flex align-items-center"></i>
                        <h3 class="text-center">DATES ET AGENCES</h3>
                    </div>
                    <div class="d-flex justify-content-around">
                        <div class="info">
                            <p>Date et agence de depart : </p>
                            <h4><?php echo $dateDepart; ?></h4>
                            <p><i class="bi bi-arrow-return-right"></i><?php echo $agenceDepart; ?></p>
                        </div>
                        <div class="info">
                            <p>Date et agence de retour : </p>
                            <h4><?php echo $dateRetour; ?></h4>
                            <p><i class="bi bi-arrow-return-right"></i><?php echo $agenceRetour; ?></p>
                        </div>
                    </div>

                </div>
                <div class="col">
                    <div class="d-flex justify-content-evenly">
                        <i class="bi bi-check-circle-fill d-flex align-items-center"></i>
                        <h3 class="text-center">VEHICULE</h3>

                    </div>
                    <div class="info text-center">
                        <h4><?php echo $marque; ?><?php echo $modele; ?></h4>
                    </div>
                </div>
                <div class="col">
                    <div class="d-flex justify-content-evenly">
                        <i class="bi bi-3-circle-fill d-flex align-items-center"></i>
                        <h3 class="text-center">RÉSUMÉ</h3>

                    </div>
                </div>

            </div>
        </div>
    </header>

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

    <div class="contact-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <div class="row" style="padding: 15px;">
                            <div class="col-lg-6">
                                <div class="container">
                                    <div class="col  order-md-last">
                                        <div class=" d-flex justify-content-between align-items-center mb-3">
                                            <img src=" data:image/jpeg;base64,<?php echo $image; ?>" alt="" width="90%"
                                                height="150px">
                                        </div>
                                        <ul class="list-group mb-3">
                                            <li class="list-group-item d-flex justify-content-between lh-sm">
                                                <div>
                                                    <h6 class="my-0"><?php echo $marque; ?></h6>
                                                    <small class="text-body-secondary"><?php echo $modele; ?></small>
                                                </div>
                                                <span class="text-body-secondary"> <?php echo $prix_jr; ?> MAD /
                                                    Jour</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between lh-sm">
                                                <div>
                                                    <h6 class="my-0">Nombre totale des jours</h6>


                                                </div>
                                                <span class="text-body-secondary"> <?php echo $nbrJrs; ?> jours</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between lh-sm">
                                                <div>
                                                    <h6 class="my-0">HT </h6>

                                                </div>
                                                <span class="text-body-secondary"><?php echo $HT; ?> MAD</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between lh-sm">
                                                <div>
                                                    <h6 class="my-0">TVA (20%)</h6>
                                                </div>
                                                <span class="text-body-secondary"><?php echo $TVA; ?> MAD</span>
                                            </li>
                                            <?php

                                            if (isset($_GET['promo'])) {
                                                $promocode = $_GET['promocode'];
                                                if ($promocode === "LIVE") {
                                                    $TTC = $TTC - ($TTC * 0.05);
                                                    echo '

                                                    <li class="list-group-item d-flex justify-content-between bg-body-tertiary">
                                                        <div class="text-success">
                                                            <h6 class="my-0">Promo code</h6>
                                                            
                                                        </div>
                                                        <span class="text-success">−' . ($TTC * 0.05) . ' MAD</span>
                                                    </li>

                                                ';
                                                } else {
                                                    echo "<script>alert('Le code est inncorecte.')</script>";
                                                }
                                            }
                                            ?>

                                            <li class="list-group-item d-flex justify-content-between">
                                                <span>Total </span>
                                                <strong><?php echo $TTC; ?></strong>
                                            </li>
                                        </ul>

                                        <form class="card p-2" method="get">
                                            <div class="input-group">
                                                <input type="text" name="promocode" class="form-control"
                                                    placeholder="Promo code">
                                                <button type="submit" name="promo"
                                                    class="btn btn-secondary">Redeem</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                            <?php

                            if (isset($_POST['continuer'])) {
                                $nomUtilisateur = $_POST['nom'];
                                $prenomUtilisateur = $_POST['prenom'];
                                $cine = $_POST['cine'];
                                $telephone = $_POST['tel'];
                                $email = $_POST['email'];
                                $ville = $_POST['ville'];
                                $adresse = $_POST['adresse'];
                                $codepostale = $_POST['codePostale'];
                                $codepostale = intval($codepostale);

                                $idutilisateur = ajouter_client($cine, $prenomUtilisateur, $nomUtilisateur, $email, $telephone, $adresse, $ville, $codepostale);

                                ajouter_reservation($idveh, $idutilisateur, $TTC, $idreservation);
                                echo "
                                <script>
                                    location.href = '../paiement.php/?$idreservation';
                                </script>
                                ";
                            }
                            ?>

                            <div class="col-lg-6 align-self-center">
                                <h3 class="display-6 fw-bold text-body-emphasis">Vos données de réservation</h3>
                                <form id="contact" action="" method="post">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <fieldset>
                                                <input type="text" name="nom" id="name" placeholder="Nom"
                                                    autocomplete="on" required>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-6">
                                            <fieldset>
                                                <input type="text" name="prenom" id="surname" placeholder="Prenom"
                                                    autocomplete="on" required>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-6">
                                            <fieldset>
                                                <input type="text" name="cine" id="cine" placeholder="N° CINE"
                                                    autocomplete="on" required>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-6">
                                            <fieldset>
                                                <input type="tel" name="tel" id="tel" placeholder="0700000000"
                                                    autocomplete="on" required>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-12">
                                            <fieldset>
                                                <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                                    placeholder="Your Email" required="">
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-6">
                                            <fieldset>
                                                <input type="text" name="codePostale" id="codepostal"
                                                    placeholder="codePostal" autocomplete="on" required>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-6">
                                            <fieldset>
                                                <input type="text" name="ville" id="ville" placeholder="ville"
                                                    autocomplete="on" required>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-12">
                                            <fieldset>
                                                <input type="text" name="adresse" id="adresse" placeholder="adresse"
                                                    required="">
                                            </fieldset>
                                        </div>

                                        <div class="col-lg-12">
                                            <fieldset>
                                                <button type="submit" id="form-submit" name="continuer"
                                                    class="main-button "><i class="bi bi-cart-dash-fill"></i>Continuer
                                                    au checkout</button>
                                            </fieldset>
                                        </div>
                                    </div>
                                </form>
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
                            <img src="assets/images/black-logo.png" alt="Plot Listing Template">
                        </div>
                        <p>If you consider that <a rel="nofollow" href="https://templatemo.com/tm-564-plot-listing"
                                target="_parent">Plot Listing template</a> is useful for your website, please <a
                                rel="nofollow" href="https://www.paypal.me/templatemo" target="_blank">support us</a> a
                            little via PayPal.</p>
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
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/owl-carousel.js"></script>
    <script src="../assets/js/animation.js"></script>
    <script src="../assets/js/imagesloaded.js"></script>
    <script src="../assets/js/custom.js"></script>

</body>

</html>