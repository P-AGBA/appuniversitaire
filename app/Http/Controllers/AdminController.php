<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\UniversityController;
use App\Models\User;
use App\Models\Rating;
use App\Models\University;

class AdminController extends Controller
{
    //
    public function __construct()
    {
       // $this->middleware('auth');
       // $this->middleware('admin');
        //  $this->middleware(AdminMiddleware::class)->only('universites');
    }

    public function create()
    {
        // Logique pour afficher le tableau de bord de l'administrateur
        return view('Admin.universities');
    }
    public function dashboard()
    {
        // Logique pour afficher le tableau de bord de l'administrateur
        return view('dashboard');
    }
    public function utilisateurs()
    {
        // Récupérer le rôle 'admin'
        $adminRole = Role::where('name', 'admin')->first();

        // Récupérer tous les utilisateurs sauf ceux qui ont le rôle d'administrateur
        $users = User::whereDoesntHave('roles', function ($query) use ($adminRole) {
            $query->where('id', $adminRole->id);
        })->get();

        // Passer les utilisateurs à la vue
        return view('Admin.util', compact('users'));
    }

    public function store(Request $request)
    {
        // Valider les données de la requête
        $request->validate([
            'name' => 'required|unique:universities|max:255',
            'description' => 'required',
            'location' => 'required',
            'website' => 'required|url',
            'logo' => 'nullable|image|max:2048',
            // Taille maximale de l'image : 2 Mo
        ]);

        // Créer une nouvelle instance d'université
        $university = new University();
        $university->name = $request->name;
        $university->description = $request->description;
        $university->location = $request->location;
        $university->website = $request->website;

        if ($request->hasFile('logo')) {
            // Enregistrer le logo dans le stockage et obtenir son chemin d'accès
            $logoPath = $request->file('logo')->store('images', 'public');
            // Enregistrez uniquement le chemin relatif de l'image dans la base de données
            $university->logo = $logoPath;
        }

        // Enregistrer l'université dans la base de données
        $university->save();

        // Rediriger vers le tableau de bord de l'administrateur si l'université est enregistrée avec
        // Rediriger vers le tableau de bord de l'administrateur si l'université est enregistrée avec succès
        return redirect()->route('dashboard')->with('success', 'Université ajoutée avec succès!');

    }

    public function index()
    {
        $universites = University::all();
        return view('Admin.listeuniv', ['universites' => $universites]);
    }
    public function showUserRatings()
    {
        // Récupérer toutes les notations des utilisateurs depuis la base de données
        $ratings = Rating::all();

        // Passer les données à la vue
        return view('user_ratings', ['ratings' => $ratings]);
    }
}
