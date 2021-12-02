<?php 
    $server = "10.0.0.58";
    $user = "admin";
    $password = "Erlitadesy20_";
    $nama_database = "dbperpus";

    $db = mysqli_connect( $server, $user, $password, $nama_database);

    if (!$db) {
        die ("Gagal Terhubung dengan database: " . mysqli_connect_error());
    }
?>