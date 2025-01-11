<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Afficher tous les utilisateurs
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    // Afficher le formulaire de création
    public function create()
    {
        return view('users.create');
    }

    // Enregistrer un nouvel utilisateur
    public function store(Request $request)
    {
        // Validation des données
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
            'role' => 'required|string',
        ]);
    
        // Création de l'utilisateur
        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),
            'role' => $validated['role'],
        ]);
    
        // Redirection avec un message de succès
        return redirect()->route('users.index')->with('success', 'Utilisateur ajouté avec succès!');
    }
    
    // Afficher un utilisateur spécifique
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    // Afficher le formulaire de modification
    public function edit($id) {
        $user = User::findOrFail($id); // Récupère l'utilisateur avec l'ID
        return view('users.edit', compact('user')); // Passe l'utilisateur à la vue
    }
    

    // Mettre à jour les informations d'un utilisateur
    public function update(Request $request, $id)
    {
        // Validation des données
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'role' => 'required|string',
        ]);
    
        // Récupérer l'utilisateur
        $user = User::find($id);
    
        if ($user) {
            // Mettre à jour les informations de l'utilisateur
            $user->name = $validated['name'];
            $user->email = $validated['email'];
            $user->role = $validated['role'];
            $user->save();
            return redirect()->route('users.index')->with('success', 'Utilisateur mis à jour avec succès.');
        }
    
        return redirect()->route('users.index')->with('fail', 'Utilisateur non trouvé.');
    }

    // Supprimer un utilisateur
    public function destroy($id)
    {
        $user = User::find($id);
    
        if ($user) {
            $user->delete();
            return redirect()->route('users.index')->with('success', 'Utilisateur supprimé avec succès.');
        }
    
        return redirect()->route('users.index')->with('fail', 'Utilisateur non trouvé.');
    }
}
