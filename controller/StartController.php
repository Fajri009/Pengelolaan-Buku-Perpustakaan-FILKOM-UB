<?php

class StartController {
    public function login() {
        require_once "config/koneksi.php";
        
        session_start();
        
        if (isset($_POST['sign_in'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            
            require_once "models/UserModel.php";
            $userModel = new UserModel();
            $user = $userModel->getUserByEmailAndPassword($email, $password);

            if ($user) {
                $_SESSION['role'] = $user['role'];
                header("Location: index.php?page=home");
                exit();
            } else {
                $error_message = "Username atau Password Salah";
            }
        }

        if (isset($_POST['sign_up'])) {
            header("Location: index.php?page=sign_up");
        }

        include "Page/Start/sign_in.php";
    }

    public function signUp() {
        require_once "config/koneksi.php";

        session_start();

        if (isset($_POST['sign_up'])) {
            $fullname = $_POST['fullname'];
            $nim = $_POST['nim'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            
            if (empty($fullname) || empty($nim) || empty($email) || empty($password)) {
                $error_message = "Isi data kosong terlebih dahulu";
            } else {
                require_once "models/UserModel.php";
                $userModel = new UserModel();
                $userModel->createUser($fullname, $nim, $email, $password);

                header("Location: index.php?page=sign_in");
                exit();
            }
        }

        if (isset($_POST['sign_in'])) {
            header("Location: index.php?page=sign_in");
        }

        include "Page/Start/sign_up.php";
    }
}