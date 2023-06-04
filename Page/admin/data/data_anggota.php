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
    <title>Data Anggota Perpustakaan</title>
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
            <h1 style="text-align: center">Data Anggota Perpustakaan</h1>
            <button type="button" class="tambah" onclick="tambahForm()">Tambah Data Anggota</button>
            <table>
                <tbody>
                    <tr class="kategori">
                        <td>No</td>
                        <td>Kode Anggota</td>
                        <td>NIM</td>
                        <td>Nama Lengkap</td>
                        <td>Email</td>
                        <td>Password</td>
                        <td>Alamat</td>
                        <td class="kategori-aksi">Aksi</td>
                    </tr>
                    <tr class="data">
                        <td>1</td>
                        <td>000000001</td>
                        <td>215150200111037</td>
                        <td>Muh Richo Abadinata</td>
                        <td>muhrichoa@student.ub.ac.id</td>
                        <td>1234567890</td>
                        <td>Desa Mojolangu, Kec. Lowokwaru, Malang</td>
                        <td class="aksi">
                            <button type="button" class="update" onclick="updateForm()">Update</button>
                            <button type="button" class="delete" onclick="">Delete</button>
                        </td>
                    </tr>
                    <tr class="data">
                        <td>2</td>
                        <td>000000002</td>
                        <td>213147168413132</td>
                        <td>Fajri Rayrahman H</td>
                        <td>fajri.harlan.fh@student.ub.ac.id</td>
                        <td>12345</td>
                        <td>Tangerang</td>
                        <td class="aksi">
                            <button type="button" class="update" onclick="updateForm()">Update</button>
                            <button type="button" class="delete" onclick="">Delete</button>
                        </td>
                    </tr>
                    <tr class="data">
                        <td>3</td>
                        <td>000000003</td>
                        <td>27253r52242443</td>
                        <td>Isya Almanda B</td>
                        <td>isyaalmanda@student.ub.ac.id</td>
                        <td>asdfghjkl</td>
                        <td>Blitar</td>
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
            <h2>Tambah Data Anggota</h1>
            <form method="POST">
                <div class="input-box">
                    <label for="kode_anggota">Kode Anggota :</label>
                    <input type="text" id="kode_anggota" name="kode_anggota" placeholder="Kode Anggota">
                </div>
                
                <div class="input-box">
                    <label for="nim">NIM :</label>
                    <input type="text" id="nim" name="nim" placeholder="NIM">
                </div>

                <div class="input-box">
                    <label for="fullname">Nama Lengkap :</label>
                    <input type="text" id="fullname" name="fullname" placeholder="Nama Lengkap">
                </div>

                <div class="input-box">
                    <label for="email">Email :</label>
                    <input type="email" id="email" name="email" placeholder="Email">
                </div>

                <div class="input-box">
                    <label for="password">Password :</label>
                    <input type="text" id="password" name="password" placeholder="Password">
                </div>

                <div class="input-box">
                    <label for="alamat">Alamat :</label>
                    <input type="text" id="alamat" name="alamat" placeholder="Alamat">
                </div>

                <button type="submit" name="btn-popup" class="btn-popup tambah-popup">Tambah</button>
            </form>
        </div>
    </div>

    <div class="popup-form-container" id="updatePopupForm">
        <div class="input-group">
            <h2>Update Data Anggota</h1>
            <form method="POST">
                <div class="input-box">
                    <label for="kode_anggota">Kode Anggota :</label>
                    <input type="text" id="kode_anggota" name="kode_anggota" placeholder="Data">
                </div>
                
                <div class="input-box">
                    <label for="nim">NIM :</label>
                    <input type="text" id="nim" name="nim" placeholder="Data">
                </div>

                <div class="input-box">
                    <label for="fullname">Nama Lengkap :</label>
                    <input type="text" id="fullname" name="fullname" placeholder="Data">
                </div>

                <div class="input-box">
                    <label for="email">Email :</label>
                    <input type="email" id="email" name="email" placeholder="Data">
                </div>

                <div class="input-box">
                    <label for="password">Password :</label>
                    <input type="text" id="password" name="password" placeholder="Data">
                </div>

                <div class="input-box">
                    <label for="alamat">Alamat :</label>
                    <input type="text" id="alamat" name="alamat" placeholder="Data">
                </div>

                <button type="submit" name="btn-popup" class="btn-popup update-popup">Update</button>
            </form>
        </div>
    </div>

    <script src="popup.js"></script>
</body>
</html>
