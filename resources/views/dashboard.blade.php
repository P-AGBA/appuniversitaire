<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Vous êtes connecté!") }}
                    <h1 class="text-3xl font-bold mb-8">Administration</h1>

                    <div class="container mx-auto p-4">

                        <!-- Bouton pour gérer les universités -->
                        <div x-data="{ open: false }" class="p-6 text-gray-900 dark:text-gray-100">
                            <button @click="open = !open" id="toggleDropdown" class="gray">
                                Gérer les universités
                            </button>
                            <div x-show="open" @click.away="open = false" id="dropdownMenu" class="gray">
                                <a href="{{ route('universities') }}" class="block p-2 hover:bg-gray-100">Ajouter une université</a>
                                <a href="{{ route('Liste') }}" class="block p-2 hover:bg-gray-100">Affichage de la liste des universités</a>
                            </div>
                        </div>



                        <!-- Bouton pour gérer les critères de notation -->
                        <button class="gray">
                            Gérer les critères de notation
                        </button>
                        <br>

                        <!-- Bouton pour gérer les utilisateurs -->
                        <a href="{{ route('util') }}" class="gray">
                            <button class="p-6 text-gray-900 dark:text-gray-100">
                                Gérer les utilisateurs
                            </button>
                        </a>
                        <br>

                        <!-- Bouton pour modérer les commentaires et les notations -->
                        <button class="gray">
                            Modérer les commentaires et les notations
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <style>
        .gray {
            background-color: rgba(204, 204, 204, 0.29); /* Gris clair */
            color: #000000; /* Noir */
        }
    </style>
</x-app-layout>
