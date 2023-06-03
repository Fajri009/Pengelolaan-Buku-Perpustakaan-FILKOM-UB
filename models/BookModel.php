<?php

require_once "config/koneksi.php";

class BookModel {
    private $conn;

    public function __construct() {
        $this->conn = getConnection();
    }

    public function getAllBooks() {
        $sql = "SELECT image_path FROM books";
        $result = $this->conn->query($sql);

        $books = [];

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $imagePath = $row["image_path"];
                $books[] = $imagePath;
            }
        }

        return $books;
    }

    public function closeConnection() {
        $this->conn->close();
    }
}
