<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

    // Attribuer les colonnes qui peuvent être modifiées en masse
    protected $fillable = [
        'title', 'description', 'due_date', 'status',
    ];
}