<?php

namespace App\Http\Controllers;
use App\Models\University;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UniversityController extends Controller
{
    public function index()
    {
        // Récupérer toutes les universités depuis la base de données
        $universities = University::all();

        // Passer les données à la vue
        return view('universities.index', ['universities' => $universities]);
    }

    public function show($id)
    {
        // Récupérer les détails de l'université spécifique depuis la base de données
        $university = University::findOrFail($id);
        return view('univ1', ['university' => $university]);
    }
    /**
     * Noter une université.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $universityId
     * @return \Illuminate\Http\Response
     */
    public function rate(Request $request, $universityId)
    {
        // Vérifier si l'utilisateur a déjà noté cette université
        $existingRating = Rating::where('user_id', auth()->id())
            ->where('university_id', $universityId)
            ->first();

        if ($existingRating) {
            // L'utilisateur a déjà noté cette université, vous pouvez gérer cela comme vous le souhaitez
            // Par exemple, rediriger avec un message d'erreur
            return redirect()->back()->with('error', 'Vous avez déjà noté cette université.');
        }

        // Si l'utilisateur n'a pas encore noté cette université, procédez à l'enregistrement de la note
        // Récupérer les notes pour chaque critère depuis le formulaire
        $quality = $request->input('quality');
        $research = $request->input('research');
        $student_life = $request->input('student_life');
        $student_support = $request->input('student_support');

        // Calculer la note moyenne
        $average_score = ($quality + $research + $student_life + $student_support) / 4;

        // Enregistrer les notes dans la base de données
        $rating = new Rating();
        $rating->user_id = auth()->id(); // ou tout autre moyen pour récupérer l'ID de l'utilisateur
        $rating->university_id = $universityId;
        $rating->quality = $quality;
        $rating->research = $research;
        $rating->student_life = $student_life;
        $rating->student_support = $student_support;
        $rating->average_score = $average_score;
        $rating->save();

        // Rediriger vers la page des détails de l'université avec un message de succès
        return redirect()->route('university.show', $universityId)->with('success', 'Votre évaluation a été enregistrée avec succès.');
    }

    public function comment(Request $request, $universityId)
    {
        // Logique de traitement du commentaire ici

        // Exemple de sauvegarde d'un commentaire dans la base de données
        $comment = new Comment();
        $comment->user_id = auth()->id(); // Vous pouvez modifier cela pour récupérer l'utilisateur actuel
        $comment->university_id = $universityId;
        $comment->comment = $request->input('comment'); // Assurez-vous que votre formulaire a un champ nommé 'comment'
        $comment->save();

        // Redirection ou réponse appropriée après avoir soumis le commentaire
        return redirect()->back()->with('success', 'Votre commentaire a été ajouté avec succès.');
    }
    // UniversityController.php

    public function showComments()
    {
        // Récupérer toutes les universités avec leurs commentaires et notes associés
        $universities = University::with('comments', 'ratings')->get();

        // Calculer la moyenne des notes pour chaque université
        $universities->each(function ($university) {
            $total_score = 0;
            $total_ratings = 0;

            foreach ($university->ratings as $rating) {
                $total_score += $rating->quality + $rating->research + $rating->student_life + $rating->student_support;
                $total_ratings += 4; // Assuming there are 4 criteria
            }

            if ($total_ratings > 0) {
                $average_score = $total_score / $total_ratings;
                $university->average_score = $average_score;
            } else {
                $university->average_score = 0; // Or any default value you prefer
            }
        });

        return view('university.comments', compact('universities'));
    }
    // UniversityController.php
    public function showNotesAndComments()
    {
        // Récupérer toutes les universités avec leurs commentaires et notes associés
        $universities = University::with('comments', 'ratings')->get();

        // Passer les données à la vue
        return view('jody', compact('universities'));
    }
// UniversityController.php
    public function showAverageRatings()
    {
        // Récupérer toutes les universités avec leurs notes associées
        $universities = University::with('ratings')->get();

        // Calculer la moyenne des notes pour chaque université
        foreach ($universities as $university) {
            $totalScore = 0;
            $numberOfRatings = $university->ratings->count();

            // Calculer le total des notes
            foreach ($university->ratings as $rating) {
                $totalScore += $rating->average_score;
            }

            // Calculer la moyenne des notes
            $averageRating = $numberOfRatings > 0 ? $totalScore / $numberOfRatings : 0;

            // Ajouter la moyenne des notes à chaque université
            $university->average_rating = $averageRating;
        }

        // Passer les données à la vue
        return view('jody', compact('universities'));
    }

    public function destroy(University $university)
    {
        // Logique pour supprimer l'université
        $university->delete();

        // Redirection ou réponse appropriée après la suppression
        return back()->with('success', 'L\'université a été supprimée avec succès.');
    }
    public function showRankings(Request $request)
    {
        // Calculer la moyenne des notes pour chaque critère
        $averageQuality = DB::table('ratings')->avg('quality');
        $averageResearch = DB::table('ratings')->avg('research');
        $averageStudentLife = DB::table('ratings')->avg('student_life');
        $averageStudentSupport = DB::table('ratings')->avg('student_support');

        // Récupérer le critère sélectionné par l'utilisateur
        $criteria = $request->input('criteria', 'average_score');
        $averageResearchRating = Rating::avg('research');
        $universityId = University::where('name', 'Université de Lomé')->value('id');

// Calculer la moyenne des notes du critère "recherche" pour l'Université de Lomé

        $averageResearchRating = Rating::where('university_id', $universityId)->avg('research');

        $universities = University::all();

// Initialiser un tableau pour stocker les moyennes des notes de chaque critère pour chaque université
        $averageRatingsByUniversity = [];

// Pour chaque université, calculer la moyenne des notes de chaque critère
        foreach ($universities as $university) {
            $averageRatingsByUniversity[$university->name] = [
                'quality' => Rating::where('university_id', $university->id)->avg('quality'),
                'research' => Rating::where('university_id', $university->id)->avg('research'),
                'student_life' => Rating::where('university_id', $university->id)->avg('student_life'),
                'student_support' => Rating::where('university_id', $university->id)->avg('student_support'),
            ];
        }
        uasort($averageRatingsByUniversity, function ($a, $b) {
            return $a['research'] <=> $b['research'];
        });
        uasort($averageRatingsByUniversity, function ($a, $b) {
            return $a['quality'] <=> $b['quality'];
        });
// Calculer la moyenne des notes du critère "Qualité de l'enseignement"
        $averageQualityRating = Rating::avg('quality');

        // Classer les universités en fonction du critère sélectionné
        $universities = University::all()->sortByDesc(function ($university) use ($criteria, $averageQuality, $averageResearch, $averageStudentLife, $averageStudentSupport) {
            switch ($criteria) {
                case 'quality':
                    return $averageQuality;
                case 'research':
                    return $averageResearch;
                case 'student_life':
                    return $averageStudentLife;
                case 'student_support':
                    return $averageStudentSupport;
                default:
                    return $university->average_score;
            }

        });

        // Passer les données à la vue
        // Passer les données à la vue
// Passer les données à la vue
        return view('universities.rankings', compact('universities', 'criteria', 'averageResearchRating', 'averageQualityRating','universityId','averageRatingsByUniversity','averageRatingsByUniversity','averageRatingsByUniversity'));

    }
}
