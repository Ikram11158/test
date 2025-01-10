<?php

namespace App\Http\Controllers;

use App\Models\Professeur;
use Illuminate\Http\Request;

class ProfesseurController extends Controller
{
    // Afficher tous les professeurs
    public function index()
    {
        $professeurs = Professeur::all();
        return view('professeurs.index', compact('professeurs'));
    }

    // Afficher le formulaire de création
    public function create()
    {
        return view('professeurs.create');
    }

    // Enregistrer un nouveau professeur
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'email' => 'required|email|unique:professeurs',
            'role' => 'required|string',
        ]);

        $professeur = Professeur::create($request->all());

        return redirect()->route('professeurs.show', $professeur->id)->with('success', 'Professeur ajouté avec succès !');
    }

    // Afficher un professeur spécifique
    public function show(Professeur $professeur)
    {
        return view('professeurs.show', compact('professeur'));
    }

    // Afficher le formulaire de modification
    public function edit(Professeur $professeur)
    {
        return view('professeurs.edit', compact('professeur'));
    }

    // Mettre à jour les informations d'un professeur
    public function update(Request $request, $id)
{
    // Find the professeur by ID
    $professeur = Professeur::findOrFail($id);

    // Validate the request data
    $validatedData = $request->validate([
        'nom' => 'required|string|max:255',
        'email' => 'required|email|unique:professeurs,email,' . $id, // Exclude the current professeur's email
        'role' => 'required|string',
    ]);

    // Update the professeur
    $professeur->update($validatedData);

    // Redirect to the index page with a success message
    return redirect()->route('professeurs.index')->with('success', 'Professeur updated successfully');
}

    // Supprimer un professeur
    public function destroy($id)
    {
        $professeur = Professeur::find($id);
    
        if ($professeur) {
            $professeur->delete();
            return redirect()->route('professeurs.index')->with('success', 'Professeur supprimé avec succès.');
        }
    
        return redirect()->route('professeurs.index')->with('fail', 'Professeur non trouvé.');
    }
    
}
