<?php

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database_name = "buku_tamu";

    $db = mysqli_connect($hostname, $username, $password, $database_name);
    if (!$db) {
            // Hentikan eksekusi dan tampilkan pesan error yang jelas
            die("Koneksi Error: " . mysqli_connect_error());
        }
    
?>