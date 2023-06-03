<?php
function getConnection() {
    $koneksi = new mysqli("localhost", "root", "itsme", "projek_akhir");

    // Check connection
    if ($koneksi->connect_error) {
        die("Connection failed: " . $koneksi->connect_error);
    }

    return $koneksi;
}