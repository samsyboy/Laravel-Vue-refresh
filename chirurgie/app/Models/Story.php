<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// Ce modèle représente une histoire dans l'application
// Une histoire peut avoir plusieurs chapitres
class Story extends Model
{
    // Définit la relation "une histoire a plusieurs chapitres"
    public function chapters()
    {
        return $this->hasMany(Chapter::class);
    }
}