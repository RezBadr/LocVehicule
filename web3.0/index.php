<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>GetCarNow</title>

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
                            <li><a href="index.php" class="active">Accueil</a></li>
                            <li><a href="category.php">Nos véhicules</a></li>
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

    <div class="main-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="top-text header-text">
                        <h2>Découvrez le monde en voiture grâce à GetCarNow - votre partenaire de location de voiture de
                            confiance.</h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <?php
                    include("./assets/php/connection.php");
                    include("./assets/php/commandes.php");

                    if (isset($_POST['trouverVoiture'])) {
                        $dateDepart = $_POST["date-depart"];
                        $adresseDepart = $_POST["agence"];
                        $dateRetour = $_POST["date-retour"];

                        $startDate = new DateTime($dateDepart); // Date de début
                        $endDate = new DateTime($dateRetour);   // Date de fin

                        $interval = $startDate->diff($endDate); // Calcul de l'intervalle entre les deux dates

                        $numberOfDays = $interval->days;
                        $IDreservation =
                            ajouter_date_agence($dateDepart, $adresseDepart, $dateRetour, $numberOfDays);

                        header("Location:reservation.php/?" . $IDreservation);
                    }

                    ?>
                    <form id="search-form" name="gs" method="post" action="">
                        <div class="row">
                            <div class="col-lg-3 align-self-center">
                                <fieldset>
                                    <input type="date" name="date-depart" id="date-depart" class="searchText" placeholder="Date de depart" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-3 align-self-center">
                                <fieldset>
                                    <input type="address" name="agence" class="searchText" placeholder="Agence de depart" autocomplete="on" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-3 align-self-center">
                                <fieldset>
                                    <input type="date" name="date-retour" id="date-retour" class="searchText" placeholder="Date de retour" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-3">
                                <fieldset>
                                    <button type="submit" name="trouverVoiture" class="main-button"><i class="fa fa-search"></i>Réserver un
                                        véhicule</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-10 offset-lg-1">
                    <ul class="categories">
                        <li><a href="category.php"><span class="icon"><img src="assets/images/suv-de-voiture.png" alt=""></span>Familiale </a></li>
                        <li><a href="category.php"><span class="icon"><img src="assets/images/voiture-compacte.png" alt=""></span> Compacte </a></li>
                        <li><a href="category.php"><span class="icon"><img src="assets/images/star.png" alt=""></span>Premium</a></li>
                        <li><a href="category.php"><span class="icon"><img src="assets/images/voiture-ecologique.png" alt=""></span>Hybride</a></li>
                        <li><a href="category.php"><span class="icon"><img src="assets/images/suv.png" alt=""></span>SUV
                                & 4x4</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="popular-categories">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <div class="naccs">
                        <div class="grid">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="menu">
                                        <div class="first-thumb active">
                                            <div class="thumb">
                                                <span class="icon"><img src="assets/images/agence.png" alt=""></span>
                                                Nos agences
                                            </div>
                                        </div>
                                        <div>
                                            <div class="thumb">
                                                <span class="icon"><img src="assets/images/promotions.png" alt=""></span>
                                                Promotions
                                            </div>
                                        </div>
                                        <div>
                                            <div class="thumb">
                                                <span class="icon"><img src="assets/images/loyalty-program.png" alt=""></span>
                                                Programme de fidelite
                                            </div>
                                        </div>

                                        <div class="last-thumb">
                                            <div class="thumb">
                                                <span class="icon"><img src="assets/images/remboursement.png" alt=""></span>
                                                Garantie annulation
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-9 align-self-center">
                                    <ul class="nacc">
                                        <li class="active">
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-5 align-self-center">
                                                            <div class="left-text">
                                                                <h4>Nos agences de location </h4>
                                                                <p>
                                                                    Agence Rabat aeroport <br>
                                                                    Agence Marrakech aeroport <br>
                                                                    Agence Tanger aeroport <br>
                                                                    Agence Casablanca aeroport <br>
                                                                    Agence Fes aeroport <br>
                                                                    Agence Agadir aeroport <br>
                                                                    Agence Ourzazate aeroport <br>
                                                                    Agence Essaouira aeroport <br>
                                                                    Agence Nador aeroport <br>


                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-5 align-self-center">
                                                            <div class="left-text">
                                                                <h4> de voiture au Maroc</h4>
                                                                <p>
                                                                    Agence Oujda aeroport <br>
                                                                    Agence Taza <br>
                                                                    Agence Meknes <br>
                                                                    Agence Ifrane <br>
                                                                    Agence Azrou <br>
                                                                    Agence Kneitra <br>
                                                                    Agence gare ONCF Rabat <br>
                                                                    Agence gare ONCF Fes <br>
                                                                    Agence gare ONCF Casablanca <br>

                                                                </p>
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
                                                        <div class="col-lg-5 align-self-center">
                                                            <div class="left-text">
                                                                <h4>Réservez directement avec GetCarNow Maroc et payez
                                                                    toujours moins cher !</h4>
                                                                <p>
                                                                    5% de réduction supplémentaire sur TOUTES les
                                                                    voitures.
                                                                    <br>
                                                                    CODE PROMO : LIVE
                                                                </p>

                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7 align-self-center">
                                                            <div class="right-image">
                                                                <img src="./assets//images//reduction.jpg" alt="reduction">
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
                                                        <div class="col-lg-5 align-self-center">
                                                            <div class="left-text">
                                                                <h4>Programme de fidelite</h4>
                                                                <p>Gagnez des points a chaque location pour debloquer
                                                                    plusieurs privileges gratuits</p>
                                                                <div class="main-white-button"><a href="listing.html"><i class="fa fa-eye"></i> Discover More</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7 align-self-center">
                                                            <div class="right-image">
                                                                <img src="./assets/images/catrefidelite.jpeg" alt="Programme de fidelite">
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
                                                        <div class="col-lg-5 align-self-center">
                                                            <div class="left-text">
                                                                <h4>Garantie annulation</h4>
                                                                <p>faites-vous rembourser en cas de non collecte du
                                                                    vehicule
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7 align-self-center">
                                                            <div class="right-image">
                                                                <img src="assets/images/annulation.png" alt="">
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


    <div class="recent-listing">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Prix location voiture Maroc</h2>

                    </div>
                </div>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Categorie de Voiture</th>
                            <th scope="col">Basse Saision</th>
                            <th scope="col">Haute Saision</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                            <td scope="col">Compacte</td>
                            <td scope="col">14€ - 21€ / jour </td>
                            <td scope="col">22€ - 52€ / jour</td>
                        </tr>
                        <tr>

                            <td scope="col">SUV & 4x4 </td>
                            <td scope="col">18€ - 41€ / jour</td>
                            <td scope="col">42€ - 92€ / jour</td>
                        </tr>
                        <tr>

                            <td scope="col"> Familiale</td>
                            <td scope="col">24€ - 42€ / jour</td>
                            <td scope="col">43€ - 87€ / jour</td>
                        </tr>
                        <tr>

                            <td scope="col">Premium </td>
                            <td scope="col">41€ - 67€ / jour</td>
                            <td scope="col">68€ - 150€ / jour</td>
                        </tr>
                        <tr>
                            <td scope="col">Hybride</td>
                            <td scope="col">34$ - 45$ / jour</td>
                            <td scope="col">46€ - 54€ / jour</td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>


    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="about">
                        <div class="logo">
                            <img src="assets/images/black-logo.png" alt="Plot Listing">
                        </div>
                        <p>If you consider that <a rel="nofollow" href="https://templatemo.com/tm-564-plot-listing" target="_parent">Plot Listing template</a> is useful for your website, please <a rel="nofollow" href="https://www.paypal.me/templatemo" target="_blank">support us</a> a
                            little via PayPal.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="helpful-links">
                        <h4>Helpful Links</h4>
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
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
    <script>
        const dateDebutInput = document.getElementById('date-depart');
        const dateFinInput = document.getElementById('date-retour');

        // Mettre à jour le min de la date de début à la date d'aujourd'hui
        const today = new Date().toISOString().split('T')[0];

        dateDebutInput.min = today;

        // Mettre à jour le min de la date de fin à la date de début + 1 jours
        dateDebutInput.addEventListener('change', function() {
            const selectedDate = new Date(this.value);
            selectedDate.setDate(selectedDate.getDate() + 1);
            const minDateFin = selectedDate.toISOString().split('T')[0];
            dateFinInput.min = minDateFin;
        });
    </script>
</body>

</html>