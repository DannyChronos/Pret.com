<?php
session_start();

$request = $_SERVER['REQUEST_URI'];


if ($request == '/register') {
   require_once('../Controller/UserController.php');
} elseif ($request == '/login') {
   require_once('../Controller/UserController.php');
} elseif ($request == '/home') {
   require_once('../Controller/HomeController.php');
} elseif ($request == '/about') {
   require_once('../Controller/HomeController.php');
} elseif ($request == '/blog') {
   require_once('../Controller/HomeController.php');
} elseif ($request == '/compte') {
   require_once('../Controller/HomeController.php');
} elseif ($request == '/contact') {
   require_once('../Controller/HomeController.php');
} elseif ($request == '/events') {
   require_once('../Controller/HomeController.php');
} elseif ($request == '/') {
   require_once('../Controller/HomeController.php');
} elseif ($request == '/services') {
   require_once('../Controller/HomeController.php');
} elseif ($request == '/progress') {
   require_once('../Controller/HomeController.php');
}
/********************************************************************/
elseif ($request == '/admin') {
   require_once('../Controller/AdminController.php');
} elseif ($request == '/dashboard' && $_SESSION['admin_log'] != true) {
   require_once('../Controller/AdminController.php');
} elseif ($request == '/dashboard' && $_SESSION['admin_log'] == true) {
   require_once('../Controller/AdminController.php');
} elseif (strpos($request, '/lendDetail/') !== false) {
   $id = substr($request, strpos($request, '/lendDetail/') + 13);
   require_once('../Controller/AdminController.php');
}elseif ($request == '/lendDetail') {
   require_once('../Controller/AdminController.php');
}elseif ($request == '/all/lends') {
   require_once('../Controller/AdminController.php');
}elseif ($request == '/all/users') {
   require_once('../Controller/AdminController.php');
}elseif ($request == '/search/lend') {
   require_once('../Controller/AdminController.php');
}elseif ($request == '/logout') {
   require_once('../Controller/AdminController.php');
}else {
   var_dump($_SERVER);
}
?>
