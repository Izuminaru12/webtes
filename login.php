<?php
    session_start(); // <-- TAMBAHKAN INI DI BARIS 1
    include "service/database.php";
    
    // (Tambahan) Jika pengguna sudah login, langsung lempar ke home
    if(isset($_SESSION["username"])){
        header("location: home.php");
        exit();
    }
    
    $login_message = "";
    $message_class = "";

    if(isset($_POST["login"])){
        $username = $_POST["username"];
        $password = $_POST["password"];
        
        // Gunakan prepared statements
        $sql = "SELECT * FROM users WHERE username = ?";
        $stmt = $db->prepare($sql);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if($result->num_rows > 0){
            $data = $result->fetch_assoc();
            
            // Verifikasi password yang sudah di-hash
            if(password_verify($password, $data["password"])){
                // Password benar, simpan data ke session
                $_SESSION["username"] = $data["username"];
                // Anda mungkin ingin menyimpan ID pengguna juga
                // $_SESSION["user_id"] = $data["id"]; 
                
                header("location: home.php");
                exit();
            } else {
                // Password salah
                $login_message = "Password salah";
                $message_class = "error-message";
            }
        }
        else{
            // Username tidak ditemukan
            $login_message = "Username tidak ditemukan";
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
        <h3>Login</h3>
        <i class="<?= $message_class ?>"><?= $login_message ?></i>
        <form action="login.php" method="POST">
            <input type="text" placeholder="username" name="username" required/>
            <input type="password" placeholder="password" name="password" required/>
            <button type="submit" name="login">Login</button>
        </form>
    </main>

    <?php include "layout/footer.html" ?>
</body>
</html>