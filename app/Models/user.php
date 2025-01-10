<?php

namespace App\Models;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class User extends Model
{
    use HasFactory, Notifiable;

    // Déclarez les champs que vous pouvez remplir en masse
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    // Vous pouvez ajouter des méthodes, des relations ou des attributs supplémentaires ici
}
