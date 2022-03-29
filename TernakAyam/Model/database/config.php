<?php
    $database = "localhost";
    $dbname = "database_ternak";
    $db_user = "root";
    $db_password = "";

    $mysqli = mysqli_connect($database,$db_user,$db_password,$dbname);
    
    if ($mysqli->connect_error) {
        die('Koneksi Database Gagal : '.$mysqli->connect_error);
    }
?>