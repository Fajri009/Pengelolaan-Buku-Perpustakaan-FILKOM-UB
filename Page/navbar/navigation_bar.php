<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="Page/navbar/navigation_bar.css">
    <title>Navigation Bar</title>
</head>
<body>
    <div class="navbar">
        <div class="logo">
            <img src="asset/logo_perpus.svg" alt="Logo Perpustakaan" class="logo">
        </div>
        <p class="perpus">Perpustakaan</p>
        <div class="nav_links">
            <?php if ($_SESSION['role'] === 'Admin') { ?>
                <a href="../../admin/dashboard/dashboard.php">Beranda</a>
                <a href="../../admin/data/data_buku.php">Data Buku</a>
                <a href="../../admin/data/data_anggota.php">Data Anggota</a>
                <a href="../../admin/data/data_peminjaman.php">Data Peminjaman</a>
            <?php } ?>
            <?php if ($_SESSION['role'] === 'Pengguna') { ?>
                <a href="../../pengguna/home/homepage.php">Beranda</a>
                <a href="../../pengguna/koleksi/koleksi.php">Koleksi Buku</a>
                <a href="../../pengguna/form/peminjaman.php">Peminjaman Buku</a>
                <a href="../../pengguna/form/pengembalian.php">Pengembalian Buku</a>
                <a href="../../pengguna/riwayat/riwayat.php">Riwayat</a>
            <?php } ?>
        </div>
        <?php if ($_SESSION['role'] === 'Admin') { ?>
            <div class="user_profile">
                <a href="../../admin/profil/profil.php"><img src="asset/profil.svg" alt="Profil" class="user_profile"></a>
            </div>
        <?php } ?>
        <?php if ($_SESSION['role'] === 'Pengguna') { ?>
            <div class="user_profile">
                <a href="../../pengguna/profil/profil.php"><img src="asset/profil.svg" alt="Profil" class="user_profile"></a>
            </div>
        <?php } ?>
    </div>
</body>
</html>