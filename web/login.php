<?php
include("./assets/php/connection.php");
if (isset($_POST['login'])) {

    $cin = $_POST['cin'];
    $password = $_POST['password'];

    $stmt = $mysqli->prepare("SELECT * FROM `user` WHERE `cin` = '$cin' AND `password` = '$password' ;");

    $stmt->execute();

    $result = $stmt->get_result();


    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        session_start();
        $_SESSION['cin'] = $row['cin'];
        header("Location:profil.php");
    } else {
        echo "<script>alert('Cin or Passwor is wrong')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>

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
    <style>
        main {
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            background-image: url(./assets//images/backgroundimage1.jpg);
            position: relative;
            overflow: hidden;
        }

        span {
            color: white;
            font-weight: bold;
            text-shadow: 2px -3px #064579;

        }
    </style>

</head>

<body>
    <main>
        <div class="container col-xl-10 col-xxl-8 px-4 py-5">
            <div class="row align-items-center g-lg-5 py-5">
                <div class="col-md-10 mx-auto col-lg-5">
                    <form class="p-4 p-md-5 border rounded-3 bg-body-tertiary" method="post" action="">
                        <div class="form-floating mb-3">
                            <input type="text" name="cin" class="form-control" id="floatingInput" placeholder="A11111">
                            <label for="floatingInput">CINE</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Mot de passe</label>
                        </div>
                        <div class="checkbox mb-3">
                            <label>
                                <input type="checkbox" value="remember-me"> <span>Remember me</span>
                            </label>
                        </div>
                        <button class="w-100 btn btn-lg btn-light" name="login" type="submit">Login</button>
                        <hr class="my-4">
                    </form>
                </div>
            </div>
        </div>

    </main>

</body>

</html>