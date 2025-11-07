<?php
    session_start();

    if(!isset($_SESSION["username"])){
        header("location: login.php");
        exit(); 
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Novel</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php include "layout/header.php" ?>

    <section class="light-novel-section">
        <h2>Selamat Datang, <?php echo htmlspecialchars($_SESSION["username"]); ?>!</h2>
        <h3>Light Novel Terbaru</h3>
        
        <div class="light-novel-grid">
            
            <div class="light-novel-card">
                <img src="/cover-light-novel/Novel1.jpg" alt="Light Novel Cover 1">
                <h4>Eighty Six</h4>
                <p>Kisah epik tentang seorang pahlawan yang memulai petualangan di dunia fantasi.</p> 
                <a href="light_novel_detail.php" class="read-more-button">Baca Selengkapnya</a>
            </div>
            <div class="light-novel-card">
                <img src="https://via.placeholder.com/200x300/e0e0e0/333333?text=LN+Cover+2" alt="Light Novel Cover 2">
                <h4>Rahasia Akademi Sihir</h4>
                <p>Seorang siswa biasa menemukan rahasia gelap di balik akademi sihir bergengsi.</p>
                <a href="light_novel_detail.php" class="read-more-button">Baca Selengkapnya</a>
            </div>
            <div class="light-novel-card">
                <img src="https://via.placeholder.com/200x300/d0d0d0/333333?text=LN+Cover+3" alt="Light Novel Cover 3">
                <h4>Reinkarnasi Raja Iblis</h4>
                <p>Raja iblis yang kuat bereinkarnasi sebagai manusia biasa di dunia modern.</p>
                <a href="light_novel_detail.php" class="read-more-button">Baca Selengkapnya</a>
            </div>
            <div class="light-novel-card">
                <img src="https://via.placeholder.com/200x300/c0c0c0/333333?text=LN+Cover+4" alt="Light Novel Cover 4">
                <h4>Petualangan Gadis Pedang</h4>
                <p>Seorang gadis muda dengan pedang legendaris menjelajahi benua yang luas.</p>
                <a href="light_novel_detail.php" class="read-more-button">Baca Selengkapnya</a>
            </div>
            <div class="light-novel-card">
                <img src="https://via.placeholder.com/200x300/b0b0b0/333333?text=LN+Cover+5" alt="Light Novel Cover 5">
                <h4>Penyihir Abadi</h4>
                <p>Kisah seorang penyihir yang mencari keabadian dan menemukan takdir yang tak terduga.</p>
                <a href="light_novel_detail.php" class="read-more-button">Baca Selengkapnya</a>
            </div>

            <div class="light-novel-card">
                <img src="https://via.placeholder.com/200x300/a0a0a0/333333?text=LN+Cover+6" alt="Light Novel Cover 6">
                <h4>Guild Petualang</h4>
                <p>Sekelompok petualang pemula berjuang untuk menjadi yang terkuat di kerajaan.</p> 
                <a href="light_novel_detail.php" class="read-more-button">Baca Selengkapnya</a>
            </div>
            <div class="light-novel-card">
                <img src="https://via.placeholder.com/200x300/909090/ffffff?text=LN+Cover+7" alt="Light Novel Cover 7">
                <h4>Langit Tak Terbatas</h4>
                <p>Seorang pilot muda mengarungi angkasa luar untuk melindungi galaksi.</p>
                <a href="light_novel_detail.php" class="read-more-button">Baca Selengkapnya</a>
            </div>
            <div class="light-novel-card">
                <img src="https://via.placeholder.com/200x300/808080/ffffff?text=LN+Cover+8" alt="Light Novel Cover 8">
                <h4>Buku Resep Dunia Lain</h4>
                <p>Seorang koki terlempar ke dunia fantasi dan membuka restoran dengan resep modern.</p>
                <a href="light_novel_detail.php" class="read-more-button">Baca Selengkapnya</a>
            </div>
            <div class="light-novel-card">
                <img src="https://via.placeholder.com/200x300/707070/ffffff?text=LN+Cover+9" alt="Light Novel Cover 9">
                <h4>Detektif Ibukota</h4>
                <p>Memecahkan misteri kelam di ibukota kerajaan yang penuh intrik politik.</p>
                <a href="light_novel_detail.php" class="read-more-button">Baca Selengkapnya</a>
            </div>
            <div class="light-novel-card">
                <img src="https://via.placeholder.com/200x300/606060/ffffff?text=LN+Cover+10" alt="Light Novel Cover 10">
                <h4>Chronicles of the Void</h4>
                <p>Perjalanan menembus kekosongan untuk menemukan artefak kuno yang hilang.</p>
                <a href="light_novel_detail.php" class="read-more-button">Baca Selengkapnya</a>
            </div>

        </div>
    </section>

    <?php include "layout/footer.html" ?>
</body> 
</html> 