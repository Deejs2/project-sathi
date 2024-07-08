<?php
$page = $_GET['page'] ?? '';
switch ($page) {
    case '':
    case 'login':
        include "../view/auth/login.php";
        break;
    default:
        include "../view/404.php";
        break;
}