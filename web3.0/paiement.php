<!DOCTYPE html>
<?php
include("./assets/php/commandes.php");
$link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$idreservation = explode("/?", $link)[1];
$resultat = afficher_reservation($idreservation);
$iduser = $resultat['IDutilisateur'];

$user = rechercher_utilisateur($iduser);
$add = $user["adresse"];
$vil = $user["codePostal"];
$cod = $user["ville"];

$fullname = $user['Prenom'] . " " . $user['Nom'];
$TTC = $resultat['MontantTotal'];
$TTC = $TTC / 10;


?>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <script
        src="https://www.paypal.com/sdk/js?client-id=AT9JgVDSPUEgpGZJJGwKeYY9QIKZjF6MnHEMPTnBlDwzRqSaAkZygPKL6lCgQie9j5QivQYnw3Olv8TK&components=buttons">
    </script>
</head>

<body>

    <div id="paypal-button-container" style="max-width:1000px;"></div>

    <script>
    paypal.Buttons({
        style: {
            disableMaxWidth: true,

            layout: 'vertical',

            color: 'blue',

            shape: 'rect',

            label: 'paypal'
        },
        createOrder: function(data, actions) {
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        value: <?php echo $TTC; ?>
                    },


                }],
            });
        },
        onApprove: function(data, actions) {
            // This function captures the funds from the transaction.
            return actions.order.capture().then(function(details) {
                alert("Transaction OK:" + details.payer.name.given_name);
            })
        },
        onError: function(err) {
            console.log('Error:', err);

        }
    }).render('#paypal-button-container');
    </script>

</body>


</html>