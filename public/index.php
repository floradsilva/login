<?php
// unset($_COOKIE['PHPSESSID']);
session_start();
require __DIR__ . '/setting.php';

$request = $_SERVER['REDIRECT_URL'];

switch ($request) {
case '/' :
    include __DIR__ . '/views/index.php';
    break;
case '' :
    include __DIR__ . '/views/index.php';
    break;
case '/home' :
    include __DIR__ . '/views/index.php';
    break;
case '/register' :
    include __DIR__ . '/views/register.php';
    break;
case '/login' :
    include __DIR__ . '/views/login.php';
    break;
case '/edit-account' :
    include __DIR__ . '/views/edit-account.php';
    break;
case '/about' :
    include __DIR__ . '/views/about.php';
    break;
case '/install' :
    include __DIR__ . '/setting.php';
    break;
case '/send-password':
    include __DIR__ . '/views/generate_password.php';
    break;
default:
    include __DIR__ . '/views/404.php';
    break;
}