<?php

require_once "models/BookModel.php";

class HomeController {
    public function index() {
        session_start();

        if (!isset($_SESSION['role'])) {
            header("Location: ../start/sign_in.php");
            exit();
        }

        $bookModel = new BookModel();
        $books = $bookModel->getAllBooks();

        include "Page/pengguna/home/homepage.php";
    }
}
