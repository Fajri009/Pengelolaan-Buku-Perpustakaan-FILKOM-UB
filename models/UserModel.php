<?php
class UserModel {
    private $conn;

    public function __construct() {
        // Leave the constructor empty for now
    }

    private function connectToDatabase() {
        $this->conn = getConnection();
    }

    public function getUserByEmailAndPassword($email, $password) {
        $this->connectToDatabase();

        $query = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
        $result = $this->conn->query($query);

        if ($result->num_rows == 1) {
            $user = $result->fetch_assoc();
            return $user;
        } else {
            return null;
        }
    }

    public function createUser($fullname, $nim, $email, $password) {
        $this->connectToDatabase();

        $query = "INSERT INTO user (fullname, nim, email, password, role) VALUES ('$fullname', '$nim', '$email', '$password', 'Pengguna')";
        mysqli_query($this->conn, $query);
    }

    public function closeConnection() {
        $this->conn->close();
    }
}