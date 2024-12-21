<?php require_once "configuration.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - ITThink</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <div class="min-h-screen flex flex-col">
        <nav class="bg-blue-600 text-white py-4">
            <div class="container mx-auto px-4 flex justify-between items-center">
                <h1 class="text-xl font-bold">ITThink Dashboard</h1>
                <a href="logout.php" class="text-sm bg-gray-800 hover:bg-red-600 px-4 py-2 rounded">Déconnexion</a>
            </div>
        </nav>

        <div class="flex flex-1">
            <aside class="w-64 bg-gray-800 text-white flex-shrink-0">
                <div class="p-4">
                    <h2 class="text-lg font-semibold mb-4">Menu</h2>
                    <ul>
                        <li class="mb-3">
                            <a href="#" class="block py-2 px-4 rounded hover:bg-gray-700">Tableau de bord</a>
                        </li>
                        <li class="mb-3">
                            <a href="utilisateurs.php" class="block py-2 px-4 rounded hover:bg-gray-700">Utilisateurs</a>
                        </li>
                        <li class="mb-3">
                            <a href="#" class="block py-2 px-4 rounded hover:bg-gray-700">Projets</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 px-4 rounded hover:bg-gray-700"></a>
                        </li>
                    </ul>
                </div>
            </aside>

            <main class="flex-1 p-6">
                <h2 class="text-2xl font-semibold mb-6">Bienvenue sur le tableau de bord ITThink</h2>
                <!-- <p class="text-gray-700">Voici un aperçu de vos dernières activités et options disponibles.</p>  -->
                <!-- <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Email</th>
                            <th>role</th>
                        </tr>
                    </thead>
                </table> -->
                <?php

                ?>
            </main>
        </div>
            <footer class="bg-gray-800 text-white py-4 mt-6">
                <div class="container mx-auto px-4 text-center">
                    <p> ITThink. Tous droits réservés.</p>
                </div>
            </footer>
        </div>
</body>

</html>