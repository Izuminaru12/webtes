<?php
    // Mulai session untuk memeriksa status login
    session_start();

    // JIKA PENGGUNA BELUM LOGIN
    if(!isset($_SESSION["username"])){
        // Alihkan (tendang) mereka ke halaman login
        header("location: login.php");
        exit(); // Hentikan eksekusi sisa halaman
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Pengguna</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php include "layout/header.php" ?>

    <main class="form-container">
        
        <form style="text-align: center;">
            <h3>Profile Saya</h3>
            <p>Selamat datang kembali di halaman profile Anda.</p>
            
            <hr>
            
            <p style="font-size: 1.2em; font-weight: bold;">
                Username Anda: <?php echo $_SESSION["username"]; ?>
            </p>
            
            <a href="logout.php" class="read-more-button" style="background-color: #ff3b30;">Logout</a>
        </form>
        
    </main>

    <?php include "layout/footer.html" ?>
</body>
</html>