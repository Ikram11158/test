<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seance extends Model
{
    use HasFactory;

    // Nom de la table
    protected $table = 'seances';

    // Attributs qui peuvent être remplis massivement (évite les attaques de type mass-assignment)
    protected $fillable = [
        'seance',
        'chapitre',
        'contenu_realise',
        'pedagogie',
        'duree',
        'date_seance',
        'module',
        'matiere',
        'idgroupe',
    ];
    public function module()
{
    return $this->belongsTo(Module::class);
}

public function groupe()
{
    return $this->belongsTo(Groupe::class);
}
}
