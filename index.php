<?php

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'sign_in';
}

switch ($page) {
    case 'home':
        require_once "controller/HomeController.php";
        $homeController = new HomeController();
        $homeController->index();
        break;
    case 'home_admin':
        require_once "controller/HomeController.php";
        $homeadminController = new HomeAdminController();
        $homeadminController->index();
        break;
    case 'sign_in':
        require_once "controller/StartController.php";
        $startController = new StartController();
        $startController->login();
        break;
    case 'sign_up':
        require_once "controller/StartController.php";
        $startController = new StartController();
        $startController->signUp();
        break;
    case 'koleksi_buku':
        require_once "controller/BookCollectionController.php";
        $bookCollectionController = new BookCollectionController();
        $bookCollectionController->index();
        break;
    case 'peminjaman_buku':
        require_once "controller/BorrowController.php";
        $BorrowController = new BorrowController();
        $BorrowController->index();
        break;
    case 'pengembalian_buku':
        require_once "controller/ReturnController.php";
        $returnController = new ReturnController();
        $returnController->index();
        break;
    case 'data_buku':
        require_once "controller/BookDataController.php";
        $dataBukuController = new DataBukuController();
        $dataBukuController->index();
        break;
    case 'data_peminjaman':
        require_once "controller/BorrowDataController.php";
        $borrowDataController = new BorrowDataController();
        $borrowDataController->index();
        break;
    case 'data_anggota':
        require_once "controller/MemberDataController.php";
        $memberDataController = new MemberDataController();
        $memberDataController->index();
        break;
    case 'riwayat':
        require_once "controller/HistoryController.php";
        $historyController = new HistoryController();
        $historyController->index();
        break;
    case 'profil_pengguna':
        require_once "controller/ProfileController.php";
        $profileController = new ProfileController();
        $profileController->index();
        break;
    case 'profil_admin':
        require_once "controller/ProfileController.php";
        $profileAdminController = new ProfileAdminController();
        $profileAdminController->index();
        break;
    case 'sign_out':
        require_once "controller/logout.php";
        $logoutController = new LogoutController();
        $logoutController->index();
        break;
    default:
        echo "404 Page Not Found";
        break;
}
