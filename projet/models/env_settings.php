<?php

// if we are in the local environment
$host = "localhost";
$dbname = "smarttech";
$user = "root";
$pwd = "";

// if we are on the server
if (file_exists("/var/www/")) {
    $host = "localhost";
    $dbname = "smarttech";
    $login = "nom";
    $mot_de_passe = "Mdp";
}

?>