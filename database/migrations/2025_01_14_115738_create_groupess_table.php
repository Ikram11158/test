<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupessTable extends Migration
{
    public function up()
    {
        Schema::create('groupess', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->foreignId('modulle_id')->constrained()->onDelete('cascade');  // Ajout de la relation avec Modulle
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('groupess');
    }
};
