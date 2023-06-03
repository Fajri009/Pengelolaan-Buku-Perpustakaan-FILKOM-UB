<?php
    require_once "../../config/koneksi.php";

    session_start();

    if (!isset($_SESSION['role'])) {
        header("Location: ../start/sign_in.php");
        exit();
    }

    if (isset($_POST['sign_in'])) {
        header("Location: ../start/logout.php");
        exit();
    }
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="form_buku.css">
    <title>Pengembalian Buku</title>
</head>
<body>
    <div class="navigation-bar">
        <?php include "../navbar/navigation_bar.php"; ?>
    </div>
    <div class="container">
        <h1>Formulir Pengembalian Buku</h1>
        <div class="input-group">
            <form method="POST">
                <div class="input-box">
                    <label for="nama_anggota">Nama Anggota :</label>
                    <input type="text" id="nama_anggota" name="nama_anggota" placeholder="Nama Lengkap">
                </div>
                
                <div class="input-box">
                    <label for="judul_buku">Judul Buku :</label>
                    <input type="text" id="judul_buku" name="judul_buku" placeholder="Nama Judul Buku">
                </div>

                <div class="input-box">
                    <label for="tanggal">Tanggal Pengembalian :</label>
                    <input type="date" id="tanggal" name="tanggal_Pengembalian">
                </div>

                <div class="input-box">
                    <label for="kondisi">Kondisi Buku :</label>
                    <select id="kondisi" name="kondisi_buku">
                        <option value="" disabled selected>Pilih salah satu</option>
                        <option value="baik">Baik</option>
                        <option value="buruk">Buruk</option>
                    </select>
                </div>

                <button type="submit" name="submit" class="submit">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>