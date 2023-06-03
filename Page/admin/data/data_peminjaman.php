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
            <h1 style="text-align: center">Data Buku Perpustakaan</h1>
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
                            <button type="button" class="update" onclick="">Update</button>
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
                            <button type="button" class="update" onclick="">Update</button>
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
                            <button type="button" class="update" onclick="">Update</button>
                            <button type="button" class="delete" onclick="">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
    </div>
</body>
</html>
