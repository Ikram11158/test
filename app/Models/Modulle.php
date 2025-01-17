<?php

// app/Models/Modulle.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modulle extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
    ];

    // Relation avec Groupess (un module peut avoir plusieurs groupes)
    public function groupess()
    {
        return $this->hasMany(Groupess::class);
    }
}
