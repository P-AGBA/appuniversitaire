<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une université</title>
    <!-- Inclure Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

</head>
<body class="bg-gray-100">
<div class="container mx-auto p-4">
    <h1 class="text-3xl font-bold mb-8">Ajouter une université</h1>

    <!-- Formulaire d'ajout d'une université -->
    <form action="{{ route('Admin.store') }}" method="POST" class="max-w-lg mx-auto" enctype="multipart/form-data">
        @csrf

        <!-- Champ Nom -->
        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-bold mb-2">Nom de l'université</label>
            <input type="text" name="name" id="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>

        <!-- Champ Description -->
        <div class="mb-4">
            <label for="description" class="block text-gray-700 font-bold mb-2">Description</label>
            <textarea name="description" id="description" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" rows="4" required></textarea>
        </div>

        <!-- Champ Location -->
        <div class="mb-4">
            <label for="location" class="block text-gray-700 font-bold mb-2">Location</label>
            <input type="text" name="location" id="location" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>

        <!-- Champ Site Web -->
        <div class="mb-4">
            <label for="website" class="block text-gray-700 font-bold mb-2">Site Web</label>
            <input type="text" name="website" id="website" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>

        <!-- Champ Logo -->
        <div class="mb-4 flex items-center">
            <label for="logo" class="block text-gray-700 font-bold mr-2">Logo</label>
            <div class="relative">
                <input type="file" name="logo" id="logo" accept="image/*" class="opacity-0 absolute inset-0 w-full h-full cursor-pointer">
                <button type="button" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline">Choisir un fichier</button>
            </div>
        </div>

        <!-- Bouton Ajouter -->
        <div class="flex justify-end">
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline">Ajouter</button>
        </div>
    </form>
</div>
</body>
</html>

