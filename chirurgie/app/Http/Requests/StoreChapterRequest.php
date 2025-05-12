<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

// Cette classe gère la validation des données lors de la création d'un nouveau chapitre
// Elle hérite de FormRequest qui est une classe Laravel pour gérer les requêtes de formulaire
class StoreChapterRequest extends FormRequest
{
    /**
     * Détermine si l'utilisateur est autorisé à faire cette requête.
     * Ici, on autorise tout le monde (return true)
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Définit les règles de validation pour les données du chapitre.
     * Ces règles sont appliquées automatiquement avant la création du chapitre.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'story_id' => 'required|exists:stories,id',      // L'ID de l'histoire doit exister dans la table stories
            'title' => 'required|string|max:255',            // Le titre est obligatoire, doit être une chaîne de max 255 caractères
            'content' => 'required|string',                  // Le contenu est obligatoire et doit être une chaîne
            'self_confidence' => 'required|integer',         // Le niveau de confiance en soi est obligatoire et doit être un nombre entier
            'medical_risk' => 'required|integer',            // Le risque médical est obligatoire et doit être un nombre entier
        ];
    }
}