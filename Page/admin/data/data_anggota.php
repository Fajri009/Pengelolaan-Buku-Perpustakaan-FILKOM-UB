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
                            <button type="button" class="update" onclick="showForm()">Update</button>
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
                            <button type="button" class="update" onclick="showForm()">Update</button>
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
                            <button type="button" class="update" onclick="">Update</button>
                            <button type="button" class="delete" onclick="">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
    <div class="popup-form-container" id="popupFormContainer">
        <div class="input-group">
            <h2>Formulir Peminjaman Buku</h1>
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
                    <label for="tanggal">Tanggal Peminjaman :</label>
                    <input type="date" id="tanggal" name="tanggal_peminjaman">
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
        </div>>
        </div>
    </div>

    <script>
        function showForm() {
            var popupFormContainer = document.getElementById("popupFormContainer");
            popupFormContainer.style.display = "block";
        }

        var popupFormContainer = document.getElementById("popupFormContainer");
        popupFormContainer.addEventListener("click", function(event) {
            if (event.target === this) {
                this.style.display = "none";
            }
        });
    </script>
</body>
</html>
