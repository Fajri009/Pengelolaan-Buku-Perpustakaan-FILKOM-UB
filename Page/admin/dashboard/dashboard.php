<?php
    require_once "../../../config/koneksi.php";

    session_start();

    if (!isset($_SESSION['role'])) {
        header("Location: ../..start/sign_in.php");
        exit();
    }

    if (isset($_POST['sign_in'])) {
        header("Location: start/logout.php");
        exit();
    }
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="dashboard.css">
    <title>Dashboard Admin</title>
</head>
<body>
    <?php include "../../navbar/navigation_bar.php"; ?>
    <div class="container">
        <a href="../data/data_buku.php" class="btn btn-buku">
            <img src="../../../asset/dashboard-logo/buku.svg" alt="logo-buku" class="logo-buku">
            <div style="margin-top: 24px;">Buku</div>
        </a>
        <a href="../data/data_anggota.php" class="btn btn-anggota">
            <img src="../../../asset/dashboard-logo/anggota.svg" alt="logo-anggota" class="logo-anggota">
            <div>Anggota</div>
        </a>
        <a href="../data/data_peminjaman.php" class="btn btn-peminjaman">
            <img src="../../../asset/dashboard-logo/anggota.svg" alt="logo-peminjaman" class="logo-peminjaman">
            <div>Peminjaman</div>
        </a>
    </div>
    <div class="footer">
        <img src="../../../asset/logo_perpus.svg" alt="logo-perpus" class="logo-perpus">
        <p style="font-weight: bold">Perpustakaan Digital Filkom</p>
        <p style="margin-top:-8px;">Jl. Veteran, Ketawanggede, Lowokwaru, Kota Malang, Jawa Timur, Indonesia - 65145</p>
    </div>
</body>
</html>