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
            <button type="button" class="tambah" onclick="tambahForm()">Tambah Data Buku</button>
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
                            <button type="button" class="update" onclick="updateForm()">Update</button>
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
                            <button type="button" class="update" onclick="updateForm()">Update</button>
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
            <h2>Tambah Data Buku</h1>
            <form method="POST">
                <div class="input-box">
                    <label for="judul_buku">Judul Buku :</label>
                    <input type="text" id="judul_buku" name="judul_buku" placeholder="Judul Buku">
                </div>
                
                <div class="input-box">
                    <label for="pengarang">Pengarang :</label>
                    <input type="text" id="pengarang" name="pengarang" placeholder="Pengarang">
                </div>

                <div class="input-box">
                    <label for="penerbit">Penerbit :</label>
                    <input type="text" id="penerbit" name="penerbit" placeholder="Penerbit">
                </div>

                <div class="input-box">
                    <label for="baik">Banyak Buku Baik :</label>
                    <input type="number" id="baik" name="baik" placeholder="Banyak Buku Baik">
                </div>

                <div class="input-box">
                    <label for="rusak">Banyak Buku Rusak :</label>
                    <input type="number" id="rusak" name="rusak" placeholder="Banyak Buku Rusa">
                </div>

                <div class="input-box">
                    <label for="jumlah_buku">Jumlah Buku :</label>
                    <input type="number" id="jumlah_buku" name="jumlah_buku" placeholder="Jumlah Buku">
                </div>

                <div class="input-box">
                    <label for="gambar_buku">Gambar Buku :</label>
                    <input type="file" id="gambar_buku" name="gambar_buku" accept="image/png, image/jpeg, image/jpg">
                </div>

                <button type="submit" name="btn-popup" class="btn-popup tambah-popup">Tambah</button>
            </form>
        </div>
    </div>

    <div class="popup-form-container" id="updatePopupForm">
        <div class="input-group">
            <h2>Update Data Buku</h1>
            <form method="POST">
            <div class="input-box">
                    <label for="judul_buku">Judul Buku :</label>
                    <input type="text" id="judul_buku" name="judul_buku" placeholder="Data">
                </div>
                
                <div class="input-box">
                    <label for="pengarang">Pengarang :</label>
                    <input type="text" id="pengarang" name="pengarang" placeholder="Data">
                </div>

                <div class="input-box">
                    <label for="penerbit">Penerbit :</label>
                    <input type="text" id="penerbit" name="penerbit" placeholder="Data">
                </div>

                <div class="input-box">
                    <label for="baik">Banyak Buku Baik :</label>
                    <input type="number" id="baik" name="baik" placeholder="Data">
                </div>

                <div class="input-box">
                    <label for="rusak">Banyak Buku Rusak :</label>
                    <input type="number" id="rusak" name="rusak" placeholder="Data">
                </div>

                <div class="input-box">
                    <label for="jumlah_buku">Jumlah Buku :</label>
                    <input type="number" id="jumlah_buku" name="jumlah_buku" placeholder="Data">
                </div>

                <div class="input-box">
                    <label for="gambar_buku">Gambar Buku :</label>
                    <input type="file" id="gambar_buku" name="gambar_buku" accept="image/png, image/jpeg, image/jpg">
                </div>

                <button type="submit" name="btn-popup" class="btn-popup update-popup">Update</button>
            </form>
        </div>
    </div>

    <script src="popup.js"></script>
</body>
</html>
