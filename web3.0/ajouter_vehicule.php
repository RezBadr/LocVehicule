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
                    <li><a href="vehicule.php" class="nav-link px-2 link-body-emphasis">Vehicules</a></li>
                    <li><a href="ajouter_vehicule.php" class="nav-link px-2 link-secondary">Ajouter Vehicules</a>
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
    <?php
    if (isset($_POST['submit']) && isset($_FILES['img'])) {
        $servername = "localhost";
        $username = "root";
        $password = "";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=locationdb", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }

        $marque = $_POST['marque'];

        $modele = $_POST["modele"];

        $cat = $_POST['categorie'];

        $imm = $_POST['imm'];

        $carb = $_POST['carburant'];

        $image = fopen($_FILES['img']['tmp_name'], 'rb');

        $prix = $_POST['prix'];

        $disp = 1;

        $query = "INSERT INTO `vehicle` (`marque`, `modele`,`image`, `categorie`, `fuelType`, `dailyPrice`, `availabilityStatus`, `immatriculation`) VALUES (:marque,:modele,:img,:categorie,:carburant,:prix,:disp,:imm);";

        $step = $conn->prepare($query);

        $step->bindParam(':marque', $marque, PDO::PARAM_STR, 50);
        $step->bindParam(':modele', $modele, PDO::PARAM_STR, 50);
        $step->bindParam(':categorie', $cat, PDO::PARAM_STR, 50);
        $step->bindParam(':carburant', $carb, PDO::PARAM_STR, 50);
        $step->bindParam(':imm', $imm, PDO::PARAM_STR, 50);
        $step->bindParam(':disp', $disp, PDO::PARAM_BOOL);
        $step->bindParam(':prix', $prix, PDO::PARAM_STR, 10);
        $step->bindParam(':img', $image, PDO::PARAM_LOB);

        if ($step->execute()) {
            echo "<script>alert('Votre vehicule a été bien enregistré')</script>";
        } else {
            die("<h2 style='color:#ff4d39'>Une erreur est survenue lors de l'enregistrement du véhicule");
        }
    }
    ?>

    <div class="container">
        <main>
            <h2>Ajouter un vehicule</h2>
            <form class="row g-3" method="post" action="" enctype="multipart/form-data">
                <div class="col-md-6">
                    <label for="inputState" class="form-label">Marque</label>
                    <select id="inputState" name="marque" class="form-select">
                        <option selected>Mercedes</option>
                        <option>BMW</option>
                        <option>Audi</option>
                        <option>Toyota</option>
                        <option>Volkswagen</option>
                        <option>Dacia</option>
                        <option>Citroën</option>
                        <option>Renault</option>
                        <option>Peugeot</option>
                        <option>Hyundai</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="inputState" class="form-label">Categorie</label>
                    <select id="inputState" name="categorie" class="form-select">
                        <option selected>Compacte</option>
                        <option>Familiale</option>
                        <option>Compacte</option>
                        <option>Premium</option>
                        <option>SUV</option>
                        <option>4x4</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Modele</label>
                    <input type="text" name="modele" class="form-control" id="inputEmail4">
                </div>
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Immatriculation </label>
                    <input type="text" name="imm" class="form-control" id="inputEmail4">
                </div>
                <div class="col-md-4">
                    <label for="inputPassword4" class="form-label">Image</label>
                    <input type="file" name="img" class="form-control" placeholder="">
                </div>
                <div class="col-md-4">
                    <label for="inputState" class="form-label">Carburant</label>
                    <select id="inputState" name="carburant" class="form-select">
                        <option selected>Diesel</option>
                        <option>Essence</option>
                        <option>Hybrid</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="inputPassword4" class="form-label">Prix le locartion par jour (MAD)</label>
                    <input type="number" name="prix" class="form-control" placeholder="">
                </div>

                <div class="justify-content-center">
                    <button type="submit" name="submit" class="btn btn-primary">Ajouter</button>
                </div>
            </form>
        </main>

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