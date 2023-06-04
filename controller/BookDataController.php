<?php

class DataBukuController {
    public function index() {
        require_once "config/koneksi.php";

        session_start();

        if (!isset($_SESSION['role'])) {
            header("Location: index.php?page=sign_in");
            exit();
        }
        require_once "models/BookModel.php";
        $bookModel = new BookModel();
        $books = $bookModel->getBooks();
        $bookModel->closeConnection();

        include "Page/navbar/navigation_bar.php";
        include_once "Page/admin/data/data_buku.php";
    }

    public function addBook() {
        $bookData = [
            'judul' => $_POST['judul_buku'],
            'pengarang' => $_POST['pengarang'],
            'penerbit' => $_POST['penerbit'],
            'buku_baik' => $_POST['baik'],
            'buku_rusak' => $_POST['rusak'],
            'jumlah_buku' => $_POST['jumlah_buku']
        ];

        if (isset($_FILES['gambar_buku']) && $_FILES['gambar_buku']['error'] === UPLOAD_ERR_OK) {
            $image = $_FILES['gambar_buku'];
    
            // Process the uploaded image
            $uploadDir = "uploads/";
            $uploadPath = $uploadDir . basename($image["name"]);
            $imageFileType = strtolower(pathinfo($uploadPath, PATHINFO_EXTENSION));
    
            // Check if the file is a valid image
            $allowedExtensions = ["jpg", "jpeg", "png", "gif"];
            if (!in_array($imageFileType, $allowedExtensions)) {
                die("Invalid image format. Please upload a JPG, JPEG, PNG, or GIF file.");
            }
    
            // Move the uploaded file to the server
            if (move_uploaded_file($image["tmp_name"], $uploadPath)) {
                // Set the image path in the book data
                $bookData['gambar_buku'] = $uploadPath;
            } else {
                echo "Error uploading the image.";
                exit;
            }

            require_once "models/BookModel.php";
            $bookModel = new BookModel();
    
            // Insert the book into the database
            $inserted = $bookModel->insertBook($bookData);
        }
        header("Location: index.php?page=data_buku");
    }
}
