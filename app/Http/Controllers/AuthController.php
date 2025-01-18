<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if (Auth::attempt($credentials)) {
            request()->session()->regenerate();
            $user = Auth::user();

            if ($user->role === 'admin') {
                return redirect()->route('users.index'); 
            } elseif ($user->role === 'teacher') {
                return redirect()->route('modulles.index');
                //return redirect()->route('seances.showForm');
            }

            return redirect()->route('login')->withErrors('Rôle non autorisé');
        }
        else {
            return back()->withErrors('Identifiants incorrects');
        }
    }




    // Log out (facultatif, si vous voulez permettre à l'utilisateur de se déconnecter)
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
