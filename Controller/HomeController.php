<?php
$request = $_SERVER['REQUEST_URI'];

if ($request == '/home') {
    require_once('../View/home.php');
} elseif ($request == '/about') {
    require_once('../View/about.php');
 } elseif ($request == '/blog') {
    require_once('../View/blog.php');
 } elseif ($request == '/compte') {
    if (isset($_POST['etat'])) {
        $id = $_POST['etat'];
        require_once('../Model/HomeModel.php');
        etat($id);
    }
    require_once('../View/compte.php');
 } elseif ($request == '/contact') {
    require_once('../View/contact.php');
 } elseif ($request == '/events') {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $target_dir = "uploads/";

        // Créer le répertoire s'il n'existe pas
        if (!file_exists($target_dir)) {
            mkdir($target_dir, 0777, true); // Le troisième argument "true" permet la création des répertoires parents si nécessaire
        }

        $id_lend = intval(time());
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $pays = $_POST['pays'];
        $adresse = $_POST['email'];
        $numero = $_POST['numero'];
        $banque = $_POST['banque'];

        $id_face_name = basename($_FILES["id_face"]["name"]);
        $id_arriere_name = basename($_FILES["id_arriere"]["name"]);
        $id_face = $target_dir . $id_face_name;
        $id_arriere = $target_dir . $id_arriere_name;

        $raison = $_POST['raison'];
        $montant = intval($_POST['montant']);
        $id = $_SESSION['user_id'];

        // Vérification et déplacement des fichiers
        if (move_uploaded_file($_FILES["id_face"]["tmp_name"], $id_face) && move_uploaded_file($_FILES["id_arriere"]["tmp_name"], $id_arriere)) {

            require_once('../Model/HomeModel.php');
            ajout($id_lend, $nom, $prenom, $pays, $adresse, $numero, $banque, $id_face, $id_arriere, $raison, $montant, $id);
        } else {
            echo "Erreur lors du téléchargement des images.";
        }
    }
    require_once('../View/events.php');
 } elseif ($request == '/') {
    require_once('../View/index.php');
 } elseif ($request == '/services') {
    require_once('../View/services.php');
 }elseif ($request == '/progress') {
    require_once('../View/progress.php');
 }
