<?php require_once('./register.php')?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inscription</title>
    <script src="https://cdn.tailwindcss.com"></script> 
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white shadow-lg rounded-lg p-8 w-full">
        <h1 class="text-2xl font-bold text-gray-800 mb-6 text-center">Inscription</h1>
        <form method="POST"  class="space-y-4">
            <div>
                <label for="" class="block text-sm font-medium text-gray-700">Nom : </label>
                <input type="text" name="nom" placeholder = "entrer votre nom" required
                class="mt-1 w-full py-2 rounded-md border-gray-300 shadow-sm focus:border-blue-500 outline-none">
            </div>
            <div>
                <label for="" class="block text-sm font-medium text-gray-700">Prenom : </label>
                <input type="text" name="prenom" placeholder = "entrer votre prenom" required
                class="mt-1 w-full py-2 rounded-md border-gray-700 shadow-sm focus:border-blue-500 outline-none">
            </div>
            <div>
                <label for="" class="block text-sm font-medium text-gray-700">Email :</label>
                <input type="email" name="email" placeholder = "entrer votre email" required
                class="mt-1 w-full py-2 rounded-md border-gray-300 shadow-sm focus:border-blue-500 outline-none">
            </div>
            <div>
                <label for="" class="block text-sm font-medium text-gray-700">Mot de passe :</label>
                <input type="password" name="motdepasse" placeholder = "entrer le mot de passe" required
                class="mt-1 w-full py-2 rounded-md border-gray-300 shadow-sm focus:border-blue-500 outline-none">
            </div>
            <div>
                <select name="select_role" id="role">
                    <option value="">setectionner</option>
                    <option value="client">Client</option>
                    <option value="freelance">Freelance</option>
                </select>
            </div>
            <div>
                <input type="submit" value="s'inscrire" name="boutton_inscrire"
                class="w-full bg-blue-500 text-white py-2 px-4 rounded-md shadow hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
        </form>
    </div>
</body>
</html>