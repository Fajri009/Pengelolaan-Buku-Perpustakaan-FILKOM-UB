<?php

class MemberDataController {
    public function index() {
        require_once "config/koneksi.php";

        session_start();

        if (!isset($_SESSION['role'])) {
            header("Location: index.php?page=sign_in");
            exit();
        }

        require_once "models/UserModel.php";
        $model = new UserModel();

        $data = $model->getAllData();

        include "Page/navbar/navigation_bar.php";
        include_once "Page/admin/data/data_anggota.php";
    }

    public function tambah_anggota(){
        $kode = $_POST['kode_anggota'];
        $nim = $_POST['nim'];
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $alamat = $_POST['alamat'];
        $role = "Pengguna";

        require_once "config/koneksi.php";
        $conn = getConnection();
        $query = "INSERT INTO user (kode_anggota, nim, fullname, email, password,role, alamat) 
                    VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($query);

            // Bind the parameters
        $stmt->bind_param("sssssss", $kode, $nim, $fullname,$email,$password,$role,$alamat);

            // Execute the query
        $stmt->execute();
        header("Location: index.php?page=data_anggota");
    }

}
