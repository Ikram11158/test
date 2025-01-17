<?php

namespace App\Http\Controllers;

use App\Models\Modulle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\groupess;
class ModulleController extends Controller
{
    // Afficher la liste des modules
    public function index()
    {
        $modulles = Modulle::all();  // Récupérer tous les modules
        return view('modulles/modulle', compact('modulles'));  // Passer les modules à la vue
    }

    public function create()
    {
        return view('modulles.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
        ]);

        Modulle::create($validated);

        return redirect()->route('modulles.index')->with('success', 'Modulle créé avec succès!');
    }
    function listeGroupe(  $modulleId ){

      ; // Remplacez par l'ID réel du module

// Obtenez la liste des groupes d'un module spécifique
$modulle = DB::table('modulles')->where('id', $modulleId)->first();

// Récupérer les groupes associés au module
$groupes = DB::table('groupess')
    ->where('modulle_id', $modulleId)
    ->get();

// Déboguer pour vérifier les données
// dd($modulle, $groupes);

// Passer les données à la vue
return view('groupes.group', compact('modulle', 'groupes'));
    }
    public function show($id)
    {
        $modulle = Modulle::findOrFail($id);
        $groupes = Groupess::where('modulle_id', $id)->get();

        return view('modulles.show', compact('modulle', 'groupes'));
    }

    // Afficher le formulaire de modification d'un module
    public function edit($id)
    {
        $modulle = Modulle::findOrFail($id);
        return view('modulles.edit', compact('modulle'));
    }

    // Mettre à jour un module
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
        ]);

        $modulle = Modulle::findOrFail($id);
        $modulle->update($validated);

        return redirect()->route('modulles.index')->with('success', 'Module mis à jour avec succès!');
    }

    // Supprimer un module
    public function destroy($id)
    {
        $modulle = Modulle::find($id);

        if ($modulle) {
            $modulle->delete();
            return redirect()->route('modulles.index')->with('success', 'Module supprimé avec succès!');
        }

        return redirect()->route('modulles.index')->with('fail', 'Module non trouvé.');
    }
}