<?php

namespace App\Http\Controllers;

use App\Models\Seance;  // Ajouter le modèle Seance
use Illuminate\Http\Request;

class SeanceController extends Controller
{
    // Afficher le formulaire d'ajout de séance
    public function showForm($id)
    {$idgroupe=$id;
        return view('page1', ['idgroupe' => $idgroupe]);
    }

    // Traiter les données soumises et enregistrer dans la base de données
    public function store(Request $request)
    {
        // Validation des données du formulaire
        $validated = $request->validate([
            'seance' => 'required|string|max:255',
            'chapitre' => 'required|string|max:255',
            'contenu_realise' => 'required|string',
            'pedagogie' => 'required|string|max:255',
            'duree' => 'required|integer',
            'date_seance' => 'required|date',
            'module' => 'required|string|max:255',
            'matiere' => 'required|string|max:255',
            'idgroupe'=>'required',
        ]);

        // Sauvegarder la séance dans la base de données
        Seance::create($validated);

        // Rediriger vers la page de liste des séances avec un message de succès
        return redirect()->route('seances.index',['id'=>$request->idgroupe])->with('success', 'Séance enregistrée avec succès!');
    }

    // Afficher toutes les séances
    public function index($id)
    {
        $seances = Seance::all()->where('idgroupe',$id);  // Récupérer toutes les séances depuis la base de données
        return view('seanceShow', compact('seances'));
    }
}
