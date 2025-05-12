<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// Ce modèle représente un choix dans l'application
// Un choix appartient à un chapitre et peut mener à un autre chapitre
class Choice extends Model
{
    // Définit la relation "un choix appartient à un chapitre"
    public function chapter()
    {
        return $this->belongsTo(Chapter::class);
    }
    
    // Définit la relation "un choix mène à un autre chapitre"
    public function nextChapter()
    {
        return $this->belongsTo(Chapter::class, 'next_chapter_id');
    }
}