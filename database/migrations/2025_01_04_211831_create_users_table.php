<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nom de l'utilisateur
            $table->string('email')->unique(); // Email unique
            $table->string('phone_number')->nullable(); // Numéro de téléphone (optionnel)
            $table->timestamp('email_verified_at')->nullable(); // Date de vérification de l'email
            $table->string('password'); // Mot de passe
            $table->enum('role', ['admin', 'teacher'])->default('teacher'); // Rôle avec une valeur par défaut de 'teacher'
            $table->rememberToken(); // Token pour la session
            $table->timestamps(); // Colonnes de création et mise à jour
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
};
