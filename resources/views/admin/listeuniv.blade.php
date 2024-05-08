<!-- liste_universites.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Universités</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
<div class="container mx-auto p-4">
    <h1 class="text-3xl font-bold mb-8">Liste des Universités</h1>

    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
        <tr>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Logo</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nom</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Location</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Site Web</th>
        </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
        @foreach ($universites as $universite)
            <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                    <img src="{{ asset('storage/' . $universite->logo) }}" alt="{{ $universite->name }}" class="h-10 w-10 object-cover rounded-full">
                </td>
                <td class="px-6 py-4 whitespace-nowrap">{{ $universite->name }}</td>
                <td class="px-6 py-4 whitespace-nowrap overflow-hidden overflow-y-scroll max-h-32">
                    {{ substr($universite->description, 0, strlen($universite->description) / 5) }}...
                </td>
                <td class="px-6 py-4 whitespace-nowrap">{{ $universite->location }}</td>
                <td class="px-6 py-4 whitespace-nowrap"><a href="{{ $universite->website }}" target="_blank">{{ $universite->website }}</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
