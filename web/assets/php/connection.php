<?php 
$servername = "localhost";
$username = "root";
$password = "";
$database = "locationdb";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$mysqli = new mysqli($servername,$username,$password,$database);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
