<?php
require_once('./configuration.php');
session_start();

if($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST['boutton_connection'])){

    $email = $_POST['email'] ;
    $PASSWORD = $_POST['motdepasse'] ;
    $query = "SELECT * FROM utilisateurs WHERE email = ? ";
    $user = $conn->prepare($query);
    $user->execute([$email]);
    $userData = $user->fetch(PDO::FETCH_ASSOC);

    if (password_verify($PASSWORD, $userData['motdepasse'])) {
        $_SESSION['nom'] = $userData['nom'];
        $_SESSION['email'] = $userData['email'];
        $_SESSION['role'] = $userData['role'];
        // echo 'Password is valid!';
        header('Location: dashbord.php');
    } else {
        // echo 'Invalid password.';
    }
}

?>