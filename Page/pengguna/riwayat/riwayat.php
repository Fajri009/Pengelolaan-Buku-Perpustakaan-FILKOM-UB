<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="Page/pengguna/riwayat/riwayat.css">
    <title>Peminjaman Buku</title>
</head>
<body>
    <div class="container">
        <h1>Riwayat Peminjaman Buku</h1>
        <table>
            <tbody>
                <tr class="kategori">
                    <td>No</td>
                    <td>Nama Anggota</td>
                    <td>Judul Buku</td>
                    <td>Tanggal Peminjaman</td>
                    <td>Tanggal Pengembalian</td>
                    <td>Kondisi Buku Saat Dipinjam</td>
                    <td>Kondisi Buku Saat Dikembalikan</td>
                    <td>Denda</td>
                </tr>
                <tr class="data">
                    <td>1</td>
                    <td>Muh Richo A</td>
                    <td>Pemweb</td>
                    <td>2 Mei 2023</td>
                    <td>8 Mei 2023</td>
                    <td>Baik</td>
                    <td>Baik</td>
                    <!-- Untuk denda nya tergantung kondisi buku saat dikembalikan, jika rusak maka denda keluar 50rb pake if else -->
                    <td>Rp 0,00</td>
                </tr>
                <tr class="data">
                    <td>2</td>
                    <td>Muh Richo A</td>
                    <td>Jaringan</td>
                    <td>9 Mei 2023</td>
                    <td>13 Mei 2023</td>
                    <td>Baik</td>
                    <td>Rusak</td>
                    <td>Rp 50.000,00</td>
                </tr>
                <tr class="data">
                    <td>3</td>
                    <td>Muh Richo A</td>
                    <td>Pemweb</td>
                    <td>15 Mei 2023</td>
                    <td>23 Mei 2023</td>
                    <td>Baik</td>
                    <td>Baik</td>
                    <td>Rp 0,00</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
