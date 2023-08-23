<?php

function register($name, $surname, $email, $number, $password)
{

    require_once('Model.php');
    $conn = connection();

    // Vérifier la connexion
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Vérifier si l'utilisateur existe déjà
    $sql = "SELECT id FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Nom d'utilisateur déjà utilisé
        header("Location: /register");
        exit();
    }

    // Insérer l'utilisateur dans la base de données
    $sql = "INSERT INTO users (nom, prenom, email, numero, password) VALUES ('$name', '$surname', '$email', '$number', '$password')";

    if (mysqli_query($conn, $sql)) {
        // Inscription réussie

        // Envoi d'un e-mail de confirmation
        /*$to = $email;
        $subject = "Confirmation d'inscription";
        $message = "Bonjour $name $surname,\n\nVotre inscription a été confirmée.\n\nCordialement,\nVotre site";
        $headers = "From: dayanebakari4@gmail.com";
        mail($to, $subject, $message, $headers);*/


        header("Location: /login");
        exit();
    } else {
        // Erreur lors de l'inscription
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
function login($email, $password)
{

    require_once('Model.php');
    $conn = connection();

    // Vérifier la connexion
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Préparer et exécuter la requête
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {
            // Authentification réussie
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['username'] = $row['nom'];
            header("Location: /home");
            exit();
        } else {
            // Mot de passe incorrect
            header("Location: /login");
            exit();
        }
    } else {
        // Nom d'utilisateur introuvable
        header("Location: /login");
        exit();
    }
}
