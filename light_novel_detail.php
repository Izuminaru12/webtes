<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Light Novel</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php include "layout/header.php" ?>

    <main class="light-novel-detail-page">
        <div class="novel-header">
            <img src="Novel1.jpg" alt="Novel Cover" class="novel-cover">
            <div class="novel-info">
                <h1>Judul Light Novel Contoh</h1>
                <p class="novel-author">Oleh: Penulis Fiksi</p>
                <p class="novel-genre">Genre: Fantasi, Petualangan, Isekai</p>
                <p class="novel-status">Status: Ongoing</p>
                <button class="read-now-button">Baca Sekarang</button>
            </div>
        </div>

        <div class="novel-description">
            <h3>Sinopsis</h3>
            <p>Ini adalah sinopsis singkat dari Light Novel Contoh. Kisah ini mengikuti seorang protagonis yang secara tak terduga dipindahkan ke dunia lain yang penuh dengan sihir dan makhluk fantastis. Dengan kekuatan yang baru ditemukan dan tekad yang kuat, ia harus menavigasi dunia yang berbahaya ini, bertemu teman dan musuh, serta mengungkap misteri kuno yang mengancam keberadaan dunia.</p>
            <p>Petualangan dimulai ketika ia menemukan artefak misterius yang memberinya kemampuan unik, tetapi juga menarik perhatian kekuatan gelap. Bisakah ia melindungi dunia baru ini dan kembali ke rumah, atau akankah ia menemukan takdirnya di antara bintang-bintang?</p>
        </div>

        <div class="novel-chapters">
            <h3>Daftar Chapter</h3>
            <ul>
                <li><a href="chapters/chapter_content.php">Chapter 1: Awal Mula Petualangan</a></li>
                <li><a href="#">Chapter 2: Pertemuan Tak Terduga</a></li>
                <li><a href="#">Chapter 3: Kekuatan yang Bangkit</a></li>
            </ul>
        </div>
    </main>
    
    <?php include "layout/footer.html" ?>
</body>
</html>