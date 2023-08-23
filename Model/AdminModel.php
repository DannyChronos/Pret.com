<?php 

function login($id, $password)
{

    require_once('Model.php');
    $conn = connection();

    // Vérifier la connexion
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Préparer et exécuter la requête
    $sql = "SELECT * FROM admins WHERE id_admin = '$id'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {
            // Authentification réussie
            $_SESSION['adminname'] = $row['nom'] . ' ' . $row['prenom'];
            $_SESSION['admin_log'] = true;
            header("Location: /dashboard");
            exit();
        } else {
            // Mot de passe incorrect
            header("Location: /admin");
            exit();
        }
    } else {
        // Nom d'utilisateur introuvable
        header("Location: /admin");
        exit();
    }
}

function count_user(){
    require_once('Model.php');
    $db = connection_with_PDO();

    $count_user =$db->query("select count(*) as total from users");

    return $count_user->fetch();
}

function count_lend_amount(){

    require_once('Model.php');
    $db = connection_with_PDO();

    $count_lend_amount = $db->query("select SUM(montant) as somme from lends");

    return $count_lend_amount->fetch();
}

function count_lend(){
    require_once('Model.php');
    $db = connection_with_PDO();

    $count_lend = $db->query("select count(*) as total from lends where status != 'terminé'");

    return $count_lend->fetch();
}

function count_valid(){
    require_once('Model.php');
    $db = connection_with_PDO();

    $count_valid = $db->query("select count(*) as total from lends where status = 'terminé'");

    return $count_valid->fetch();
}

function lend_list(){
    require_once('Model.php');
    $db = connection_with_PDO();
    $lend_list =$db->query("select * from lends GROUP BY id_lend ORDER BY created_at DESC ");
    return $lend_list;
}

function lend_list_home(){
    require_once('Model.php');
    $db = connection_with_PDO();
    $lend_list_home =$db->query("select * from lends GROUP BY id_lend ORDER BY created_at DESC LIMIT 3");
    return $lend_list_home;
}

function lend_search($id){
    require_once('Model.php');
    $db = connection_with_PDO();
    
    // Utilisation d'une requête préparée pour éviter l'injection SQL
    $query = "SELECT * FROM lends WHERE (nom LIKE :searchTerm OR prenom LIKE :searchTerm OR id_lend = :search)";
    $stmt = $db->prepare($query);
    $searchTerm = '%' . $id . '%';
    $search=$id;
    $stmt->bindParam(':searchTerm', $searchTerm, PDO::PARAM_STR);
    $stmt->bindParam(':search', $search, PDO::PARAM_STR);
    // Exécution de la requête préparée
    $stmt->execute();
    
    // Récupération des résultats
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    return $rows;
}

function user_list(){

    require_once('Model.php');
    $db = connection_with_PDO();
    $user_list =$db->query("select * from users GROUP BY id ORDER BY created_at DESC ");
    return $user_list;
}

function lend_details($id){
    require_once('Model.php');
    $conn = connection();

    // Vérifier la connexion
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Préparer et exécuter la requête
    $sql = "SELECT * FROM lends WHERE id_lend = '$id'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

    return $row;
}

}

function change_state($status){
    require_once('Model.php');
    $db = connection_with_PDO();

    if ($status == 'Première étape') {
        $request=$db->prepare("UPDATE lends SET status= ? where id_lend= ?");
        $request->execute(['Deuxième étape',$_SESSION['id_lend_admin']]);
    }elseif ($status == 'Deuxième étape') {
        $request=$db->prepare("UPDATE lends SET status= ? where id_lend= ?");
        $request->execute(['Troisième étape',$_SESSION['id_lend_admin']]);
    }elseif ($status == 'Troisième étape') {
        $request=$db->prepare("UPDATE lends SET status= ? where id_lend= ?");
        $request->execute(['Quatrième étape',$_SESSION['id_lend_admin']]);
    }elseif ($status == 'Quatrième étape') {
        $request=$db->prepare("UPDATE lends SET status= ? where id_lend= ?");
        $request->execute(['terminé',$_SESSION['id_lend_admin']]);
    }
}

function user_details($id){

}