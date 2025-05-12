<?php

namespace App\Http\Controllers\Api;

// On importe le contrôleur de base de Laravel
use App\Http\Controllers\Controller;
// On importe la classe Request de Laravel pour gérer les requêtes HTTP
use Illuminate\Http\Request;

// ✅ IMPORTS OBLIGATOIRES
use App\Models\Choice;
use App\Http\Requests\StoreChoiceRequest;

// Ce contrôleur gère toutes les actions liées aux "choices" (choix) via l'API.
// Il permet de lister, créer, afficher, modifier et supprimer des choix.
class ChoiceController extends Controller
{
    // GET /api/choices
    public function index()
    {
        // On retourne tous les choix présents dans la base de données
        return Choice::all();
    }

    // POST /api/choices
    public function store(StoreChoiceRequest $request)
    {
        // On crée un nouveau choix à partir des données validées de la requête
        $choice = Choice::create($request->validated());
        // On retourne le choix créé avec le code HTTP 201 (créé)
        return response()->json($choice, 201);
    }

    // GET /api/choices/{id}
    public function show(string $id)
    {
        // On récupère un choix précis par son id
        $choice = Choice::findOrFail($id);
        // On retourne le choix trouvé
        return response()->json($choice);
    }

    // PUT /api/choices/{id}
    public function update(Request $request, string $id)
    {
        // On récupère le choix à modifier
        $choice = Choice::findOrFail($id);
        // On met à jour le choix avec les nouvelles données
        $choice->update($request->all());
        // On retourne le choix modifié
        return response()->json($choice);
    }

    // DELETE /api/choices/{id}
    public function destroy(string $id)
    {
        // On récupère le choix à supprimer
        $choice = Choice::findOrFail($id);
        // On supprime le choix
        $choice->delete();
        // On retourne un message de confirmation
        return response()->json(['message' => 'Choix supprimé']);
    }
}