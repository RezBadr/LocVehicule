<?php
include("./assets/php/commandes.php");
include("./assets/php/connection.php");

session_start();

if (!isset($_SESSION['cin'])) {
    header("location:./login.php");
}
?>
<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.115.4">
    <title>Vehicules</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/dashboard/">



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">


    <!-- Custom styles for this template -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">

</head>

<body>







    <header class="p-3 mb-3 border-bottom">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
                    <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                        <use xlink:href="#bootstrap" />
                    </svg>
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="profil.php" class="nav-link px-2 link-body-emphasis">Reservations</a></li>
                    <li><a href="vehicule.php" class="nav-link px-2 link-secondary">Vehicules</a></li>
                    <li><a href="ajouter_vehicule.php" class="nav-link px-2 link-body-emphasis">Ajouter Vehicules</a>
                    </li>

                </ul>


                <div class="dropdown text-end">
                    <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle"
                        data-bs-toggle="dropdown" aria-expanded="false">

                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                            class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                            <path fill-rule="evenodd"
                                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                        </svg>
                    </a>
                    <ul class="dropdown-menu text-small">
                        <li><a class="dropdown-item" href="deconnecter.php">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div <main>
            <h2>Vehicules</h2>
            <div class="table-responsive small">
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th scope="col">immatriculation</th>
                            <th scope="col">marque </th>
                            <th scope="col">modele </th>
                            <th scope="col">categorie </th>
                            <th scope="col">dailyPrice </th>
                            <th scope="col">availabilityStatus</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $result = afficher_vechicule2();
                        while (null !== ($row = mysqli_fetch_assoc($result))) { ?>
                        <tr>
                            <td><?php echo $row['immatriculation']; ?></td>
                            <td><?php echo $row['marque']; ?></td>
                            <td><?php echo $row['modele']; ?></td>
                            <td><?php echo $row['categorie']; ?></td>
                            <td><?php echo $row['dailyPrice']; ?> MAD</td>
                            <td><?php
                                    if ($row['availabilityStatus']) {
                                        echo "disponible";
                                    } else {
                                        echo 'non disponible';
                                    } ?>

                            </td>


                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            </main>
        </div>
    </div>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js"
        integrity="sha384-gdQErvCNWvHQZj6XZM0dNsAoY4v+j5P1XDpNkcM3HJG1Yx04ecqIHk7+4VBOCHOG" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <script src="dashboard.js"></script>
</body>

</html>