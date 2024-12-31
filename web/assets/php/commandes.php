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
if (function_exists("afficher_vehicule2") === FALSE) {
    function afficher_vechicule2()
    {
        if (require("connection.php")) {
            $stmt = $mysqli->prepare("SELECT * FROM vehicle  GROUP BY fuelType,modele ORDER BY IDvehicule;");
            $stmt->execute();

            $result = $stmt->get_result();

            return $result;
        }
    }
}
if (function_exists("rechecher_vehicule") === FALSE) {
    function rechercher_vechicule($idveh)
    {
        if (require("connection.php")) {
            $stmt = $mysqli->prepare("SELECT * FROM vehicle WHERE IDvehicule = $idveh");
            $stmt->execute();

            $result = $stmt->get_result();

            return $result;
        }
    }
}
if (function_exists("rechecher_vehicule_categorie") === FALSE) {
    function rechercher_vechicule_categorie($categorie)
    {
        if (require("connection.php")) {
            $stmt = $mysqli->prepare("SELECT * FROM vehicle WHERE  categorie = ? GROUP BY fuelType,modele ORDER BY IDvehicule;");
            $stmt->bind_param("s", $categorie);
            $stmt->execute();
            $result = $stmt->get_result();
            return $result;
        }
    }
}
if (function_exists("ajouter_date_agence") === FALSE) {
    function ajouter_dates_agences($date_depart, $agenceDepart, $date_retour, $agenceRetour, $nbrJrs)
    {
        if (require("connection.php")) {
            $stmt = $mysqli->prepare("INSERT INTO `reservation` (`DateDepart`, `AgenceDepart`, `DateRetour`,`AgenceRetour`,`nombreJours`) VALUES (? , ? , ? , ? , ?)");
            $stmt->bind_param("ssssi", $date_depart, $agenceDepart, $date_retour, $agenceRetour, $nbrJrs);
            $stmt->execute();
            $last_id =  $stmt->insert_id;
            return $last_id;
        }
    }
}
if (function_exists("afficher_date_agence") === FALSE) {
    function afficher_date_agence($idreservation)
    {
        if (require("connection.php")) {
            $req = $mysqli->prepare("SELECT * FROM reservation WHERE IDreservation = ?");

            $req->bind_param("i", $idreservation);
            $req->execute();
            $resultat = $req->get_result()->fetch_assoc();
            return $resultat;
        }
    }
}
if (function_exists("afficher_reservation") === FALSE) {
    function afficher_reservation()
    {
        if (require("connection.php")) {
            $req = $mysqli->prepare("SELECT * FROM reservation");
            $req->execute();
            $resultat = $req->get_result();
            return $resultat;
        }
    }
}
if (function_exists("ajouter_reservation") === FALSE) {
    function ajouter_reservation($idveh, $IDutilisateur, $TTC, $idreservation)
    {
        if (require("connection.php")) {
            $stmt = $mysqli->prepare("UPDATE reservation SET  IDvehicule = ? , IDutilisateur = ? ,MontantTotal = ? WHERE IDreservation = ?");
            $stmt->bind_param("iidi", $idveh, $IDutilisateur, $TTC, $idreservation);
            $stmt->execute();
        }
    }
}
if (function_exists("ajouter_client") === FALSE) {
    function ajouter_client($cine, $prenom, $nom, $email, $tel, $adresse, $ville, $codepostal)
    {
        if (require("connection.php")) {
            $stmt = $mysqli->prepare("INSERT INTO user(cin,Prenom,Nom,email,NumTel,adresse,ville,codePostal,typeUtilisateur) VALUES(?,?,?,?,?,?,?,?,'client');");
            $stmt->bind_param("sssssssi", $cine, $prenom, $nom, $email, $tel, $adresse, $ville, $codepostal);
            $stmt->execute();
            $last_id = $stmt->insert_id;
            return $last_id;
        }
    }
}
if (function_exists("rechercher_utilisateur") === FALSE) {
    function rechercher_utilisateur($id)
    {
        if (require('connection.php')) {
            $stmt = $mysqli->prepare("SELECT * FROM user WHERE IDutilisateur=$id;");
            $stmt->execute();
            $rslt = $stmt->get_result()->fetch_assoc();
            return $rslt;
        }
    }
}

if (function_exists("ajouter_vehicule") === FALSE) {
    function ajouter_vehicule($mar, $mod, $img, $cat, $car, $prix, $imm)
    {
        if (require('connection.php')) {
            $st = 1;
            $stmt = $mysqli->prepare("INSERT INTO `vehicle` (`marque`, `modele`,`image`, `categorie`, `fuelType`, `dailyPrice`, `availabilityStatus`, `immatriculation`) VALUES (?, ?, ?, ?, ?, ?, ?, ?);");
            $stmt->bind_param("ssbssdis", $mar, $mod, $img, $cat, $car,  $prix, $st, $imm);
            $stmt->execute();
            echo "<script>alert('Votre vehicule a été bien enregistré')</script>";
        } else {
            echo "erreur";
        }
    }
}
