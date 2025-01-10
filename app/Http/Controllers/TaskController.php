<?php

namespace App\Http\Controllers;
use App\Models\Task;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    // Afficher toutes les tâches
    public function index()
    {
        $tasks = Task::all(); // Récupérer toutes les tâches
        return view('tasks.index', compact('tasks')); // Passer les tâches à la vue
    }

    // Afficher le formulaire de création d'une tâche
    public function create()
    {
        return view('tasks.create');
    }

    // Enregistrer une nouvelle tâche
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'due_date' => 'required|date',
            'status' => 'required|string|in:pending,in_progress,completed',
        ]);

        // Créer la tâche
        Task::create($request->all());

        return redirect()->route('tasks.index')->with('success', 'Tâche ajoutée avec succès.');
    }

    // Afficher une tâche spécifique
    public function show(Task $task)
    {
        return view('tasks.show', compact('task'));
    }

    // Afficher le formulaire d'édition d'une tâche
    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    // Mettre à jour les informations d'une tâche
    public function update(Request $request, Task $task)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'due_date' => 'required|date',
            'status' => 'required|string|in:pending,in_progress,completed',
        ]);

        $task->update($request->all());

        return redirect()->route('tasks.index')->with('success', 'Tâche mise à jour avec succès.');
    }

    // Supprimer une tâche
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('tasks.index')->with('success', 'Tâche supprimée avec succès.');
    }
}