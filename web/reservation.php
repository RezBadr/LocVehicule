<?php
include("./assets/php/connection.php");
include("./assets/php/commandes.php");
$link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$idreservation = explode("/?", $link)[1];

$resultat = afficher_date_agence($idreservation);
$nbr_jour = $resultat['nombreJours'];
$dateDepart = $resultat['DateDepart'];
$agenceDepart = $resultat['AgenceDepart'];
$dateRetour = $resultat['DateRetour'];
$agenceRetour = $resultat['AgenceRetour'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <title>Réservation - GetCarNow</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            width: 100%;
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        .btn-bd-primary {
            --bd-violet-bg: #712cf9;
            --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

            --bs-btn-font-weight: 600;
            --bs-btn-color: var(--bs-white);
            --bs-btn-bg: var(--bd-violet-bg);
            --bs-btn-border-color: var(--bd-violet-bg);
            --bs-btn-hover-color: var(--bs-white);
            --bs-btn-hover-bg: #6528e0;
            --bs-btn-hover-border-color: #6528e0;
            --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
            --bs-btn-active-color: var(--bs-btn-hover-color);
            --bs-btn-active-bg: #5a23c8;
            --bs-btn-active-border-color: #5a23c8;
        }

        .bd-mode-toggle {
            z-index: 1500;
        }

        header .col {
            border: #8d99af 1px solid
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
                        <i class="bi bi-2-circle-fill d-flex align-items-center"></i>
                        <h3 class="text-center">VEHICULE</h3>
                    </div>
                </div>
                <div class="col">
                    <div class="d-flex justify-content-evenly">
                        <i class="bi bi-3-circle d-flex align-items-center"></i>
                        <h3 class="text-center">RÉSUMÉ</h3>
                    </div>
                </div>

            </div>
        </div>
    </header>

    <main>

        <h1 class="text-center">Choisissez votre véhicule</h1>
        <br>
        <div class="album py-5 bg-body-tertiary">
            <div class="container">


                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                    <?php
                    $result = afficher_vechicule();
                    foreach ($result as $vehicule) :
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
                                <img src="data:image/jpeg;base64,<?php echo $image; ?>" alt="Image" class="bd-placeholder-img card-img-top" width="255" height="225">
                                <div class="card-body">
                                    <h4><?php echo  $marque . '  ' . $modele; ?></h4>
                                    <p><?php echo  $categorie . ' | ' . $modele . ' | ' . $fuelType; ?></p>
                                    <span class="text-body-secondary"><?php echo $prix; ?> MAD / Jour</span>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group" role="group" aria-label="Default button group">
                                            <button type="submit" name="reserver" class="btn btn-sm btn-outline-secondary" onclick="location.href='../resume.php/+<?php echo $idreservation; ?>+<?php echo $idvehicule; ?>'">Réserver
                                                ce véhicule</button>
                                            <button type=" button" class="btn btn-sm btn-outline-secondary" onclick="MontantTotal(<?php echo $nbr_jour; ?>,<?php echo $prix; ?>)">Voir
                                                le montant total</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php endforeach; ?>
                </div>


            </div>
        </div>
    </main>
    <script>
        function MontantTotal(nbrjrs, prix) {

            let TTC = nbrjrs * prix;
            let TVA = TTC * 0.2;
            let HT = TTC - TVA;
            alert("Nombre des jour :\t" + nbrjrs + " jours\nPrix par jour :\t" + prix + "MAD\nPrix HT:\t" + HT +
                "MAD\nTVA (20%) :\t" + TVA +
                "MAD\nTTC :\t" + TTC + "MAD");

        }
    </script>
    <!-- Le reste du contenu de la page de réservation ici -->

</body>


</html>