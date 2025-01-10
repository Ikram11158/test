<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeancesTable extends Migration
{
    public function up()
    {
        Schema::create('seances', function (Blueprint $table) {
            $table->id();
            $table->string('seance');
            $table->string('chapitre');
            $table->text('contenu_realise');
            $table->string('pedagogie');
            $table->integer('duree'); // Durée en minutes
            $table->date('date_seance');
            $table->string('module');
            $table->string('matiere');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('seances');
    }
}
