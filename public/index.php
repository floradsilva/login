<?php
// unset($_COOKIE['PHPSESSID']);
session_start();
require __DIR__ . '/setting.php';

$request = $_SERVER['REDIRECT_URL'];

switch ($request) {
    case '/' :
        require __DIR__ . '/views/index.php';
        break;
    case '' :
        require __DIR__ . '/views/index.php';
        break;
    case '/home' :
        require __DIR__ . '/views/index.php';
        break;
    case '/register' :
        require __DIR__ . '/views/register.php';
        break;
    case '/login' :
        require __DIR__ . '/views/login.php';
        break;
    case '/edit-account' :
        require __DIR__ . '/views/edit-account.php';
        break;
    case '/about' :
        require __DIR__ . '/views/about.php';
        break;
    case '/install' :
        require __DIR__ . '/setting.php';
        break;
    case '/send-password':
        require __DIR__ . '/views/generate_password.php';
        break;
    default:
        require __DIR__ . '/views/404.php';
        break;
}