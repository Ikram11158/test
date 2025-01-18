<?php

// app/Models/Groupess.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groupess extends Model
{
    use HasFactory;

    protected $table = 'groupess';

    protected $fillable = [
        'nom',
        'modulle_id',  // Ajoutez cette colonne à la table pour la relation
    ];

    // Relation avec Modulle (un groupe appartient à un module)
    public function modulle()
    {
        return $this->belongsTo(Modulle::class);
    }
}
