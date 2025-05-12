<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// Ce modèle représente un chapitre dans l'application
// Un chapitre appartient à une histoire et peut avoir plusieurs choix
class Chapter extends Model
{
    // Définit la relation "un chapitre appartient à une histoire"
    public function story()
    {
        return $this->belongsTo(Story::class);
    }
    
    // Définit la relation "un chapitre a plusieurs choix"
    public function choices()
    {
        return $this->hasMany(Choice::class);
    }
}