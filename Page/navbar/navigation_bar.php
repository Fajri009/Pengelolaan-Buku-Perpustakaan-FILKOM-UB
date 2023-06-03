<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../navbar/navigation_bar.css">
    <title>Navigation Bar</title>
</head>
<body>
    <div class="navbar">
        <div class="logo">
            <img src="../../asset/logo_perpus.svg" alt="Logo Perpustakaan" class="logo">
        </div>
        <p class="perpus">Perpustakaan</p>
        <div class="nav_links">
            <a href="../home/homepage.php">Beranda</a>
            <?php if ($_SESSION['role'] === 'Admin') { ?>
                <a href="../koleksi/koleksi.php">Koleksi Buku</a>
                <a href="../form/peminjaman.php">Peminjaman Buku</a>
                <a href="../form/pengembalian.php">Pengembalian Buku</a>
            <?php } ?>
            <?php if ($_SESSION['role'] === 'Pengguna') { ?>
                <a href="pengumuman.php">Pengumuman</a>
                <a href="data_buku.php">Data Buku</a>
                <a href="data_anggota.php">Data Anggota</a>
                <a href="data_peminjaman.php">Data Peminjaman</a>
            <?php } ?>
        </div>
        <div class="user_profile">
            <a href="../profil/profil.php"><img src="../../asset/profil.svg" alt="Profil" class="user_profile"></a>
        </div>
    </div>
</body>
</html>