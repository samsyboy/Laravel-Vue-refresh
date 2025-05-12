<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Chapter;
use App\Http\Requests\StoreChapterRequest;

class ChapterController extends Controller
{
    public function index()
    {
        return Chapter::with('choices')->get();
    }

    public function store(StoreChapterRequest $request)
    {
        $chapter = Chapter::create($request->validated());
        return response()->json($chapter, 201);
    }

    public function show(string $id)
    {
        // On récupère le chapitre avec ses choix
        $chapter = Chapter::with('choices')->findOrFail($id);

        // On récupère l'historique des choix depuis la session
        $choiceHistory = session('choice_history', []);

        // On calcule les valeurs des jauges en fonction de l'historique
        $selfConfidence = 0;
        $medicalRisk = 0;

        foreach ($choiceHistory as $choice) {
            $selfConfidence += $choice['self_confidence_impact'];
            $medicalRisk += $choice['medical_risk_impact'];
        }

        // On s'assure que les valeurs restent entre 0 et 100
        $selfConfidence = max(0, min(100, $selfConfidence));
        $medicalRisk = max(0, min(100, $medicalRisk));

        // On ajoute les valeurs calculées au chapitre
        $chapter->self_confidence = $selfConfidence;
        $chapter->medical_risk = $medicalRisk;

        return response()->json($chapter);
    }

    public function update(Request $request, string $id)
    {
        $chapter = Chapter::findOrFail($id);
        $chapter->update($request->all());
        return response()->json($chapter);
    }

    public function destroy(string $id)
    {
        $chapter = Chapter::findOrFail($id);
        $chapter->delete();
        return response()->json(['message' => 'Chapitre supprimé']);
    }

    // Méthode pour enregistrer le choix et mettre à jour la session
    public function selectChoice(Request $request)
    {
        if ($request->input('reset')) {
            session(['choice_history' => []]);
            return response()->json(['success' => true]);
        }
        $choiceHistory = session('choice_history', []);
        $choiceHistory[] = [
            'self_confidence_impact' => $request->input('self_confidence_impact', 0),
            'medical_risk_impact' => $request->input('medical_risk_impact', 0),
        ];
        session(['choice_history' => $choiceHistory]);
        return response()->json(['success' => true]);
    }
}