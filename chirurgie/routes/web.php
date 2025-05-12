<?php

use Illuminate\Support\Facades\Route;
// On importe les contrôleurs API pour les utiliser dans les routes
use App\Http\Controllers\Api\StoryController;
use App\Http\Controllers\Api\ChapterController;
use App\Http\Controllers\Api\ChoiceController;

// 🌐 Route d'accueil
Route::get('/', function () {
    // Quand on va sur la racine du site ("/"), on affiche la vue "home"
    return view('home');
});

// 📦 Groupe de routes API
Route::prefix('/api')->group(function () {
    // Toutes les routes définies ici commenceront par "/api"

    // Stories
    Route::get('/stories', [StoryController::class, 'index']);
    // Route GET pour récupérer toutes les stories (histoires)
    Route::middleware('auth:sanctum')->post('/stories', [StoryController::class, 'store']);
    // Route POST pour créer une nouvelle story

    // Chapters
    Route::get('/chapters', [ChapterController::class, 'index']);
    // Route GET pour récupérer tous les chapitres
    Route::get('/chapters/{id}', [ChapterController::class, 'show']); // 👈 ajouté ici
    // Route GET pour récupérer un chapitre précis par son id
    Route::middleware('auth:sanctum')->post('/chapters', [ChapterController::class, 'store']); // route protégée
    // Route POST pour créer un chapitre, protégée par l'authentification Sanctum

    // Choices
    Route::get('/choices', [ChoiceController::class, 'index']);
    // Route GET pour récupérer tous les choix
    Route::middleware('auth:sanctum')->post('/choices', [ChoiceController::class, 'store']);
    // Route POST pour créer un nouveau choix

    // Route pour enregistrer le choix et mettre à jour les jauges
    Route::post('/select-choice', [ChapterController::class, 'selectChoice']);
});