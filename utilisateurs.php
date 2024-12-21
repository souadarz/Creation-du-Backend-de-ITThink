<!-- this is the usres page -->
<?php require_once('./configuration.php'); ?>
<?php session_start();
    function get_users($conn){
        $sql = "SELECT * FROM utilisateurs WHERE role in('client','freelance')";
        $stmt = $conn->query($sql);
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return$users;
    }
    $users = get_users($conn);
// echo "<pre>";-
//   var_dump($users);
//   print_r($users);
// echo "</pre>";
?>
    <table>
        <thead>
            <tr>
                <th>ID</th> 
                <th>Nom</th>
                <th>Prenom</th>
                <th>Email</th>
                <th>Role</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= htmlspecialchars($user['id_utilisateur']); ?></td>
                <td><?= htmlspecialchars($user['nom']); ?></td>
                <td><?= htmlspecialchars($user['prenom']); ?></td>
                <td><?= htmlspecialchars($user['email']); ?></td>
                <td><?= htmlspecialchars($user['role']); ?></td>
                <td><a href="supprimer.php?id=<?=$user['id_utilisateur']?>"></a></td>
            </tr>

        </tbody>

       <?php endforeach ?> 
    </table>