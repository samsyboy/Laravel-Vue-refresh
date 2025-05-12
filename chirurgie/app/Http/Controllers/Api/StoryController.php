<?php

namespace App\Http\Controllers\Api;

// On importe le contrôleur de base de Laravel
use App\Http\Controllers\Controller;
// On importe la classe Request de Laravel pour gérer les requêtes HTTP
use Illuminate\Http\Request;
// On importe le modèle Story pour interagir avec la table "stories"
use App\Models\Story;
// On importe la requête de validation personnalisée pour la création de story
use App\Http\Requests\StoreStoryRequest;

// Ce contrôleur gère toutes les actions liées aux "stories" (histoires) via l'API.
class StoryController extends Controller
{
    // GET /api/stories - avec chapitres et choix inclus + first_chapter_id
    public function index()
    {
        // On récupère toutes les stories avec leurs chapitres et choix associés
        $stories = Story::with('chapters.choices')->get();

        // On ajoute dynamiquement le champ first_chapter_id à chaque story
        $stories->transform(function ($story) {
            // On trie les chapitres par id et on prend le premier (le début de l'histoire)
            $firstChapter = $story->chapters->sortBy('id')->first();
            // On ajoute l'id du premier chapitre à la story
            $story->first_chapter_id = $firstChapter ? $firstChapter->id : null;
            return $story;
        });

        // On retourne la liste des stories (avec chapitres, choix, et first_chapter_id)
        return $stories;
    }

    // POST /api/stories
    public function store(StoreStoryRequest $request)
    {
        // On crée une nouvelle story à partir des données validées de la requête
        $story = Story::create($request->validated());
        // On retourne la story créée avec le code HTTP 201 (créé)
        return response()->json($story, 201);
    }

    // GET /api/stories/{id}
    public function show(string $id)
    {
        // On récupère une story précise avec ses chapitres et choix
        $story = Story::with('chapters.choices')->findOrFail($id);
        // On ajoute l'id du premier chapitre à la story
        $firstChapter = $story->chapters->sortBy('id')->first();
        $story->first_chapter_id = $firstChapter ? $firstChapter->id : null;
        // On retourne la story trouvée
        return response()->json($story);
    }

    // PUT /api/stories/{id}
    public function update(Request $request, string $id)
    {
        // On récupère la story à modifier
        $story = Story::findOrFail($id);
        // On met à jour la story avec les nouvelles données
        $story->update($request->all());
        // On retourne la story modifiée
        return response()->json($story);
    }

    // DELETE /api/stories/{id}
    public function destroy(string $id)
    {
        // On récupère la story à supprimer
        $story = Story::findOrFail($id);
        // On supprime la story
        $story->delete();
        // On retourne un message de confirmation
        return response()->json(['message' => 'Story supprimée']);
    }
}