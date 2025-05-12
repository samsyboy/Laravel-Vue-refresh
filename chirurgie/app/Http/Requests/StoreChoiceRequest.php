<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

// Cette classe gère la validation des données lors de la création d'un nouveau choix
// Elle hérite de FormRequest qui est une classe Laravel pour gérer les requêtes de formulaire
class StoreChoiceRequest extends FormRequest
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
     * Définit les règles de validation pour les données du choix.
     * Ces règles sont appliquées automatiquement avant la création du choix.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'chapter_id' => 'required|exists:chapters,id',      // L'ID du chapitre doit exister dans la table chapters
            'text' => 'required|string|max:255',                // Le texte est obligatoire, doit être une chaîne de max 255 caractères
            'next_chapter_id' => 'nullable|exists:chapters,id', // L'ID du prochain chapitre est optionnel mais doit exister dans la table chapters
        ];
    }
}