<?php
    require_once "../../../config/koneksi.php";

    session_start();

    if (!isset($_SESSION['role'])) {
        header("Locaiton: ../../start/sign_in.php");
        exit();
    }
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="data.css">
    <title>Data Buku Perpustakaan</title>
    <style>
        th:nth-child(1), td:nth-child(1) {
            width: 10px;
        }
        th:nth-child(4), td:nth-child(4) {
            width: 100px;
        }
        th:nth-child(5), td:nth-child(5) {
            width: 100px;
        }
        th:nth-child(6), td:nth-child(6) {
            width: 120px;
        }
        th:nth-child(7), td:nth-child(7) {
            width: 110px;
        }
        th:nth-child(8), td:nth-child(8) {
            width: 100px;
        }
        th:nth-child(9), td:nth-child(9) {
            width: 200px;
        }
    </style>
</head>
<body>
    <div class="navigation-bar">
        <?php include "../../navbar/navigation_bar.php"; ?>
    </div>
    <div class="container">
        <form method="POST">
            <h1 style="text-align: center">Data Peminjaman Buku</h1>
            <button type="button" class="tambah" style="width: 230px;" onclick="tambahForm()">Tambah Data Peminjaman Buku</button>
            <table>
                <tbody>
                    <tr class="kategori">
                        <td>No</td>
                        <td>Nama Anggota</td>
                        <td>Judul Buku</td>
                        <td>Tanggal Peminjaman</td>
                        <td>Tanggal Pengembalian</td>
                        <td>Kondisi Buku Dipinjam</td>
                        <td>Kondisi Buku Dikembalikan</td>
                        <td>Denda</td>
                        <td class="kategori-aksi">Aksi</td>
                    </tr>
                    <tr class="data">
                        <td>1</td>
                        <td>Muh Richo Abadinata</td>
                        <td>Pemrograman Website</td>
                        <td>2 Mei 2023</td>
                        <td>8 Mei 2023</td>
                        <td>Baik</td>
                        <td>Baik</td>
                        <td>Rp 0,00</td>
                        <td class="aksi">
                            <button type="button" class="update" onclick="updateForm()">Update</button>
                            <button type="button" class="delete" onclick="">Delete</button>
                        </td>
                    </tr>
                    <tr class="data">
                        <td>2</td>
                        <td>Fajri Rayrahman H</td>
                        <td>Jaringan Komputer</td>
                        <td>9 Mei 2023</td>
                        <td>13 Mei 2023</td>
                        <td>Baik</td>
                        <td>Rusak</td>
                        <td>Rp 50.000,00</td>
                        <td class="aksi">
                            <button type="button" class="update" onclick="updateForm()">Update</button>
                            <button type="button" class="delete" onclick="">Delete</button>
                        </td>
                    </tr>
                    <tr class="data">
                        <td>3</td>
                        <td>Isya Almanda B</td>
                        <td>Algoritma dan Struktur Data</td>
                        <td>15 Mei 2023</td>
                        <td>23 Mei 2023</td>
                        <td>Baik</td>
                        <td>Baik</td>
                        <td>Rp 0,00</td>
                        <td class="aksi">
                            <button type="button" class="update" onclick="updateForm()">Update</button>
                            <button type="button" class="delete" onclick="">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>

    <div class="popup-form-container" id="tambahPopupForm">
        <div class="input-group">
            <h2>Tambah Data Peminjaman Buku</h1>
            <form method="POST">
                <div class="input-box">
                    <label for="nama_anggota">Nama Anggota :</label>
                    <input type="text" id="nama_anggota" name="nama_anggota" placeholder="Nama Anggota">
                </div>
                
                <div class="input-box">
                    <label for="judul_buku">Judul Buku :</label>
                    <input type="text" id="judul_buku" name="judul_buku" placeholder="Judul Buku">
                </div>

                <div class="input-box">
                    <label for="tanggal_peminjaman">Tanggal Peminjaman :</label>
                    <input type="date" id="tanggal_peminjaman" name="tanggal_peminjaman" placeholder="Tanggal Peminjaman">
                </div>

                <div class="input-box">
                    <label for="tanggal_pengembalian">Tanggal Pengembalian :</label>
                    <input type="date" id="tanggal_pengembalian" name="tanggal_pengembalian" placeholder="Tanggal Pengembalian">
                </div>

                <div class="input-box">
                    <label for="kondisi_dipinjam">Kondisi Buku Dipinjam :</label>
                    <input type="text" id="kondisi_dipinjam" name="kondisi_dipinjam" placeholder="Kondisi Buku Dipinjam">
                </div>

                <div class="input-box">
                    <label for="kondisi_dikembalikan">Kondisi Buku Dikembalikan :</label>
                    <input type="number" id="kondisi_dikembalikan" name="kondisi_dikembalikan" placeholder="Kondisi Buku Dikembalikan">
                </div>

                <button type="submit" name="btn-popup" class="btn-popup tambah-popup">Tambah</button>
            </form>
        </div>
    </div>

    <div class="popup-form-container" id="updatePopupForm">
        <div class="input-group">
            <h2>Update Data Peminjaman Buku</h1>
            <form method="POST">
                <div class="input-box">
                    <label for="nama_anggota">Nama Anggota :</label>
                    <input type="text" id="nama_anggota" name="nama_anggota" placeholder="Data">
                </div>
                
                <div class="input-box">
                    <label for="judul_buku">Judul Buku :</label>
                    <input type="text" id="judul_buku" name="judul_buku" placeholder="Data">
                </div>

                <div class="input-box">
                    <label for="tanggal_peminjaman">Tanggal Peminjaman :</label>
                    <input type="date" id="tanggal_peminjaman" name="tanggal_peminjaman" placeholder="Data">
                </div>

                <div class="input-box">
                    <label for="tanggal_pengembalian">Tanggal Pengembalian :</label>
                    <input type="date" id="tanggal_pengembalian" name="tanggal_pengembalian" placeholder="Data">
                </div>

                <div class="input-box">
                    <label for="kondisi_dipinjam">Kondisi Buku Dipinjam :</label>
                    <input type="text" id="kondisi_dipinjam" name="kondisi_dipinjam" placeholder="Data">
                </div>

                <div class="input-box">
                    <label for="kondisi_dikembalikan">Kondisi Buku Dikembalikan :</label>
                    <input type="number" id="kondisi_dikembalikan" name="kondisi_dikembalikan" placeholder="Data">
                </div>

                <button type="submit" name="btn-popup" class="btn-popup update-popup">Update</button>
            </form>
        </div>
    </div>

    <script src="popup.js"></script>
</body>
</html>
