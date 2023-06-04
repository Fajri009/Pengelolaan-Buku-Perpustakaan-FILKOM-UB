<?php

class BorrowDataController {
    public function index() {
        require_once "config/koneksi.php";

        session_start();

        if (!isset($_SESSION['role'])) {
            header("Location: index.php?page=sign_in");
            exit();
        }

        include "Page/navbar/navigation_bar.php";
        include_once "Page/admin/data/data_peminjaman.php";
    }
}
