<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as Authenticatable;


class AuthController extends Controller
{
    // Afficher le formulaire de connexion
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Gérer la soumission du formulaire de login
    public function login(Request $request)
    {
        // Validation des données d'entrée
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Tentative d'authentification
        if (Authenticatable::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            // Si l'utilisateur est authentifié, récupérer les informations de l'utilisateur connecté
            $user = Auth::user();

            // Vérifier le rôle de l'utilisateur et rediriger en conséquence
            if ($user->role === 'admin') {
                return redirect()->route('admin.dashboard');  // Rediriger vers le tableau de bord admin
            } elseif ($user->role === 'teacher') {
                return redirect()->route('seance.create');  // Rediriger vers la page de création de séance
            }

            // Si aucun rôle ne correspond, rediriger vers la page de login avec un message d'erreur
            return redirect()->route('login')->withErrors('Rôle non autorisé');
        }

        // Si l'authentification échoue, rediriger vers la page de login avec un message d'erreur
        return back()->withErrors('Identifiants invalides');
    }

    // Log out (facultatif, si vous voulez permettre à l'utilisateur de se déconnecter)
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
