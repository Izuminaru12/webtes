<?php
    session_start(); // <-- TAMBAHKAN INI DI BARIS 1
    include "service/database.php";

    // (Tambahan) Jika pengguna sudah login, langsung lempar ke home
    if(isset($_SESSION["username"])){
        header("location: home.php");
        exit();
    }
    $register_message = "";
    $message_class = "";

    if(isset($_POST["register"])){
        $username = $_POST["username"];
        $password = $_POST["password"];
        
        // Hash password untuk keamanan
        $password_hash = password_hash($password, PASSWORD_BCRYPT);

        // Gunakan prepared statements untuk mencegah SQL Injection
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
        $stmt = $db->prepare($sql);
        $stmt->bind_param("ss", $username, $password_hash);
        
        if($stmt->execute()){
            $register_message = "Daftar akun berhasil, silahkan login";
            $message_class = "success-message";
        } else {
            // Cek jika username sudah ada
            if($db->errno == 1062){ // 1062 = Error duplicate entry
                $register_message = "Username sudah ada, silahkan gunakan username lain";
            } else {
                $register_message = "Daftar akun gagal: " . $db->error;
            }
            $message_class = "error-message";
        }
        $stmt->close();
    }
    $db->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php include "layout/header.php" ?>

    <main class="form-container">
        <h3>Daftar Akun</h3>
        <i class="<?= $message_class ?>"><?= $register_message ?></i>
        <form action="register.php" method="POST">
            <input type="text" placeholder="username" name="username" required/>
            
            <input type="password" placeholder="password" name="password" required/>
            
            <button type="submit" name="register">Daftar</button> 
        </form>
    </main>

    <?php include "layout/footer.html" ?>
</body>
</html>