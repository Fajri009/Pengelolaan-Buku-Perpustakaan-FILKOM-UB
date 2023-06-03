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
    default:
        echo "404 Page Not Found";
        break;
}
