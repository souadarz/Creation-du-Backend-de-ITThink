
<?php require_once('./login.php')?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <script src="https://cdn.tailwindcss.com"></script> 
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white rounded-lg shadow-lg p-8 w-full max-w-md border border-gray-200">
        <h1 class="text-2xl font-bold text-gray-800 mb-6 text-center">Connexion</h1>
        <form action="" method="POST" class="space-y-6">
            <div>
                <label for="" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" placeholder="Entrer votre email"
                    class="mt-1 py-2 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500" 
                    required>
            </div>
            <div>
                <label for="" class="block text-sm font-medium text-gray-700">Mot de passe</label>
                <input type="password"  name="motdepasse" placeholder="Entrer votre mot de passe"
                    class="mt-1 py-2 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500" 
                    required>
            </div>
            <div>
                <input type="submit" value="Se connecter" name="boutton_connection"
                    class="w-full py-2 bg-blue-500 text-white py-2 px-4 rounded-md shadow hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                </input>
            </div>
        </form>
    </div>
</body>
</html>
