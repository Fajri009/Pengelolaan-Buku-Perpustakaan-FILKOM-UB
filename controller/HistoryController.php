<?php

class HistoryController {
    public function index() {
        session_start();
        if (!isset($_SESSION['role'])) {
            header("Location: index.php?page=sign_in");
            exit();
        }

        // Load the view file
        include "Page/navbar/navigation_bar.php";
        include "Page/pengguna/riwayat/riwayat.php";
    }
}
