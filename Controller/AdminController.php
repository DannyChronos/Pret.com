<?php

$request = $_SERVER['REQUEST_URI'];

if ($request == '/admin') {
    if (isset($_POST['admin_log'])) {
        // Récupérer les données du formulaire
        $id = $_POST['id'];
        $password = $_POST['password'];

        require_once('../Model/AdminModel.php');
        login($id, $password);
    }
    require_once('../View/dashbord/page_account_login.php');
}
elseif ($request == '/logout') {
    $_SESSION['admin_log'] = false;
    header('location: /admin');
 }

elseif ($request == '/dashboard' && $_SESSION['admin_log'] != true) {
    header('Location: /admin');
}

elseif ($request == '/dashboard' && $_SESSION['admin_log'] == true) {
    require_once('../View/dashbord/index.php');
}

elseif (strpos($request, '/lendDetail/') !== false) {
    $id = substr($request, strpos($request, '/lendDetail/') + 12);
    $_SESSION['id_lend_admin'] = $id;
    if (isset($_POST['change_state'])) {
        
        require_once('../Model/AdminModel.php');

        change_state($_POST['change_state']);
    
    }
    require_once('../View/dashbord/pageLendsDetail.php');
}
elseif ($request == '/all/lends') {
    if ($_SERVER['REQUEST_METHOD']== 'POST') {
        
        require_once('../Model/AdminModel.php');

        $_SESSION['lend_search']=lend_search($_POST['lend_search']);

        //var_dump($_SESSION['lend_search']);

        header('location: /search/lend');
    }
    require_once('../View/dashbord/pageAllLends.php');
}elseif ($request == '/all/users') {
    require_once('../View/dashbord/pageUserAll.php');
}elseif ($request == '/search/lend') {
    if ($_SERVER['REQUEST_METHOD']== 'POST') {
        
        require_once('../Model/AdminModel.php');

        $_SESSION['lend_search']=lend_search($_POST['lend_search']);

        //var_dump($_SESSION['lend_search']);

        header('location: /search/lend');
    }
    require_once('../View/dashbord/pageResultLend.php');
}
