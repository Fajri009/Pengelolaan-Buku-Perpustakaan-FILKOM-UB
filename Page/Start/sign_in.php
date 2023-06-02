<?php
    require_once "../../config/koneksi.php";

    session_start();

    if (isset($_POST['sign_in'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
        $result = mysqli_query($koneksi, $query);

        if (mysqli_num_rows($result) == 1) {
            header("Location: ../home/homepage.php");
            exit();
        } else {
            $error_message = "Username atau Password Salah";
        }
    }

    if (isset($_POST['sign_up'])) {
        header("Location: sign_up.php");
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
                <input name="email" type="email" placeholder="Email">
                <input name="password" type="password" placeholder="Password">
                <?php
                    if (isset($error_message)) {
                        echo '<p class="error">' . $error_message . '</p>';
                    }
                ?>
                <div class="button-group">
                    <button type="submit" name="sign_in" class="button1">Sign In</button>
                    <button type="submit" name="sign_up" class="button2">Sign Up</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>