<?php

namespace App\Http\Controllers;

use App\Models\University;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //


    public function __invoke()
    {
        // Déplacer la récupération des universités ici
        $universities = University::all(); // Récupérer toutes les universités depuis la base de données

        if (auth()->check() && !auth()->user()->getAuthIdentifierName('mel')) {
            // Passez les données des universités à la vue
            return view('dashboard');
        } else {
            return view('home');
        }
    }
    public function showCommentHistory()
    {
        // Récupérer l'utilisateur connecté
        $user = Auth::user();

        // Récupérer les commentaires de l'utilisateur connecté
        $comments = Comment::where('user_id', $user->id)->get();

        // Passer les commentaires à la vue
        return view('comments.history', ['comments' => $comments]);
    }
}
