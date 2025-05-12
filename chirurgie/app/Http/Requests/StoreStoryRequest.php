<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

// Cette classe gère la validation des données lors de la création d'une nouvelle histoire
// Elle hérite de FormRequest qui est une classe Laravel pour gérer les requêtes de formulaire
class StoreStoryRequest extends FormRequest
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
     * Définit les règles de validation pour les données de l'histoire.
     * Ces règles sont appliquées automatiquement avant la création de l'histoire.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',        // Le titre est obligatoire, doit être une chaîne de max 255 caractères
            'description' => 'required|string',          // La description est obligatoire et doit être une chaîne
        ];
    }
}