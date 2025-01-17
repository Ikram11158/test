<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfesseurController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\SeanceController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ModulleController;
use App\Http\Controllers\GroupessController;
use Illuminate\Support\Facades\Route;
// Route d'accueil
Route::get('/', function () {
    return view('welcome');
});

///Route::middleware('auth')->group(function () {
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

    // Routes pour les modulles
    Route::prefix('modulles')->group(function () {
        Route::get('/', [ModulleController::class, 'index'])->name('modulles.index'); // Liste des modules
        Route::get('/add', [ModulleController::class, 'create'])->name('modulles.create'); // Formulaire d'ajout de module
        Route::post('/add', [ModulleController::class, 'store'])->name('modulles.store'); // Enregistrement d'un module
        Route::get('/edit/{modulle}', [ModulleController::class, 'edit'])->name('modulles.edit'); // Formulaire d'édition d'un module
        Route::put('/modulles/{id}', [ModulleController::class, 'update'])->name('modulles.update'); // Mise à jour d'un module
        Route::delete('modulles/{id}', [ModulleController::class, 'destroy'])->name('modulles.destroy'); // Suppression d'un module
        Route::get('/show/{modulle}', [ModulleController::class, 'show'])->name('modulles.show'); // Afficher un module
    });

    // Routes pour les groupess
    Route::prefix('groupess')->group(function () {
       // Route::get('/modulle/{modulleId}', [GroupessController::class, 'index'])->name('groupess.index'); // Liste des groupes d'un module
        Route::get('/modulle/{modulleId}/add', [GroupessController::class, 'create'])->name('groupess.create'); // Formulaire d'ajout d'un groupe pour un module
        Route::post('/modulle/{modulleId}/add', [GroupessController::class, 'store'])->name('groupess.store'); // Enregistrer un groupe
        Route::get('/modulle/{modulleId}/edit/{groupess}', [GroupessController::class, 'edit'])->name('groupess.edit'); // Formulaire d'édition d'un groupe
        Route::put('/modulle/{modulleId}/groupess/{id}', [GroupessController::class, 'update'])->name('groupess.update'); // Mise à jour d'un groupe
        Route::delete('/modulle/{modulleId}/groupess/{id}', [GroupessController::class, 'destroy'])->name('groupess.destroy'); // Suppression d'un groupe
        Route::get('/modulle/{modulleId}/show/{groupess}', [GroupessController::class, 'show'])->name('groupess.show'); // Afficher un groupe
        Route::get('/modulle/{id}', [ModulleController::class, 'listeGroupe'])->name('Groupe1'); // Afficher un groupe
 
    });
    

    // Afficher le formulaire d'ajout de séance
    Route::get('/seances/{id}', [SeanceController::class, 'showForm'])->name('seances.showForm');

    // Enregistrer la séance dans la base de données
    Route::post('/seances', [SeanceController::class, 'store'])->name('seances.store');

    // Afficher la liste des séances
    Route::get('/seances/list/{id}', [SeanceController::class, 'index'])->name('seances.index');

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
//});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout',  [AuthController::class, 'logout']);
