<?php

$request = $_SERVER['REQUEST_URI'];

if ($request == '/login') {

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Récupérer les données du formulaire
        $email = $_POST['email'];
        $password = $_POST['password'];

        require_once('../Model/UserModel.php');
        login($email,$password);
    }
    require_once('../View/login.php');


} elseif ($request == '/register') {

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        $password = $_POST['password'];


        // Hacher le mot de passe
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        require_once('../Model/UserModel.php');
        register($name, $surname, $email, $number, $hashedPassword);
    }
    require_once('../View/register.php');
}
