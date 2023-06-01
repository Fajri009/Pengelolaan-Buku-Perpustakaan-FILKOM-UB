<?php
    session_start();

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
                <img src="../../asset/logo.svg" alt="logo" class="logo">
                <input type="email" placeholder="Email">
                <input type="password" placeholder="Password">
                <div class="button-group">
                    <button type="submit" name="sign_in" class="button1">Sign In</button>
                    <button type="submit" name="sign_up" class="button2">Sign Up</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>