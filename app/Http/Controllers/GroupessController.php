<?php

// fichier contrôleur : app/Http/Controllers/GroupessController.php
namespace App\Http\Controllers;

use App\Models\Groupess;
use App\Models\Modulle;
use Illuminate\Http\Request;

class GroupessController extends Controller
{
    public function selectGroup($modulleId)
    {
        $modulle = Modulle::findOrFail($modulleId);  // Récupérer le module
        $groupess = $modulle->groupess;  // Récupérer les groupes associés à ce module
        return view('groupess.select_group', compact('groupess', 'modulle'));  // Passer les groupes à la vue
    }
    public function index($modulleId)
    {
        $modulle = Modulle::findOrFail($modulleId);
        $groupess = $modulle->groupess;

        return view('groupess.index', compact('modulle', 'groupess'));
    }

    public function create($modulleId)
    {
        $modulle = Modulle::findOrFail($modulleId);
        return view('groupess.create', compact('modulle'));
    }

    public function store(Request $request, $modulleId)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
        ]);

        $modulle = Modulle::findOrFail($modulleId);
        $modulle->groupess()->create($validated);

        return redirect()->route('groupess.index', $modulleId)->with('success', 'Groupess créé avec succès!');
    }
    public function edit($modulleId, $groupessId)
    {
        $modulle = Modulle::findOrFail($modulleId);
        $groupess = Groupess::findOrFail($groupessId);

        return view('groupess.edit', compact('groupess', 'modulle'));
    }

    // Mettre à jour un groupe
    public function update(Request $request, $modulleId, $groupessId)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
        ]);

        $groupess = Groupess::findOrFail($groupessId);
        $groupess->update($validated);

        return redirect()->route('groupess.index', $modulleId)->with('success', 'Groupe mis à jour avec succès!');
    }

    // Supprimer un groupe
    public function destroy($modulleId, $groupessId)
    {
        $groupess = Groupess::findOrFail($groupessId);
        $groupess->delete();

        return redirect()->route('groupess.index', $modulleId)->with('success', 'Groupe supprimé avec succès!');
    }
    public function show($id)
    {
        $groupess = Groupess::findOrFail($groupessId);
        return view('groupes.show', compact('group'));
    }
}

