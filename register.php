<?php
    require_once('./configuration.php');
   
    if( $_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST['boutton_inscrire'])){
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email = $_POST['email'];
            $motdepass = $_POST['motdepasse'];
            $role = $_POST['select_role'];

            $query1 = "SELECT count(*) FROM utilisateurs";
            $result = $conn->query($query1)->fetchColumn();
            $role = $result==0? "admin" : $role;

            $requete = $conn->prepare("INSERT INTO utilisateurs (nom, prenom, email, motdepasse, role) VALUES (:nom, :prenom, :email, :motdepasse, :role)");
            $requete->execute(
            array(
                "nom" => $nom,
                "prenom" => $prenom,
                "email" =>$email,
                "motdepasse" => password_hash($motdepass, PASSWORD_BCRYPT),
                "role" => $role,
            )
        );
        header('Location: connexion.php');
        // echo "inscription réusit";
    }
?>