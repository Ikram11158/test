<?php

use App\Http\Controllers\UserController; // Import du UserController
use App\Http\Controllers\ProfesseurController; // Import du ProfesseurController
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\SeanceController;
use App\Http\Controllers\AuthController;


// Route d'accueil
Route::get('/', function () {
    return view('welcome');
});


Route::middleware('auth')->group(function () {
    
    /**
     * Routes pour les professeurs
     */
    Route::prefix('users')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('users.index'); // Liste des utilisateurs
        Route::get('/add', [UserController::class, 'create'])->name('users.create'); // Formulaire d'ajout
        Route::post('/add', [UserController::class, 'store'])->name('users.store'); // Ajout d'un utilisateur
        Route::get('/edit/{users}', [UserController::class, 'edit'])->name('users.edit'); // Formulaire d'édition
        Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update'); // Modification d'un utilisateur
        Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy'); // Suppression d'un utilisateur
        Route::get('/show/{users}', [UserController::class, 'show'])->name('users.show'); // Afficher un utilisateur
    });

    Route::prefix('professeurs')->group(function () {
        Route::get('/', [ProfesseurController::class, 'index'])->name('professeurs.index'); // Liste des professeurs
        Route::get('/add', [ProfesseurController::class, 'create'])->name('professeurs.create'); // Formulaire d'ajout
        Route::post('/add', [ProfesseurController::class, 'store'])->name('professeurs.store'); // Ajout d'un professeur
        Route::get('/edit/{professeur}', [ProfesseurController::class, 'edit'])->name('professeurs.edit'); // Formulaire d'édition
        Route::put('/professeurs/{id}', [ProfesseurController::class, 'update'])->name('professeurs.update'); // Mise à jour d'un professeur
        Route::delete('professeurs/{id}', [ProfesseurController::class, 'destroy'])->name('professeurs.destroy'); // Suppression d'un professeur
        Route::get('/show/{professeur}', [ProfesseurController::class, 'show'])->name('professeurs.show'); // Afficher un professeur
    });

    // Afficher le formulaire d'ajout de séance
    Route::get('/seances', [SeanceController::class, 'showForm'])->name('seances.showForm');

    // Enregistrer la séance dans la base de données
    Route::post('/seances', [SeanceController::class, 'store'])->name('seances.store');

    // Afficher la liste des séances
    Route::get('/seances/list', [SeanceController::class, 'index'])->name('seances.index');
    /**
     * Routes pour les tâches
     */
    Route::prefix('tasks')->group(function () {
        Route::get('/', [TaskController::class, 'index'])->name('tasks.index'); // Liste des tâches
        Route::get('/add', [TaskController::class, 'create'])->name('tasks.create'); // Formulaire d'ajout
        Route::post('/add', [TaskController::class, 'store'])->name('tasks.store'); // Ajout d'une tâche
        Route::get('/edit/{task}', [TaskController::class, 'edit'])->name('tasks.edit'); // Formulaire d'édition
        Route::put('/task/{id}', [TaskController::class, 'update'])->name('tasks.update'); // Mise à jour d'une tâche
        Route::delete('/task/{id}', [TaskController::class, 'destroy'])->name('tasks.destroy'); // Suppression d'une tâche
        Route::get('/show/{task}', [TaskController::class, 'show'])->name('tasks.show'); // Afficher une tâche
    });
});


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);