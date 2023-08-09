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
if (function_exists("ajouter_date_agence") === FALSE) {
    function ajouter_date_agence($date_depart, $agence, $date_retour, $nbrJrs)
    {
        if (require("connection.php")) {
            $stmt = $mysqli->prepare("INSERT INTO `reservation` (`DateDepart`, `agence`, `DateRetour`,`nombreJours`) VALUES (? , ? , ? , ?)");
            $stmt->bind_param("sssi", $date_depart, $agence, $date_retour, $nbrJrs);
            $stmt->execute();
            $last_id =  $stmt->insert_id;
            return $last_id;
            $stmt->close();
        }
    }
}
if (function_exists("afficher_date_agence") === FALSE) {
    function afficher_reservation($idreservation)
    {
        if (require("connection.php")) {
            $req = $mysqli->prepare("SELECT * FROM reservation WHERE IDreservation = ?");

            $req->bind_param("i", $idreservation);
            $req->execute();
            $resultat = $req->get_result()->fetch_assoc();
            return $resultat;
            $req->close();
        }
    }
}
if (function_exists("ajouter_reservation") === FALSE) {
    function ajouter_reservation($idveh, $TTC, $idreservation)
    {
        if (require("connection.php")) {
            $stmt = $mysqli->prepare("UPDATE reservation SET  IDvehicule = ? , MontantTotal = ? WHERE IDreservation = ?");
            $stmt->bind_param("idi", $idveh, $TTC, $idreservation);
            $stmt->execute();
        }
    }
}
