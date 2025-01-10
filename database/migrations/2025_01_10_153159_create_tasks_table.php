<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id(); // ID auto-incrémenté
            $table->string('title'); // Titre de la tâche
            $table->text('description')->nullable(); // Description de la tâche
            $table->date('due_date'); // Date limite de la tâche
            $table->enum('status', ['pending', 'in_progress', 'completed'])->default('pending'); // Statut de la tâche
            $table->timestamps(); // created_at et updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
};
