<?php

class ReturnController {
    public function index() {
        session_start();
        // Code to handle the form submission and process the data
        if (!isset($_SESSION['role'])) {
            header("Location: index.php?page=sign_in");
            exit();
        }

        if (isset($_POST['submit'])) {
            // Process the form data and perform necessary actions
            // ...

            // Redirect to a success page or display a success message
            // ...
        }

        // Load the view file
        include "Page/navbar/navigation_bar.php";
        include "Page/pengguna/form/pengembalian.php";
    }
}
