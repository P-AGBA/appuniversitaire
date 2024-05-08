<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4" align="center">Liste des utilisateurs</h1>

    <div class="overflow-x-auto">
        <table class="w-full bg-white shadow-md rounded-md border border-gray-200">
            <thead>
            <tr>
                <th class="px-4 py-2 bg-gray-100 border-b border-gray-200 text-center">Nom</th>
                <th class="px-4 py-2 bg-gray-100 border-b border-gray-200 text-center">Email</th>
            </tr>
            </thead>
            <tbody class="text-center">
            @foreach ($users as $user)
                <tr>
                    <td class="px-4 py-2 border-b border-gray-200">{{ $user->name }}</td>
                    <td class="px-4 py-2 border-b border-gray-200">{{ $user->email }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
