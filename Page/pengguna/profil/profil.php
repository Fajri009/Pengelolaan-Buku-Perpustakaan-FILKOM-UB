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
                <p>Kode Anggota : 412413423</p>
                <p>NIM : 215150200111037</p>
                <p>Nama Lengkap : Muhammad Richo Abadinata</p>
                <p>Email : richo@ub.ac.id</p>
                <p>Password : 12345678</p>
                <p>Alamat : Desa Mojolangu, Kec. Lowokwaru, Malang</p>
                <button type="submit" name="logout" class="logout">Logout</button>
            </form>
        </div>
    </div>
</body>
</html>