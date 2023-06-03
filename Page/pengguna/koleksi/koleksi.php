<?php
    require_once "../../../config/koneksi.php";

    session_start();

    if (!isset($_SESSION['role'])) {
        header("Location: ../../start/sign_in.php");
        exit();
    }
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="">
    <title>Koleksi Buku</title>
</head>
<body>
    <?php include "../../navbar/navigation_bar.php"; ?>
    <div class="container">
        <h1>Koleksi Buku</h1>
        <form method="POST">
            <div class="button-group">
                <button type="submit" name="sign_in" class="button1">Logout</button>
            </div>
        </form>
    </div>
</body>
</html>