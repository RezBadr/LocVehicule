<?php
include("connection.php");

if (function_exists("afficher_vehicule") === FALSE) {
    function afficher_vechicule()
    {
        if (require("connection.php")) {
            $stmt = $mysqli->prepare("SELECT * FROM vehicle WHERE availabilityStatus = true GROUP BY fuelType,modele ORDER BY IDvehicule;");
            $stmt->execute();

            $result = $stmt->get_result();

            return $result;
        }
    }
}
if (function_exists("ajouter_reservation") === FALSE) {
    function ajouter_reservation($idvehicule, $date_depart, $agence, $date_retour, $nbrJrs, $TTC)
    {
        if (require("connection.php")) {
            $stmt = $mysqli->prepare("INSERT INTO `reservation` (`IDvehicule`, `DateDepart`, `agence`, `DateRetour`, `nombreJours`, `MontantTotal`) VALUES ( ? , ? , ? , ? , ? , ? ) ");
            $stmt->bind_param("isssii", $idvehicule, $date_depart, $agence, $date_retour, $nbrJrs, $TTC);
            $stmt->execute();
            $last_id = $stmt->insert_id;
            echo "New record created successfully. Last inserted ID is: " . $last_id;
        }
    }
}
