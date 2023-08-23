<?php

function ajout($id_lend, $nom, $prenom, $pays, $adresse, $numero, $banque, $id_face, $id_arriere, $raison, $montant, $id)
{

    require_once('Model.php');

    $conn = connection();

    // Vérifier la connexion
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Insérer le chemin d'accès dans la base de données
    $sql = "INSERT INTO lends (`id_lend`, `nom`, `prenom`, `pays`, `adresse`, `numero`, `nom_banque`, `carte_id_face`, `carte_id_arriere`, `raison`, `montant`, `id`) VALUES ('$id_lend', '$nom', '$prenom', '$pays', '$adresse', '$numero', '$banque', '$id_face', '$id_arriere', '$raison', '$montant', '$id')";

    if (mysqli_query($conn, $sql)) {

        header("Location: /compte");
        exit();

    } else {
        echo "Erreur lors de l'insertion dans la base de données: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
function verify(){
    require_once('Model.php');
    $db = connection_with_PDO();
    // Utilisation d'une requête préparée pour éviter l'injection SQL
    $query = "SELECT * FROM lends where id = :searchTerm group by id_lend order by created_at desc limit 1";
    $stmt = $db->prepare($query);
    $searchTerm =  $_SESSION['user_id'];
    $stmt->bindParam(':searchTerm', $searchTerm, PDO::PARAM_STR);
    // Exécution de la requête préparée
    $stmt->execute();
    
    // Récupération des résultats
    $rows = $stmt->fetch(PDO::FETCH_ASSOC);
    
    return $rows;
}

function etat($id){
    require_once('Model.php');
    $db = connection_with_PDO();
    // Utilisation d'une requête préparée pour éviter l'injection SQL
    $query = "SELECT * FROM lends where id_lend = :searchTerm";
    $stmt = $db->prepare($query);
    $searchTerm =  $id;
    $stmt->bindParam(':searchTerm', $searchTerm, PDO::PARAM_STR);
    // Exécution de la requête préparée
    $stmt->execute();
    
    // Récupération des résultats
    $rows = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if ($rows['etat'] ==='ouvert') {
        require_once('Model.php');
    $db = connection_with_PDO();
    $request=$db->prepare("UPDATE lends SET etat= ? where id_lend= ?");
    $request->execute(['fermé',$id]);
    header('location: /compte');
    }
}