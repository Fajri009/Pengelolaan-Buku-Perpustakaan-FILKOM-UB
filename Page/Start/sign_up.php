<?php
    session_start();

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
                <img src="../../asset/logo.svg" alt="logo" class="logo">
                <input type="text" placeholder="Nama Lengkap">
                <input type="email" placeholder="Email">
                <input type="password" placeholder="Password">
                <div class="button-group">
                    <button type="submit" name="sign_up" class="button1">Sign Up</button>
                    <button type="submit" name="sign_in" class="button2">Sudah Mempunyai Akun? Sign In</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>