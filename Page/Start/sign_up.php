<?php
    require_once "../../config/koneksi.php";

    session_start();

    if (isset($_POST['sign_up'])) {
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "INSERT INTO user (fullname, email, password, role) VALUES ('$fullname', '$email', '$password', 'Pengguna')";
        mysqli_query($koneksi, $query);

        $id_user = mysqli_insert_id($koneksi);

        header("Location: sign_in.php");
        exit();
    }

    if (isset($_POST['sign_in'])) {
        header("Location: sign_in.php");
    }
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="start.css">
    <title>Login Page</title>
</head>
<body>
    <div class="container">
        <h1>PERPUSTAKAAN</h1>
        <div class="login-box">
            <form method="POST">
                <img src="../../asset/logo_tut.svg" alt="logo" class="logo">
                <input name="fullname" type="text" placeholder="Nama Lengkap">
                <input name="email" type="email" placeholder="Email">
                <input name="password" type="password" placeholder="Password">
                <div class="button-group">
                    <button type="submit" name="sign_up" class="button1">Sign Up</button>
                    <button type="submit" name="sign_in" class="button2">Sudah Mempunyai Akun? Sign In</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>