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
        th:nth-child(8), td:nth-child(8) {
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
                        <td>Judul Buku</td>
                        <td>Pengarang</td>
                        <td>Penerbit</td>
                        <td>Buku Baik</td>
                        <td>Buku Rusak</td>
                        <td>Jumlah Buku</td>
                        <td class="kategori-aksi">Aksi</td>
                    </tr>
                    <tr class="data">
                        <td>1</td>
                        <td>Pengantar TIK</td>
                        <td>Bagaskara</td>
                        <td>Gramedia</td>
                        <td>7</td>
                        <td>3</td>
                        <td>10</td>
                        <td class="aksi">
                            <button type="button" class="update" onclick="">Update</button>
                            <button type="button" class="delete" onclick="">Delete</button>
                        </td>
                    </tr>
                    <tr class="data">
                        <td>2</td>
                        <td>Algoritma & Pemrograman</td>
                        <td>Purba Daru K</td>
                        <td>Intan Pariwara</td>
                        <td>10</td>
                        <td>2</td>
                        <td>12</td>
                        <td class="aksi">
                            <button type="button" class="update" onclick="">Update</button>
                            <button type="button" class="delete" onclick="">Delete</button>
                        </td>
                    </tr>
                    <tr class="data">
                        <td>3</td>
                        <td>Pemrograman Bahasa C++</td>
                        <td>Steve Jobs</td>
                        <td>Gramedia</td>
                        <td>15</td>
                        <td>5</td>
                        <td>20</td>
                        <td class="aksi">
                            <button type="button" class="update" onclick="">Update</button>
                            <button type="button" class="delete" onclick="">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
</body>
</html>
