<?php
    require_once "../../../config/koneksi.php";

    session_start();

    if (!isset($_SESSION['role'])) {
        header("Location: ../../start/sign_in.php");
        exit();
    }

    if (isset($_POST['logout'])) {
        header("Location: ../../start/logout.php");
        exit();
    }
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="profil.css">
    <title>Home Page</title>
</head>
<body>
    <div class="navigation-bar">
        <?php include "../../navbar/navigation_bar.php"; ?>
    </div>
    <div class="container">
        <div class="login-box">
            <form method="POST">
                <img src="../../../asset/profil.svg" alt="profil" class="profil">
                <h2>Profil Saya</h2>
                <p>Nama Lengkap : Administor</p>
                <p>Email : admin@ub.ac.id</p>
                <p>Password : admin123</p>
                <button type="submit" name="logout" class="logout">Logout</button>
            </form>
        </div>
    </div>
</body>
</html>