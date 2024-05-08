<div class="p-6">
    <h2 class="text-xl font-semibold mb-4">Formulaire de notation</h2>
    <form action="{{ route('univ1', $university->id) }}" method="POST" class="space-y-4">
        @csrf
        <!-- Qualité de l'enseignement -->
        <div class="flex items-center">
            <label class="mr-2">Qualité de l'enseignement :</label>
            @for ($i = 1; $i <= 5; $i++)
                <input type="radio" id="quality{{ $i }}" name="quality" value="{{ $i }}" required>
                <label for="quality{{ $i }}" class="mr-2">{{ $i }}</label>
            @endfor
        </div>
        <!-- Recherche -->
        <div class="flex items-center">
            <label class="mr-2">Recherche :</label>
            @for ($i = 1; $i <= 5; $i++)
                <input type="radio" id="research{{ $i }}" name="research" value="{{ $i }}" required>
                <label for="research{{ $i }}" class="mr-2">{{ $i }}</label>
            @endfor
        </div>
        <!-- Vie étudiante -->
        <div class="flex items-center">
            <label class="mr-2">Vie étudiante :</label>
            @for ($i = 1; $i <= 5; $i++)
                <input type="radio" id="student_life{{ $i }}" name="student_life" value="{{ $i }}" required>
                <label for="student_life{{ $i }}" class="mr-2">{{ $i }}</label>
            @endfor
        </div>
        <!-- Support aux étudiants -->
        <div class="flex items-center">
            <label class="mr-2">Support aux étudiants :</label>
            @for ($i = 1; $i <= 5; $i++)
                <input type="radio" id="student_support{{ $i }}" name="student_support" value="{{ $i }}" required>
                <label for="student_support{{ $i }}" class="mr-2">{{ $i }}</label>
            @endfor
        </div>
        <button type="submit" class="text-green-600 hover:underline"><strong>Soumettre</strong></button>
    </form>
</div>
